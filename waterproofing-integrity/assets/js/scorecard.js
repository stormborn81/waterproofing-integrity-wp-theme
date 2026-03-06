/**
 * Waterproofing Integrity — Risk Scorecard
 *
 * Self-contained vanilla JS application. No dependencies.
 * Enqueued only on page-risk-scorecard.html template.
 *
 * Stages:
 *   1. Landing     — Navy hero, headline, Start button
 *   2. Questions   — 10 questions one at a time, gold progress bar, sessionStorage
 *   3. Calculating — 2-second spinner transition
 *   4. Lead Gate   — Form with client-side validation, POST to Zoho function
 *   5. Results     — Category score bars, risk badge, recommended services, CTA
 *
 * Question data ported exactly from:
 *   src/components/scorecard/scorecardData.ts (stormborn81/water-tight-resolve)
 *
 * Scoring logic ported exactly from scorecardData.ts:
 *   - Each scored answer: 0, 8, 17, or 25 points
 *   - 8 scored questions across 4 categories, max raw = 200
 *   - getTotalScore: Math.round( raw / 200 * 100 ) → 0–100
 *   - getRiskLevel: >= 75 = low, >= 40 = moderate, < 40 = high
 *   - getRecommendedServices: category < 38 triggers service recommendation
 *   - Q9 (role) and Q10 (project stage) are qualifying — no score, CRM only
 *
 * GTM events fired (matching source event names):
 *   scorecard_started
 *   scorecard_question_answered  { question_number, category, answer }
 *   scorecard_form_viewed        { total_time_in_assessment }
 *   scorecard_form_submitted     { role_segment, project_stage }
 *   scorecard_results_viewed     { total_score, risk_level }
 *   scorecard_cta_clicked        { risk_level, total_score }
 *
 * Zoho endpoint: replace PLACEHOLDER in ZOHO_API_URL with real zapikey.
 */

( function () {
	'use strict';

	// =========================================================================
	// CONFIG
	// =========================================================================

	var ZOHO_API_URL = 'https://www.zohoapis.com.au/crm/v2/functions/wi_scorecard_lead/actions/execute?auth_type=apikey&zapikey=PLACEHOLDER';

	var SESSION_KEY = 'wi_scorecard_state';

	// =========================================================================
	// QUESTION DATA — ported verbatim from scorecardData.ts
	// =========================================================================

	var QUESTIONS = [
		{
			id: 1,
			category: 'DESIGN RISK',
			categoryKey: 'design',
			question: 'Who designed the waterproofing for your current or upcoming project?',
			context: '68% of waterproofing failures originate in design, not installation.',
			answers: [
				{ label: 'An independent waterproofing consultant (separate from the installer)', score: 25 },
				{ label: 'The project architect or hydraulic engineer included it in their scope', score: 17 },
				{ label: 'The waterproofing installer will design and install', score: 8 },
				{ label: "I'm not sure / No one has specifically designed it", score: 0 },
			],
		},
		{
			id: 2,
			category: 'DESIGN RISK',
			categoryKey: 'design',
			question: 'Has your waterproofing design been reviewed against AS 3740 and AS 4654?',
			context: 'Non-compliant designs can void insurance, delay approvals, and trigger rectification orders.',
			answers: [
				{ label: 'Yes \u2014 independently reviewed and certified compliant', score: 25 },
				{ label: "The designer says it complies but it hasn't been independently checked", score: 17 },
				{ label: "I'm not sure which standards apply to my project", score: 8 },
				{ label: 'No formal design review has been done', score: 0 },
			],
		},
		{
			id: 3,
			category: 'CONSTRUCTION RISK',
			categoryKey: 'construction',
			question: 'Who inspects waterproofing at critical hold points during construction?',
			context: 'A single missed hold point can result in defects costing $50K\u2013$500K+ to rectify.',
			answers: [
				{ label: 'An independent waterproofing inspector (not the installer or builder)', score: 25 },
				{ label: 'The site supervisor or project manager checks it', score: 17 },
				{ label: 'The waterproofing installer self-certifies their own work', score: 8 },
				{ label: 'No formal inspection process is in place', score: 0 },
			],
		},
		{
			id: 4,
			category: 'CONSTRUCTION RISK',
			categoryKey: 'construction',
			question: 'How many independent inspections occur per waterproofing stage?',
			context: 'Projects with 3+ independent inspections per stage have 94% fewer post-completion defects.',
			answers: [
				{ label: '3 or more \u2014 pre-application, during application, and post-cure', score: 25 },
				{ label: '1\u20132 inspections at key milestones', score: 17 },
				{ label: 'One final sign-off at completion only', score: 8 },
				{ label: "None \u2014 or I don't know", score: 0 },
			],
		},
		{
			id: 5,
			category: 'COMPLIANCE RISK',
			categoryKey: 'compliance',
			question: 'Has your waterproofing been independently tested (e.g. flood test, electronic leak detection)?',
			context: 'Visual inspection alone misses up to 40% of membrane failures. Testing gives you evidence, not opinion.',
			answers: [
				{ label: 'Yes \u2014 NATA-accredited independent testing has been completed', score: 25 },
				{ label: 'Testing was done by the installer or builder', score: 17 },
				{ label: "Testing is planned but hasn't happened yet", score: 8 },
				{ label: 'No testing has been done or is planned', score: 0 },
			],
		},
		{
			id: 6,
			category: 'COMPLIANCE RISK',
			categoryKey: 'compliance',
			question: 'Do you have documented evidence of waterproofing compliance for every wet area and external membrane?',
			context: 'Without documentation, warranty claims fail, insurance claims are rejected, and rectification liability falls on you.',
			answers: [
				{ label: 'Yes \u2014 full compliance documentation, independently verified', score: 25 },
				{ label: "Some documentation exists but it's incomplete or unverified", score: 17 },
				{ label: 'The installer provided product warranties only', score: 8 },
				{ label: 'No formal compliance documentation exists', score: 0 },
			],
		},
		{
			id: 7,
			category: 'DEFECT EXPOSURE',
			categoryKey: 'defect',
			question: 'Have you experienced water ingress, leaks, or moisture issues on any current or recent project?',
			context: 'Early detection reduces average rectification costs by 72%. Unresolved defects compound.',
			answers: [
				{ label: "No \u2014 and we've had independent verification confirming this", score: 25 },
				{ label: "No visible issues, but we haven't had an independent assessment", score: 17 },
				{ label: 'Minor issues that have been patched or are being monitored', score: 8 },
				{ label: 'Yes \u2014 active leaks, moisture damage, or unresolved defects', score: 0 },
			],
		},
		{
			id: 8,
			category: 'DEFECT EXPOSURE',
			categoryKey: 'defect',
			question: 'If a waterproofing defect was found tomorrow, do you have a clear remediation pathway?',
			context: 'The average waterproofing defect costs $283K to resolve. Without a pathway, costs escalate and timelines blow out.',
			answers: [
				{ label: 'Yes \u2014 independent defect assessment, costed remediation plan, and specialist oversight', score: 25 },
				{ label: "We'd get the original installer back to assess and fix it", score: 17 },
				{ label: "We'd figure it out when the time comes", score: 8 },
				{ label: "No plan \u2014 and I'm not sure who would manage it", score: 0 },
			],
		},
		{
			id: 9,
			category: 'YOUR ROLE',
			categoryKey: 'qualifying',
			question: 'What best describes your role?',
			context: 'This helps us tailor your scorecard results.',
			answers: [
				{ label: 'Builder / Head Contractor',             crmValue: 'builder' },
				{ label: 'Developer / Asset Owner',               crmValue: 'developer' },
				{ label: 'Architect / Engineer / Consultant',     crmValue: 'consultant' },
				{ label: 'Strata Manager / Facility Manager',     crmValue: 'strata_fm' },
			],
		},
		{
			id: 10,
			category: 'PROJECT STAGE',
			categoryKey: 'qualifying',
			question: 'Where are you in your project timeline?',
			context: 'This helps us prioritise your results.',
			answers: [
				{ label: 'Pre-construction / Design phase',              crmValue: 'pre_construction' },
				{ label: 'Currently under construction',                 crmValue: 'under_construction' },
				{ label: 'Post-construction / Defect liability period',  crmValue: 'post_construction' },
				{ label: 'Existing building / Ongoing maintenance',      crmValue: 'existing_asset' },
			],
		},
	];

	// Category display labels
	var CATEGORY_DISPLAY = {
		design:       'Design Risk',
		construction: 'Construction Risk',
		compliance:   'Compliance Risk',
		defect:       'Defect Exposure',
	};

	// Service details — ported verbatim from scorecardData.ts SERVICE_DETAILS
	var SERVICE_DETAILS = {
		design_review: {
			name:        'Independent Design Review',
			description: "Your waterproofing design hasn't been independently verified against Australian Standards. A design review before works commence is the most cost-effective intervention available.",
			link:        '/services/#design',
		},
		inspection: {
			name:        'Independent Inspection',
			description: 'Critical hold points are not being independently checked. Our inspectors verify compliance at every stage \u2014 not just the final sign-off.',
			link:        '/services/#inspect',
		},
		testing: {
			name:        'Independent Testing (NATA Accredited)',
			description: "Without independent testing, you have no evidence base for warranty, insurance, or compliance claims. NATA-accredited testing closes that gap.",
			link:        '/services/#test',
		},
		remediation: {
			name:        'Remediation Advisory',
			description: 'Your project has unmanaged defect exposure. We diagnose the root cause, design the fix, and oversee the remediation \u2014 without any conflict of interest.',
			link:        '/services/#remediate',
		},
	};

	// Risk level display data (scoring thresholds from scorecardData.ts getRiskLevel)
	var RISK_CONFIG = {
		low: {
			label:   'Low Risk',
			colour:  '#166534',
			bg:      '#f0fdf4',
			border:  '#86efac',
			summary: 'Your project is well-positioned. Independent verification is in place across the key risk categories. Maintaining this standard through to completion will protect your programme and your liability position.',
		},
		moderate: {
			label:   'Moderate Risk',
			colour:  '#92400e',
			bg:      '#fffbeb',
			border:  '#fcd34d',
			summary: 'Risk factors are present in one or more categories. Independent review before works proceed is the most cost-effective step you can take now.',
		},
		high: {
			label:   'High Risk',
			colour:  '#991b1b',
			bg:      '#fef2f2',
			border:  '#fca5a5',
			summary: 'Significant exposure identified across multiple categories. We recommend an independent assessment before any further works are undertaken.',
		},
	};

	// Role / stage maps for CRM payload (from Scorecard.tsx)
	var ROLE_MAP   = [ 'builder', 'developer', 'consultant', 'strata_fm' ];
	var STAGE_MAP  = [ 'pre_construction', 'under_construction', 'post_construction', 'existing_asset' ];

	// =========================================================================
	// SCORING — ported exactly from scorecardData.ts
	// =========================================================================

	function calculateScores( answers ) {
		var scores = { design: 0, construction: 0, compliance: 0, defect: 0 };
		QUESTIONS.forEach( function ( q ) {
			if ( q.categoryKey === 'qualifying' ) return;
			var idx = answers[ q.id ];
			if ( idx === undefined ) return;
			var score = ( q.answers[ idx ] && q.answers[ idx ].score ) || 0;
			scores[ q.categoryKey ] += score;
		} );
		return scores;
	}

	function getTotalScore( categoryScores ) {
		var raw = categoryScores.design + categoryScores.construction + categoryScores.compliance + categoryScores.defect;
		return Math.round( ( raw / 200 ) * 100 );
	}

	function getRiskLevel( score ) {
		if ( score >= 75 ) return 'low';
		if ( score >= 40 ) return 'moderate';
		return 'high';
	}

	function getRecommendedServices( scores ) {
		var services = [];
		if ( scores.design       < 38 ) services.push( 'design_review' );
		if ( scores.construction < 38 ) services.push( 'inspection' );
		if ( scores.compliance   < 38 ) services.push( 'testing' );
		if ( scores.defect       < 38 ) services.push( 'remediation' );
		return services;
	}

	// =========================================================================
	// STATE — sessionStorage
	// =========================================================================

	function getState() {
		try {
			var raw = sessionStorage.getItem( SESSION_KEY );
			return raw ? JSON.parse( raw ) : { stage: 'landing', currentQuestion: 1, answers: {} };
		} catch ( e ) {
			return { stage: 'landing', currentQuestion: 1, answers: {} };
		}
	}

	function setState( updates ) {
		try {
			var next = Object.assign( {}, getState(), updates );
			sessionStorage.setItem( SESSION_KEY, JSON.stringify( next ) );
		} catch ( e ) { /* noop */ }
	}

	function clearState() {
		try { sessionStorage.removeItem( SESSION_KEY ); } catch ( e ) { /* noop */ }
	}

	// =========================================================================
	// GTM — fires both dataLayer (GTM) and gtag if present
	// =========================================================================

	var startTime = Date.now();

	function pushGTM( eventName, data ) {
		var payload = Object.assign( { event: eventName }, data || {} );
		window.dataLayer = window.dataLayer || [];
		window.dataLayer.push( payload );
		if ( typeof window.gtag === 'function' ) {
			window.gtag( 'event', eventName, data || {} );
		}
	}

	// =========================================================================
	// SHARED STYLES
	// =========================================================================

	var C = {
		navy:      'hsla(218,47%,16%,1)',
		navyLight: 'hsla(218,47%,22%,1)',
		blue:      '#1d4ed8',
		gold:      '#c9a84c',
		white:     '#ffffff',
		muted:     '#6b7280',
		border:    '#e5e7eb',
		light:     '#f9fafb',
	};

	var RALEWAY = 'Raleway, sans-serif';

	function s( obj ) {
		return Object.entries( obj ).map( function ( kv ) { return kv[0] + ':' + kv[1]; } ).join( ';' );
	}

	// =========================================================================
	// STAGE 1 — LANDING
	// =========================================================================

	function renderLanding( app ) {
		app.innerHTML =
			'<div style="' + s( { 'min-height': '100vh', background: 'linear-gradient(135deg,' + C.navy + ' 0%,' + C.navyLight + ' 100%)', display: 'flex', 'align-items': 'center', 'justify-content': 'center', padding: '80px 24px' } ) + '">' +
			'<div style="text-align:center;max-width:760px;width:100%">' +

			// Badge
			'<span style="' + s( { display: 'inline-block', background: 'rgba(201,168,76,0.12)', border: '1px solid rgba(201,168,76,0.35)', color: C.gold, 'font-family': RALEWAY, 'font-weight': '600', 'font-size': '0.75rem', 'letter-spacing': '0.08em', 'text-transform': 'uppercase', padding: '6px 18px', 'border-radius': '100px', 'margin-bottom': '28px' } ) + '">' +
			'Free 2-Minute Assessment' +
			'</span>' +

			// H1
			'<h1 style="' + s( { 'font-family': RALEWAY, 'font-weight': '800', 'font-size': 'clamp(28px,4.5vw,54px)', color: C.white, 'line-height': '1.12', margin: '0 0 20px 0' } ) + '">' +
			'How exposed is your project<br>to waterproofing risk?' +
			'</h1>' +

			// Sub
			'<p style="' + s( { 'font-size': 'clamp(1rem,1.8vw,1.1875rem)', color: 'rgba(255,255,255,0.72)', 'line-height': '1.65', margin: '0 auto 44px', 'max-width': '580px' } ) + '">' +
			'Answer 10 questions and get your personalised Waterproofing Risk Scorecard \u2014 free, independent, and backed by Australia\u2019s leading waterproofing consultancy.' +
			'</p>' +

			// Pills
			'<div style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin-bottom:48px">' +
			[ '10 questions', '2 minutes', 'Instant results', 'No cost' ].map( function ( t ) {
				return '<span style="' + s( { display: 'inline-flex', 'align-items': 'center', gap: '6px', background: 'rgba(255,255,255,0.06)', border: '1px solid rgba(255,255,255,0.14)', color: 'rgba(255,255,255,0.82)', 'font-family': RALEWAY, 'font-weight': '600', 'font-size': '0.875rem', padding: '8px 18px', 'border-radius': '100px' } ) + '">' +
				'<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="' + C.gold + '" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>' +
				t + '</span>';
			} ).join( '' ) +
			'</div>' +

			// CTA
			'<button id="sc-start" type="button" style="' + s( { display: 'inline-flex', 'align-items': 'center', gap: '10px', background: C.gold, color: C.navy, 'font-family': RALEWAY, 'font-weight': '700', 'font-size': '1.125rem', padding: '18px 48px', 'border-radius': '4px', border: 'none', cursor: 'pointer' } ) + '">' +
			'Start My Risk Assessment' +
			'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
			'</button>' +

			'<p style="font-size:0.8125rem;color:rgba(255,255,255,0.38);margin:20px 0 0 0">NATA-accredited \u00b7 2,500+ projects assessed \u00b7 No obligation</p>' +
			'</div></div>';

		document.getElementById( 'sc-start' ).addEventListener( 'click', function () {
			startTime = Date.now();
			pushGTM( 'scorecard_started' );
			setState( { stage: 'questions', currentQuestion: 1, answers: {} } );
			renderQuestion( app );
		} );
	}

	// =========================================================================
	// STAGE 2 — QUESTIONS
	// =========================================================================

	function renderQuestion( app ) {
		var state   = getState();
		var qNum    = state.currentQuestion || 1;
		var q       = QUESTIONS[ qNum - 1 ];
		var total   = QUESTIONS.length;
		var answers = state.answers || {};
		var pct     = Math.round( ( ( qNum - 1 ) / total ) * 100 );
		var isQualifying = q.categoryKey === 'qualifying';

		app.innerHTML =
			// Top bar
			'<div style="' + s( { background: C.navy, height: '60px', display: 'flex', 'align-items': 'center', 'justify-content': 'space-between', padding: '0 24px', 'flex-shrink': '0' } ) + '">' +
			'<span style="font-family:' + RALEWAY + ';font-weight:800;font-size:0.9375rem;color:' + C.white + '">WI Risk Scorecard</span>' +
			'<span style="font-family:' + RALEWAY + ';font-weight:600;font-size:0.875rem;color:rgba(255,255,255,0.55)">' + qNum + ' / ' + total + '</span>' +
			'</div>' +

			// Progress bar
			'<div style="height:4px;background:rgba(201,168,76,0.18)">' +
			'<div style="height:4px;background:' + C.gold + ';width:' + pct + '%;transition:width 0.35s ease" role="progressbar" aria-valuenow="' + pct + '" aria-valuemin="0" aria-valuemax="100"></div>' +
			'</div>' +

			// Body
			'<div style="' + s( { flex: '1', background: '#f9fafb', display: 'flex', 'align-items': 'flex-start', 'justify-content': 'center', padding: '48px 24px 72px', 'overflow-y': 'auto', 'min-height': 'calc(100vh - 64px)' } ) + '">' +
			'<div style="width:100%;max-width:620px">' +

			// Category + context
			( isQualifying
				? '<span style="' + s( { display: 'inline-block', background: 'rgba(201,168,76,0.10)', color: '#92400e', 'font-family': RALEWAY, 'font-weight': '700', 'font-size': '0.75rem', 'letter-spacing': '0.07em', 'text-transform': 'uppercase', padding: '5px 14px', 'border-radius': '100px', 'margin-bottom': '12px' } ) + '">' + escHtml( q.category ) + '</span>'
				: '<span style="' + s( { display: 'inline-block', background: 'rgba(29,78,216,0.08)', color: C.blue, 'font-family': RALEWAY, 'font-weight': '700', 'font-size': '0.75rem', 'letter-spacing': '0.07em', 'text-transform': 'uppercase', padding: '5px 14px', 'border-radius': '100px', 'margin-bottom': '12px' } ) + '">' + escHtml( q.category ) + '</span>'
			) +

			// Context insight
			'<p style="font-size:0.8125rem;color:' + C.muted + ';margin:0 0 16px 0;font-style:italic;line-height:1.55">' + escHtml( q.context ) + '</p>' +

			// Question
			'<h2 style="' + s( { 'font-family': RALEWAY, 'font-weight': '700', 'font-size': 'clamp(1.0625rem,2.2vw,1.375rem)', color: C.navy, 'line-height': '1.35', margin: '0 0 28px 0' } ) + '">' + escHtml( q.question ) + '</h2>' +

			// Options
			'<div id="sc-options" style="display:flex;flex-direction:column;gap:10px;margin-bottom:36px">' +
			q.answers.map( function ( opt, i ) {
				var sel = answers[ q.id ] === i;
				return '<button class="sc-opt" data-idx="' + i + '" type="button" style="' + s( {
					display: 'flex', 'align-items': 'flex-start', gap: '14px',
					background: sel ? 'rgba(201,168,76,0.06)' : C.white,
					border: sel ? '2px solid ' + C.gold : '2px solid ' + C.border,
					'border-radius': '8px', padding: '16px 18px', cursor: 'pointer',
					'text-align': 'left', width: '100%', transition: 'border-color 0.15s',
				} ) + '">' +
				'<span style="' + s( {
					'flex-shrink': '0', width: '20px', height: '20px', 'border-radius': '50%', 'margin-top': '2px',
					border: sel ? '6px solid ' + C.gold : '2px solid ' + C.border,
					background: C.white, transition: 'border 0.15s',
				} ) + '" aria-hidden="true"></span>' +
				'<span style="font-family:' + RALEWAY + ';font-weight:' + ( sel ? '700' : '500' ) + ';font-size:0.9375rem;color:' + ( sel ? C.navy : '#374151' ) + ';line-height:1.5">' + escHtml( opt.label ) + '</span>' +
				'</button>';
			} ).join( '' ) +
			'</div>' +

			// Nav buttons
			'<div style="display:flex;justify-content:space-between;align-items:center">' +
			'<button id="sc-back" type="button" style="' + s( {
				display: 'inline-flex', 'align-items': 'center', gap: '8px',
				background: 'transparent', border: '2px solid ' + C.border,
				'border-radius': '4px', padding: '11px 22px', 'font-family': RALEWAY,
				'font-weight': '600', 'font-size': '0.9375rem', color: qNum === 1 ? C.border : C.muted,
				cursor: qNum === 1 ? 'not-allowed' : 'pointer', opacity: qNum === 1 ? '0.4' : '1',
			} ) + '"' + ( qNum === 1 ? ' disabled' : '' ) + '>' +
			'<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>' +
			'Back</button>' +

			'<button id="sc-next" type="button" style="' + s( {
				display: 'inline-flex', 'align-items': 'center', gap: '10px',
				background: answers[ q.id ] !== undefined ? C.navy : C.border,
				color: answers[ q.id ] !== undefined ? C.white : '#9ca3af',
				'font-family': RALEWAY, 'font-weight': '700', 'font-size': '0.9375rem',
				padding: '11px 26px', 'border-radius': '4px', border: 'none',
				cursor: answers[ q.id ] !== undefined ? 'pointer' : 'not-allowed',
			} ) + '">' +
			( qNum === total ? 'See My Results' : 'Next' ) +
			'<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
			'</button>' +
			'</div>' +

			'</div></div>';

		// Option click
		app.querySelectorAll( '.sc-opt' ).forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				var idx     = parseInt( btn.dataset.idx, 10 );
				var updated = Object.assign( {}, getState().answers );
				updated[ q.id ] = idx;
				setState( { answers: updated } );

				pushGTM( 'scorecard_question_answered', {
					question_number: q.id,
					category:        q.category,
					answer:          q.answers[ idx ].crmValue || String.fromCharCode( 65 + idx ),
				} );
				renderQuestion( app );
			} );
		} );

		// Back
		if ( qNum > 1 ) {
			document.getElementById( 'sc-back' ).addEventListener( 'click', function () {
				setState( { currentQuestion: qNum - 1 } );
				renderQuestion( app );
			} );
		}

		// Next
		document.getElementById( 'sc-next' ).addEventListener( 'click', function () {
			if ( getState().answers[ q.id ] === undefined ) return;
			if ( qNum < total ) {
				setState( { currentQuestion: qNum + 1 } );
				renderQuestion( app );
			} else {
				pushGTM( 'scorecard_form_viewed', {
					total_time_in_assessment: Math.round( ( Date.now() - startTime ) / 1000 ),
				} );
				setState( { stage: 'gate' } );
				renderLeadGate( app );
			}
		} );
	}

	// =========================================================================
	// STAGE 3 — CALCULATING (2-second transition, matches Scorecard.tsx)
	// =========================================================================

	function renderCalculating( app ) {
		app.innerHTML =
			'<div style="' + s( { 'min-height': '100vh', display: 'flex', 'flex-direction': 'column', 'align-items': 'center', 'justify-content': 'center', gap: '24px', background: '#f2f2f2' } ) + '">' +
			'<div style="width:48px;height:48px;border-radius:50%;border:4px solid hsl(197,58%,42%);border-top-color:transparent;animation:sc-spin 0.8s linear infinite"></div>' +
			'<p style="font-family:' + RALEWAY + ';font-weight:600;font-size:1.25rem;color:hsl(218,47%,20%);margin:0">Calculating your score\u2026</p>' +
			'<p style="font-size:0.875rem;color:#4a4a4a;margin:0">Analysing your responses across 4 risk categories.</p>' +
			'</div>' +
			'<style>@keyframes sc-spin{to{transform:rotate(360deg)}}</style>';
	}

	// =========================================================================
	// STAGE 4 — LEAD GATE
	// =========================================================================

	function renderLeadGate( app ) {
		app.innerHTML =
			'<div style="' + s( { 'min-height': '100vh', background: 'linear-gradient(135deg,' + C.navy + ' 0%,' + C.navyLight + ' 100%)', display: 'flex', 'align-items': 'center', 'justify-content': 'center', padding: '60px 24px' } ) + '">' +
			'<div style="' + s( { background: C.white, 'border-radius': '12px', padding: '44px 40px', width: '100%', 'max-width': '520px', 'box-shadow': '0 24px 64px rgba(0,0,0,0.22)' } ) + '">' +

			// Icon + heading
			'<div style="text-align:center;margin-bottom:28px">' +
			'<div style="width:52px;height:52px;border-radius:50%;background:rgba(201,168,76,0.1);display:inline-flex;align-items:center;justify-content:center;margin-bottom:14px">' +
			'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="' + C.gold + '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>' +
			'</div>' +
			'<h2 style="font-family:' + RALEWAY + ';font-weight:800;font-size:1.375rem;color:' + C.navy + ';margin:0 0 8px 0">Your results are ready</h2>' +
			'<p style="font-size:0.9375rem;color:' + C.muted + ';margin:0;line-height:1.6">Enter your details to unlock your personalised risk report.</p>' +
			'</div>' +

			'<form id="sc-gate-form" novalidate>' +

			// Full name
			'<div style="margin-bottom:14px">' +
			gateField( 'sc-fullname', 'text', 'Full Name *', 'name', true ) +
			'</div>' +

			// Company
			'<div style="margin-bottom:14px">' +
			gateField( 'sc-company', 'text', 'Company / Organisation *', 'organization', true ) +
			'</div>' +

			// Email
			'<div style="margin-bottom:14px">' +
			gateField( 'sc-email', 'email', 'Email Address *', 'email', true ) +
			'</div>' +

			// Phone
			'<div style="margin-bottom:14px">' +
			gateField( 'sc-phone', 'tel', 'Phone Number *', 'tel', true ) +
			'</div>' +

			// State
			'<div style="margin-bottom:24px">' +
			'<label for="sc-state" style="display:block;font-family:' + RALEWAY + ';font-weight:600;font-size:0.8125rem;color:' + C.navy + ';margin-bottom:6px">State *</label>' +
			'<select id="sc-state" name="state" required style="' + s( { width: '100%', padding: '11px 14px', border: '1.5px solid ' + C.border, 'border-radius': '6px', 'font-family': RALEWAY, 'font-size': '0.9375rem', color: '#374151', background: C.white, 'box-sizing': 'border-box' } ) + '">' +
			'<option value="">Select state *</option>' +
			[ 'NSW', 'VIC', 'QLD', 'WA', 'SA', 'TAS', 'ACT', 'NT' ].map( function ( st ) { return '<option value="' + st + '">' + st + '</option>'; } ).join( '' ) +
			'</select>' +
			'</div>' +

			// Error block
			'<div id="sc-gate-error" role="alert" style="display:none;background:#fef2f2;border:1px solid #fca5a5;border-radius:6px;padding:12px 16px;font-size:0.875rem;color:#991b1b;margin-bottom:16px"></div>' +

			// Submit
			'<button id="sc-gate-submit" type="submit" style="' + s( { display: 'flex', 'align-items': 'center', 'justify-content': 'center', gap: '10px', width: '100%', background: C.navy, color: C.white, 'font-family': RALEWAY, 'font-weight': '700', 'font-size': '1rem', padding: '14px 32px', 'border-radius': '4px', border: 'none', cursor: 'pointer', 'margin-bottom': '12px', 'box-sizing': 'border-box' } ) + '">' +
			'Unlock My Risk Report' +
			'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
			'</button>' +

			'<p style="font-size:0.8125rem;color:' + C.muted + ';text-align:center;margin:0;line-height:1.5">Your details are kept private. We do not share your information with third parties.</p>' +
			'</form>' +
			'</div></div>';

		document.getElementById( 'sc-gate-form' ).addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			submitLeadGate( app );
		} );
	}

	function gateField( id, type, label, autocomplete, required ) {
		return (
			'<label for="' + id + '" style="display:block;font-family:' + RALEWAY + ';font-weight:600;font-size:0.8125rem;color:' + C.navy + ';margin-bottom:6px">' + label + '</label>' +
			'<input id="' + id + '" type="' + type + '" autocomplete="' + autocomplete + '" ' + ( required ? 'required' : '' ) + ' style="' + s( { width: '100%', padding: '11px 14px', border: '1.5px solid ' + C.border, 'border-radius': '6px', 'font-family': RALEWAY, 'font-size': '0.9375rem', color: '#374151', 'box-sizing': 'border-box' } ) + '">'
		);
	}

	function submitLeadGate( app ) {
		var fullName = ( document.getElementById( 'sc-fullname' ).value || '' ).trim();
		var company  = ( document.getElementById( 'sc-company' ).value  || '' ).trim();
		var email    = ( document.getElementById( 'sc-email' ).value    || '' ).trim();
		var phone    = ( document.getElementById( 'sc-phone' ).value    || '' ).trim();
		var state    = ( document.getElementById( 'sc-state' ).value    || '' ).trim();

		var errs = [];
		if ( ! fullName ) errs.push( 'Full name is required.' );
		if ( ! company )  errs.push( 'Company / Organisation is required.' );
		if ( ! email || ! /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test( email ) ) errs.push( 'A valid email address is required.' );
		if ( ! phone )    errs.push( 'Phone number is required.' );
		if ( ! state )    errs.push( 'Please select your state.' );

		var errEl = document.getElementById( 'sc-gate-error' );
		if ( errs.length ) {
			errEl.innerHTML = errs.map( escHtml ).join( '<br>' );
			errEl.style.display = 'block';
			return;
		}
		errEl.style.display = 'none';

		var btn = document.getElementById( 'sc-gate-submit' );
		btn.disabled    = true;
		btn.textContent = 'Submitting\u2026';

		var stateObj  = getState();
		var answers   = stateObj.answers || {};
		var scores    = calculateScores( answers );
		var total     = getTotalScore( scores );
		var riskLevel = getRiskLevel( total );
		var services  = getRecommendedServices( scores );

		var roleIdx  = answers[ 9 ];
		var stageIdx = answers[ 10 ];

		var payload = {
			lead: {
				full_name:     fullName,
				company:       company,
				email:         email,
				phone:         phone,
				state:         state,
				role_segment:  roleIdx  !== undefined ? ROLE_MAP[ roleIdx ]  : '',
				project_stage: stageIdx !== undefined ? STAGE_MAP[ stageIdx ] : '',
				source:        'waterproofing_risk_scorecard',
			},
			scorecard: {
				total_score:               total,
				risk_level:                riskLevel,
				design_risk_score:         scores.design,
				construction_risk_score:   scores.construction,
				compliance_risk_score:     scores.compliance,
				defect_exposure_score:     scores.defect,
				recommended_services:      services,
				answers: {
					q1: answers[ 1 ] !== undefined ? String.fromCharCode( 65 + answers[ 1 ] ) : '',
					q2: answers[ 2 ] !== undefined ? String.fromCharCode( 65 + answers[ 2 ] ) : '',
					q3: answers[ 3 ] !== undefined ? String.fromCharCode( 65 + answers[ 3 ] ) : '',
					q4: answers[ 4 ] !== undefined ? String.fromCharCode( 65 + answers[ 4 ] ) : '',
					q5: answers[ 5 ] !== undefined ? String.fromCharCode( 65 + answers[ 5 ] ) : '',
					q6: answers[ 6 ] !== undefined ? String.fromCharCode( 65 + answers[ 6 ] ) : '',
					q7: answers[ 7 ] !== undefined ? String.fromCharCode( 65 + answers[ 7 ] ) : '',
					q8: answers[ 8 ] !== undefined ? String.fromCharCode( 65 + answers[ 8 ] ) : '',
					q9_role:  roleIdx  !== undefined ? ROLE_MAP[ roleIdx ]  : '',
					q10_stage: stageIdx !== undefined ? STAGE_MAP[ stageIdx ] : '',
				},
			},
			metadata: {
				completed_at:              new Date().toISOString(),
				time_to_complete_seconds:  Math.round( ( Date.now() - startTime ) / 1000 ),
				device: window.innerWidth < 768 ? 'mobile' : window.innerWidth < 1024 ? 'tablet' : 'desktop',
			},
		};

		// Show calculating animation, then POST, then results
		renderCalculating( app );

		setTimeout( function () {
			fetch( ZOHO_API_URL, {
				method:  'POST',
				headers: { 'Content-Type': 'application/json' },
				body:    JSON.stringify( payload ),
			} )
			.catch( function () { /* silently continue — results still shown */ } )
			.finally( function () {
				pushGTM( 'scorecard_form_submitted', {
					role_segment:  payload.lead.role_segment,
					project_stage: payload.lead.project_stage,
				} );
				clearState();
				renderResults( app, scores, total, riskLevel, services, fullName );
			} );
		}, 2000 );
	}

	// =========================================================================
	// STAGE 5 — RESULTS
	// =========================================================================

	function renderResults( app, scores, total, riskLevelKey, services, firstName ) {
		var risk  = RISK_CONFIG[ riskLevelKey ] || RISK_CONFIG.high;
		var name  = firstName ? escHtml( firstName.split( ' ' )[ 0 ] ) : 'there';

		pushGTM( 'scorecard_results_viewed', { total_score: total, risk_level: riskLevelKey } );

		app.innerHTML =
			// Top bar
			'<div style="' + s( { background: C.navy, height: '60px', display: 'flex', 'align-items': 'center', 'justify-content': 'space-between', padding: '0 24px', 'flex-shrink': '0' } ) + '">' +
			'<span style="font-family:' + RALEWAY + ';font-weight:800;font-size:0.9375rem;color:' + C.white + '">WI Risk Scorecard</span>' +
			'<button id="sc-restart" type="button" style="font-family:' + RALEWAY + ';font-weight:600;font-size:0.8125rem;color:rgba(255,255,255,0.5);background:transparent;border:none;cursor:pointer;padding:0">Retake</button>' +
			'</div>' +

			// Body
			'<div style="' + s( { flex: '1', background: '#f9fafb', padding: '40px 24px 80px', 'overflow-y': 'auto' } ) + '">' +
			'<div style="max-width:640px;margin:0 auto">' +

			// Greeting
			'<p style="font-family:' + RALEWAY + ';font-size:0.9375rem;color:' + C.muted + ';margin:0 0 6px 0">Hi ' + name + ', here is your risk report.</p>' +

			// Risk badge
			'<div style="' + s( { background: risk.bg, border: '2px solid ' + risk.border, 'border-radius': '10px', padding: '24px 28px', 'margin-bottom': '36px', display: 'flex', 'align-items': 'center', 'justify-content': 'space-between', 'flex-wrap': 'wrap', gap: '16px' } ) + '">' +
			'<div style="flex:1;min-width:0">' +
			'<p style="font-family:' + RALEWAY + ';font-weight:600;font-size:0.6875rem;letter-spacing:0.1em;text-transform:uppercase;color:' + risk.colour + ';margin:0 0 4px 0">Your Risk Level</p>' +
			'<p style="font-family:' + RALEWAY + ';font-weight:800;font-size:1.625rem;color:' + risk.colour + ';margin:0 0 10px 0">' + escHtml( risk.label ) + '</p>' +
			'<p style="font-size:0.9375rem;color:#374151;margin:0;line-height:1.65">' + escHtml( risk.summary ) + '</p>' +
			'</div>' +
			'<div style="text-align:center;flex-shrink:0">' +
			'<p style="font-family:' + RALEWAY + ';font-weight:800;font-size:2.75rem;color:' + risk.colour + ';margin:0;line-height:1">' + total + '</p>' +
			'<p style="font-size:0.75rem;color:' + C.muted + ';margin:4px 0 0 0">out of 100</p>' +
			'</div>' +
			'</div>' +

			// Category bars
			'<h3 style="font-family:' + RALEWAY + ';font-weight:700;font-size:1rem;color:' + C.navy + ';margin:0 0 16px 0">Category Breakdown</h3>' +
			'<div style="display:flex;flex-direction:column;gap:14px;margin-bottom:36px">' +
			Object.keys( CATEGORY_DISPLAY ).map( function ( key ) {
				var raw  = scores[ key ] || 0;
				var pct  = Math.round( ( raw / 50 ) * 100 );
				var col  = pct >= 80 ? '#166534' : pct >= 60 ? '#1d4ed8' : pct >= 40 ? '#92400e' : '#991b1b';
				return (
					'<div style="background:' + C.white + ';border:1px solid ' + C.border + ';border-radius:8px;padding:16px 20px">' +
					'<div style="display:flex;justify-content:space-between;align-items:baseline;margin-bottom:10px">' +
					'<span style="font-family:' + RALEWAY + ';font-weight:600;font-size:0.9375rem;color:' + C.navy + '">' + escHtml( CATEGORY_DISPLAY[ key ] ) + '</span>' +
					'<span style="font-size:0.875rem;font-weight:700;color:' + col + '">' + pct + '%</span>' +
					'</div>' +
					'<div style="height:8px;background:#f3f4f6;border-radius:4px;overflow:hidden">' +
					'<div style="height:8px;background:' + col + ';width:' + pct + '%;border-radius:4px"></div>' +
					'</div>' +
					'</div>'
				);
			} ).join( '' ) +
			'</div>' +

			// Recommended services
			( services.length
				? '<h3 style="font-family:' + RALEWAY + ';font-weight:700;font-size:1rem;color:' + C.navy + ';margin:0 0 16px 0">Recommended Services</h3>' +
				'<div style="display:flex;flex-direction:column;gap:12px;margin-bottom:36px">' +
				services.map( function ( key ) {
					var svc = SERVICE_DETAILS[ key ];
					if ( ! svc ) return '';
					return (
						'<div style="background:' + C.white + ';border:1px solid ' + C.border + ';border-radius:8px;padding:20px">' +
						'<div style="display:flex;align-items:flex-start;gap:12px">' +
						'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="' + C.gold + '" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>' +
						'<div>' +
						'<p style="font-family:' + RALEWAY + ';font-weight:700;font-size:0.9375rem;color:' + C.navy + ';margin:0 0 6px 0">' + escHtml( svc.name ) + '</p>' +
						'<p style="font-size:0.875rem;color:' + C.muted + ';margin:0 0 10px 0;line-height:1.6">' + escHtml( svc.description ) + '</p>' +
						'<a href="' + svc.link + '" style="font-family:' + RALEWAY + ';font-weight:700;font-size:0.875rem;color:' + C.blue + ';text-decoration:none">Learn more \u2192</a>' +
						'</div></div></div>'
					);
				} ).join( '' ) +
				'</div>'
				: ''
			) +

			// CTA block
			'<div style="' + s( { background: 'linear-gradient(135deg,' + C.navy + ' 0%,' + C.navyLight + ' 100%)', 'border-radius': '10px', padding: '36px 32px', 'text-align': 'center' } ) + '">' +
			'<h3 style="font-family:' + RALEWAY + ';font-weight:700;font-size:1.1875rem;color:' + C.white + ';margin:0 0 10px 0">Ready to address your risk?</h3>' +
			'<p style="font-size:0.9375rem;color:rgba(255,255,255,0.68);margin:0 0 24px 0;line-height:1.6">Speak with a senior WI adviser. No obligation \u2014 just clear, independent advice tailored to your project.</p>' +
			'<a id="sc-cta" href="/contact/" class="cta-button" style="' + s( { display: 'inline-flex', 'align-items': 'center', gap: '10px', background: C.gold, color: C.navy, 'font-family': RALEWAY, 'font-weight': '700', 'font-size': '1rem', padding: '15px 36px', 'border-radius': '4px', 'text-decoration': 'none' } ) + '">' +
			'Speak to an Adviser' +
			'<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
			'</a>' +
			'<p style="font-size:0.8125rem;color:rgba(255,255,255,0.4);margin:14px 0 0 0">Or call <a href="tel:1300025944" class="tel-link" style="color:rgba(255,255,255,0.6);font-weight:600;text-decoration:none">1300 025 944</a></p>' +
			'</div>' +

			'</div></div>';

		var ctaEl = document.getElementById( 'sc-cta' );
		if ( ctaEl ) {
			ctaEl.addEventListener( 'click', function () {
				pushGTM( 'scorecard_cta_clicked', { risk_level: riskLevelKey, total_score: total } );
			} );
		}

		document.getElementById( 'sc-restart' ).addEventListener( 'click', function () {
			clearState();
			renderLanding( app );
		} );
	}

	// =========================================================================
	// UTILITY
	// =========================================================================

	function escHtml( str ) {
		return String( str )
			.replace( /&/g,  '&amp;' )
			.replace( /</g,  '&lt;' )
			.replace( />/g,  '&gt;' )
			.replace( /"/g,  '&quot;' )
			.replace( /'/g,  '&#039;' );
	}

	// =========================================================================
	// INIT
	// =========================================================================

	function init() {
		var app = document.getElementById( 'scorecard-app' );
		if ( ! app ) return;

		var state = getState();
		switch ( state.stage ) {
			case 'questions': renderQuestion( app );  break;
			case 'gate':      renderLeadGate( app );  break;
			default:          renderLanding( app );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}

} )();
