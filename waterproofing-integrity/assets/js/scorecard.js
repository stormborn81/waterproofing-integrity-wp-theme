/**
 * Waterproofing Integrity — Risk Scorecard
 *
 * Self-contained vanilla JS application. No dependencies.
 * Enqueued only on page-risk-scorecard.html template.
 *
 * Stages:
 *   1. Landing   — Navy hero, headline, Start button
 *   2. Questions — 10 questions, one at a time, gold progress bar, sessionStorage
 *   3. Lead Gate — Form with client-side validation, POST to Zoho CRM API
 *   4. Results   — Category score bars, risk badge, recommended services, CTA
 *
 * GTM events fired:
 *   scorecard_started        — Stage 1 → 2
 *   scorecard_question_answered — each answer selected
 *   scorecard_lead_submitted — Stage 3 form POST success
 *   scorecard_completed      — Stage 4 rendered (includes risk_level)
 *   scorecard_cta_clicked    — Results CTA clicked
 *
 * TODO: Replace PLACEHOLDER_ZOHO_API_ENDPOINT and PLACEHOLDER_API_KEY
 *       with your Zoho CRM API endpoint and OAuth access token.
 */

( function () {
	'use strict';

	// =========================================================================
	// CONFIG
	// =========================================================================

	/** @type {string} Replace with Zoho CRM Leads endpoint */
	var ZOHO_API_ENDPOINT = 'PLACEHOLDER_ZOHO_API_ENDPOINT';

	/** @type {string} Replace with Zoho OAuth access token */
	var ZOHO_API_KEY = 'PLACEHOLDER_API_KEY';

	var SESSION_KEY = 'wi_scorecard';

	// =========================================================================
	// QUESTION DATA
	// TODO: Replace all questions and options below with data ported from
	//       src/components/scorecard/scorecardData.ts
	//
	// Data shape expected:
	//   { id, category, question, options: [{ text, score }] }
	//
	// CATEGORIES must match the unique category strings used in QUESTIONS.
	// =========================================================================

	var CATEGORIES = [
		'Project Scope',
		'Design & Specification',
		'Construction & Oversight',
		'Risk Factors',
	];

	var QUESTIONS = [
		// ---- Category: Project Scope ----------------------------------------
		{
			id: 1,
			category: 'Project Scope',
			question: 'What type of project are you assessing?',
			options: [
				{ text: 'New construction', score: 1 },
				{ text: 'Major renovation or fitout', score: 2 },
				{ text: 'Existing building with known issues', score: 3 },
				{ text: 'Post-handover defect dispute', score: 4 },
			],
		},
		{
			id: 2,
			category: 'Project Scope',
			question: 'What is the approximate construction value?',
			options: [
				{ text: 'Under $1 million', score: 1 },
				{ text: '$1 million – $10 million', score: 2 },
				{ text: '$10 million – $50 million', score: 3 },
				{ text: 'Over $50 million', score: 4 },
			],
		},
		{
			id: 3,
			category: 'Project Scope',
			question: 'How many separate waterproofing zones does the project contain?',
			options: [
				{ text: '1 – 5 zones', score: 1 },
				{ text: '6 – 20 zones', score: 2 },
				{ text: '21 – 50 zones', score: 3 },
				{ text: 'Over 50 zones', score: 4 },
			],
		},
		// ---- Category: Design & Specification --------------------------------
		{
			id: 4,
			category: 'Design & Specification',
			question: 'Has an independent waterproofing specification been prepared for this project?',
			options: [
				{ text: 'Yes, prepared and reviewed independently', score: 1 },
				{ text: 'Yes, but prepared by the waterproofing contractor', score: 3 },
				{ text: 'No — only product data sheets are referenced', score: 4 },
				{ text: 'Unsure', score: 3 },
			],
		},
		{
			id: 5,
			category: 'Design & Specification',
			question: 'Are waterproofing details shown at all penetrations, upstands, and transitions in the drawings?',
			options: [
				{ text: 'Yes, fully detailed at every interface', score: 1 },
				{ text: 'Partially — some details are missing', score: 2 },
				{ text: 'No detailed drawings for waterproofing', score: 4 },
				{ text: 'Unsure', score: 3 },
			],
		},
		{
			id: 6,
			category: 'Design & Specification',
			question: 'Which Australian Standards are referenced in the waterproofing specification?',
			options: [
				{ text: 'AS 4654 and AS 3740 both referenced', score: 1 },
				{ text: 'One standard referenced only', score: 2 },
				{ text: 'No Australian Standard referenced', score: 4 },
				{ text: 'Unsure', score: 3 },
			],
		},
		// ---- Category: Construction & Oversight ------------------------------
		{
			id: 7,
			category: 'Construction & Oversight',
			question: 'Is independent inspection planned at each waterproofing installation stage?',
			options: [
				{ text: 'Yes, by a NATA-accredited independent inspector', score: 1 },
				{ text: 'Yes, by the project manager or superintendent only', score: 2 },
				{ text: 'No formal independent inspection is planned', score: 4 },
				{ text: 'Unsure', score: 3 },
			],
		},
		{
			id: 8,
			category: 'Construction & Oversight',
			question: 'What is the waterproofing contractor\'s level of experience and licensing?',
			options: [
				{ text: 'Licensed specialist with 10+ years waterproofing experience', score: 1 },
				{ text: 'Licensed general builder performing waterproofing works', score: 2 },
				{ text: 'Unlicensed contractor or owner-builder', score: 4 },
				{ text: 'Unsure', score: 3 },
			],
		},
		// ---- Category: Risk Factors ------------------------------------------
		{
			id: 9,
			category: 'Risk Factors',
			question: 'Has this building or project site experienced waterproofing defects previously?',
			options: [
				{ text: 'No known waterproofing history issues', score: 1 },
				{ text: 'Minor issues that have been resolved', score: 2 },
				{ text: 'Significant defects, partially or unresolved', score: 4 },
				{ text: 'Unsure', score: 3 },
			],
		},
		{
			id: 10,
			category: 'Risk Factors',
			question: 'Is the project subject to an occupation certificate, strata scheme, or statutory warranty?',
			options: [
				{ text: 'OC required and independent certifier is engaged', score: 1 },
				{ text: 'OC required but no independent inspector appointed', score: 3 },
				{ text: 'Strata or owners corporation is involved', score: 3 },
				{ text: 'Not applicable / no statutory requirement', score: 1 },
			],
		},
	];

	// =========================================================================
	// SCORING THRESHOLDS
	// Min total: 10 — Max total: 40
	// =========================================================================

	var RISK_LEVELS = [
		{
			id: 'low',
			label: 'Low Risk',
			min: 10,
			max: 17,
			colour: '#22863a',
			bg: '#f0fff4',
			border: '#22863a',
			summary: 'Your project appears well-managed from a waterproofing risk perspective. Maintaining independent oversight at key construction stages will protect this position.',
			services: [
				'NATA-Accredited Testing',
				'Stage Inspection Programme',
			],
		},
		{
			id: 'medium',
			label: 'Medium Risk',
			min: 18,
			max: 25,
			colour: '#b36a00',
			bg: '#fffbf0',
			border: '#e6a817',
			summary: 'Several risk factors are present. Independent review of your specification and inspection programme is strongly recommended before works proceed.',
			services: [
				'Waterproofing Design Review',
				'Inspection During Construction',
				'NATA-Accredited Testing',
			],
		},
		{
			id: 'high',
			label: 'High Risk',
			min: 26,
			max: 33,
			colour: '#c0392b',
			bg: '#fff5f5',
			border: '#c0392b',
			summary: 'Significant risk exposure identified. We recommend an immediate independent review of your waterproofing arrangements before further works are undertaken.',
			services: [
				'Waterproofing Design Review',
				'Full Inspection Programme',
				'NATA-Accredited Testing',
				'Defect Assessment & Remediation Advisory',
			],
		},
		{
			id: 'critical',
			label: 'Critical Risk',
			min: 34,
			max: 40,
			colour: '#7b0000',
			bg: '#fff0f0',
			border: '#7b0000',
			summary: 'Critical risk level. Immediate independent intervention is recommended. Proceeding without independent oversight significantly increases your liability exposure.',
			services: [
				'Defect Assessment & Remediation',
				'Expert Witness & Dispute Advisory',
				'Independent Specification Review',
				'Full Programme Oversight',
			],
		},
	];

	// =========================================================================
	// STATE — sessionStorage
	// =========================================================================

	function getState() {
		try {
			var raw = sessionStorage.getItem( SESSION_KEY );
			return raw ? JSON.parse( raw ) : { stage: 'landing', currentQuestion: 0, answers: {} };
		} catch ( e ) {
			return { stage: 'landing', currentQuestion: 0, answers: {} };
		}
	}

	function setState( updates ) {
		try {
			var current = getState();
			var next = Object.assign( {}, current, updates );
			sessionStorage.setItem( SESSION_KEY, JSON.stringify( next ) );
		} catch ( e ) { /* sessionStorage unavailable */ }
	}

	function clearState() {
		try {
			sessionStorage.removeItem( SESSION_KEY );
		} catch ( e ) { /* noop */ }
	}

	// =========================================================================
	// GTM
	// =========================================================================

	function pushGTM( eventName, data ) {
		window.dataLayer = window.dataLayer || [];
		var payload = Object.assign( { event: eventName }, data || {} );
		window.dataLayer.push( payload );
	}

	// =========================================================================
	// SHARED STYLES (CSS custom properties from theme.json available)
	// =========================================================================

	var COLOR = {
		navy:      'hsla(218,47%,16%,1)',
		navyLight: 'hsla(218,47%,22%,1)',
		blue:      '#2563eb',
		gold:      '#c9a84c',
		white:     '#ffffff',
		muted:     '#6b7280',
		border:    '#e5e7eb',
		lightGrey: '#f5f5f5',
	};

	var FONT_RALEWAY = 'Raleway, sans-serif';

	function css( obj ) {
		return Object.entries( obj ).map( function ( pair ) {
			return pair[0] + ':' + pair[1];
		} ).join( ';' );
	}

	// Outer wrapper used by all stages
	function outerWrap( content, extraStyle ) {
		var base = {
			'min-height': '100vh',
			'display':    'flex',
			'flex-direction': 'column',
		};
		var merged = Object.assign( {}, base, extraStyle || {} );
		return '<div style="' + css( merged ) + '">' + content + '</div>';
	}

	// Constrained content column
	function container( content, maxWidth ) {
		return (
			'<div style="' + css( {
				width:     '100%',
				'max-width': ( maxWidth || '760px' ),
				margin:    '0 auto',
				padding:   '0 24px',
			} ) + '">' + content + '</div>'
		);
	}

	// =========================================================================
	// STAGE 1 — LANDING
	// =========================================================================

	function renderLanding( app ) {
		var html = outerWrap(
			'<div style="' + css( {
				background:   'linear-gradient(135deg,' + COLOR.navy + ' 0%,' + COLOR.navyLight + ' 100%)',
				flex:         '1',
				display:      'flex',
				'align-items': 'center',
				'padding':    '80px 0',
			} ) + '">' +
			container(
				'<div style="text-align:center">' +

				// Badge
				'<span style="' + css( {
					display:         'inline-block',
					background:      'rgba(201,168,76,0.15)',
					border:          '1px solid rgba(201,168,76,0.4)',
					color:           COLOR.gold,
					'font-family':   FONT_RALEWAY,
					'font-weight':   '600',
					'font-size':     '0.75rem',
					'letter-spacing':'0.08em',
					'text-transform':'uppercase',
					padding:         '6px 16px',
					'border-radius': '100px',
					'margin-bottom': '28px',
				} ) + '">' +
				'Free 2-Minute Assessment' +
				'</span>' +

				// Headline
				'<h1 style="' + css( {
					'font-family':  FONT_RALEWAY,
					'font-weight':  '800',
					'font-size':    'clamp(28px,4vw,52px)',
					color:          COLOR.white,
					'line-height':  '1.15',
					margin:         '0 0 20px 0',
				} ) + '">' +
				'How exposed is your project<br>to waterproofing risk?' +
				'</h1>' +

				// Sub
				'<p style="' + css( {
					'font-size':    'clamp(1rem,2vw,1.1875rem)',
					color:          'rgba(255,255,255,0.75)',
					'line-height':  '1.65',
					margin:         '0 0 40px 0',
					'max-width':    '600px',
					'margin-left':  'auto',
					'margin-right': 'auto',
				} ) + '">' +
				'Answer 10 questions and receive a personalised risk report with a risk level rating, category breakdown, and recommended services &#8212; free and instant.' +
				'</p>' +

				// Benefits strip
				'<div style="' + css( {
					display:         'flex',
					'flex-wrap':     'wrap',
					'justify-content': 'center',
					gap:             '12px',
					'margin-bottom': '48px',
				} ) + '">' +
				[ '10 questions', 'Instant results', 'No cost' ].map( function ( b ) {
					return '<span style="' + css( {
						display:         'inline-flex',
						'align-items':   'center',
						gap:             '6px',
						background:      'rgba(255,255,255,0.07)',
						border:          '1px solid rgba(255,255,255,0.15)',
						color:           'rgba(255,255,255,0.85)',
						'font-family':   FONT_RALEWAY,
						'font-weight':   '600',
						'font-size':     '0.875rem',
						padding:         '8px 18px',
						'border-radius': '100px',
					} ) + '">' +
					'<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="' + COLOR.gold + '" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>' +
					b +
					'</span>';
				} ).join( '' ) +
				'</div>' +

				// CTA button
				'<button id="scorecard-start" style="' + css( {
					display:         'inline-flex',
					'align-items':   'center',
					gap:             '10px',
					background:      COLOR.gold,
					color:           COLOR.navy,
					'font-family':   FONT_RALEWAY,
					'font-weight':   '700',
					'font-size':     '1.125rem',
					padding:         '18px 44px',
					'border-radius': '4px',
					border:          'none',
					cursor:          'pointer',
					transition:      'opacity 0.2s',
				} ) + '" type="button">' +
				'Start My Risk Assessment' +
				'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
				'</button>' +

				// Trust line
				'<p style="' + css( {
					'font-size':    '0.8125rem',
					color:          'rgba(255,255,255,0.45)',
					margin:         '20px 0 0 0',
				} ) + '">' +
				'NATA-accredited &#183; 2,500+ projects assessed &#183; No obligation' +
				'</p>' +

				'</div>',
				'860px'
			) +
			'</div>'
		);

		app.innerHTML = html;

		document.getElementById( 'scorecard-start' ).addEventListener( 'click', function () {
			pushGTM( 'scorecard_started' );
			setState( { stage: 'questions', currentQuestion: 0, answers: {} } );
			renderQuestion( app );
		} );
	}

	// =========================================================================
	// STAGE 2 — QUESTIONS
	// =========================================================================

	function renderQuestion( app ) {
		var state    = getState();
		var qIndex   = state.currentQuestion || 0;
		var question = QUESTIONS[ qIndex ];
		var total    = QUESTIONS.length;
		var progress = Math.round( ( qIndex / total ) * 100 );
		var answers  = state.answers || {};

		var html = outerWrap(
			// Top bar: logo/name + progress
			'<div style="' + css( {
				background:     COLOR.navy,
				padding:        '0 24px',
				display:        'flex',
				'align-items':  'center',
				'justify-content': 'space-between',
				'flex-shrink':  '0',
				height:         '64px',
			} ) + '">' +
			'<span style="font-family:' + FONT_RALEWAY + ';font-weight:800;font-size:1rem;color:' + COLOR.white + '">WI Risk Scorecard</span>' +
			'<span style="font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.875rem;color:rgba(255,255,255,0.6)">' +
			( qIndex + 1 ) + ' of ' + total +
			'</span>' +
			'</div>' +

			// Gold progress bar
			'<div style="height:4px;background:rgba(201,168,76,0.2);flex-shrink:0">' +
			'<div style="' + css( {
				height:      '4px',
				background:  COLOR.gold,
				width:       progress + '%',
				transition:  'width 0.4s ease',
			} ) + '" role="progressbar" aria-valuenow="' + progress + '" aria-valuemin="0" aria-valuemax="100"></div>' +
			'</div>' +

			// Question area
			'<div style="' + css( {
				flex:           '1',
				display:        'flex',
				'align-items':  'flex-start',
				'justify-content': 'center',
				background:     '#fafafa',
				padding:        '48px 0 64px',
				'overflow-y':   'auto',
			} ) + '">' +
			container(
				// Category pill
				'<span style="' + css( {
					display:         'inline-block',
					background:      'rgba(37,99,235,0.08)',
					color:           COLOR.blue,
					'font-family':   FONT_RALEWAY,
					'font-weight':   '700',
					'font-size':     '0.75rem',
					'letter-spacing':'0.06em',
					'text-transform':'uppercase',
					padding:         '5px 14px',
					'border-radius': '100px',
					'margin-bottom': '20px',
				} ) + '">' + escHtml( question.category ) + '</span>' +

				// Question text
				'<h2 style="' + css( {
					'font-family': FONT_RALEWAY,
					'font-weight': '700',
					'font-size':   'clamp(1.125rem,2.5vw,1.5rem)',
					color:         COLOR.navy,
					'line-height': '1.35',
					margin:        '0 0 32px 0',
				} ) + '">' + escHtml( question.question ) + '</h2>' +

				// Options
				'<div id="scorecard-options" style="display:flex;flex-direction:column;gap:12px;margin-bottom:40px">' +
				question.options.map( function ( opt, i ) {
					var isSelected = String( answers[ question.id ] ) === String( i );
					return '<button class="scorecard-option" data-index="' + i + '" type="button" style="' + css( {
						display:         'flex',
						'align-items':   'flex-start',
						gap:             '14px',
						background:      isSelected ? 'rgba(201,168,76,0.06)' : COLOR.white,
						border:          isSelected ? '2px solid ' + COLOR.gold : '2px solid ' + COLOR.border,
						'border-radius': '8px',
						padding:         '16px 20px',
						cursor:          'pointer',
						'text-align':    'left',
						transition:      'border-color 0.15s',
						width:           '100%',
					} ) + '">' +
					'<span style="' + css( {
						display:         'flex',
						'align-items':   'center',
						'justify-content': 'center',
						'flex-shrink':   '0',
						width:           '22px',
						height:          '22px',
						'border-radius': '50%',
						border:          isSelected ? '6px solid ' + COLOR.gold : '2px solid ' + COLOR.border,
						background:      isSelected ? COLOR.gold : COLOR.white,
						'margin-top':    '1px',
						transition:      'border 0.15s',
					} ) + '" aria-hidden="true"></span>' +
					'<span style="font-family:' + FONT_RALEWAY + ';font-weight:' + ( isSelected ? '700' : '500' ) + ';font-size:1rem;color:' + ( isSelected ? COLOR.navy : '#374151' ) + ';line-height:1.5">' +
					escHtml( opt.text ) +
					'</span>' +
					'</button>';
				} ).join( '' ) +
				'</div>' +

				// Navigation
				'<div style="display:flex;justify-content:space-between;align-items:center">' +
				// Back button
				'<button id="scorecard-back" type="button" style="' + css( {
					display:         'inline-flex',
					'align-items':   'center',
					gap:             '8px',
					background:      'transparent',
					border:          '2px solid ' + COLOR.border,
					'border-radius': '4px',
					padding:         '12px 24px',
					'font-family':   FONT_RALEWAY,
					'font-weight':   '600',
					'font-size':     '0.9375rem',
					color:           qIndex === 0 ? COLOR.border : COLOR.muted,
					cursor:          qIndex === 0 ? 'not-allowed' : 'pointer',
					opacity:         qIndex === 0 ? '0.4' : '1',
				} ) + '" ' + ( qIndex === 0 ? 'disabled' : '' ) + '>' +
				'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>' +
				'Back' +
				'</button>' +

				// Next button
				'<button id="scorecard-next" type="button" style="' + css( {
					display:         'inline-flex',
					'align-items':   'center',
					gap:             '10px',
					background:      answers[ question.id ] !== undefined ? COLOR.navy : COLOR.border,
					color:           answers[ question.id ] !== undefined ? COLOR.white : '#9ca3af',
					'font-family':   FONT_RALEWAY,
					'font-weight':   '700',
					'font-size':     '0.9375rem',
					padding:         '12px 28px',
					'border-radius': '4px',
					border:          'none',
					cursor:          answers[ question.id ] !== undefined ? 'pointer' : 'not-allowed',
					transition:      'background 0.15s',
				} ) + '">' +
				( qIndex === total - 1 ? 'See My Results' : 'Next' ) +
				'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
				'</button>' +
				'</div>',
				'640px'
			) +
			'</div>',
			{ background: '#fafafa' }
		);

		app.innerHTML = html;

		// Option selection
		app.querySelectorAll( '.scorecard-option' ).forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				var idx     = parseInt( btn.dataset.index, 10 );
				var updated = Object.assign( {}, getState().answers );
				updated[ question.id ] = idx;
				setState( { answers: updated } );

				pushGTM( 'scorecard_question_answered', {
					question_id:  question.id,
					question_text: question.question,
					answer_index: idx,
					answer_text:  question.options[ idx ].text,
					category:     question.category,
				} );

				renderQuestion( app );
			} );
		} );

		// Back
		if ( qIndex > 0 ) {
			document.getElementById( 'scorecard-back' ).addEventListener( 'click', function () {
				setState( { currentQuestion: qIndex - 1 } );
				renderQuestion( app );
			} );
		}

		// Next
		var nextBtn = document.getElementById( 'scorecard-next' );
		nextBtn.addEventListener( 'click', function () {
			var current = getState();
			if ( current.answers[ question.id ] === undefined ) return;

			if ( qIndex < total - 1 ) {
				setState( { currentQuestion: qIndex + 1 } );
				renderQuestion( app );
			} else {
				setState( { stage: 'lead' } );
				renderLeadGate( app );
			}
		} );
	}

	// =========================================================================
	// STAGE 3 — LEAD GATE
	// =========================================================================

	function renderLeadGate( app ) {
		var html = outerWrap(
			'<div style="' + css( {
				background:   'linear-gradient(135deg,' + COLOR.navy + ' 0%,' + COLOR.navyLight + ' 100%)',
				flex:         '1',
				display:      'flex',
				'align-items': 'center',
				'justify-content': 'center',
				padding:      '60px 24px',
			} ) + '">' +
			'<div style="' + css( {
				background:      COLOR.white,
				'border-radius': '12px',
				padding:         '48px',
				width:           '100%',
				'max-width':     '560px',
				'box-shadow':    '0 20px 60px rgba(0,0,0,0.2)',
			} ) + '">' +

			// Heading
			'<div style="text-align:center;margin-bottom:32px">' +
			'<div style="' + css( {
				width:           '52px',
				height:          '52px',
				'border-radius': '50%',
				background:      'rgba(201,168,76,0.12)',
				display:         'inline-flex',
				'align-items':   'center',
				'justify-content': 'center',
				'margin-bottom': '16px',
			} ) + '">' +
			'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="' + COLOR.gold + '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>' +
			'</div>' +
			'<h2 style="font-family:' + FONT_RALEWAY + ';font-weight:800;font-size:1.5rem;color:' + COLOR.navy + ';margin:0 0 8px 0">Your results are ready</h2>' +
			'<p style="font-size:0.9375rem;color:' + COLOR.muted + ';margin:0;line-height:1.6">Enter your details to unlock your personalised risk report. We will also send a copy to your email.</p>' +
			'</div>' +

			// Form
			'<form id="scorecard-lead-form" novalidate>' +

			// Name row
			'<div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:14px">' +
			formField( 'scorecard-first-name', 'text',  'First Name',    'First Name *',  true ) +
			formField( 'scorecard-last-name',  'text',  'Last Name',     'Last Name *',   true ) +
			'</div>' +

			// Company
			'<div style="margin-bottom:14px">' +
			formField( 'scorecard-company', 'text', 'Company / Organisation', 'Company / Organisation *', true ) +
			'</div>' +

			// Email
			'<div style="margin-bottom:14px">' +
			formField( 'scorecard-email', 'email', 'Email Address', 'Email Address *', true ) +
			'</div>' +

			// Phone
			'<div style="margin-bottom:14px">' +
			formField( 'scorecard-phone', 'tel', 'Phone Number', 'Phone Number *', true ) +
			'</div>' +

			// Role select
			'<div style="margin-bottom:24px">' +
			'<label for="scorecard-role" style="display:block;font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.8125rem;color:' + COLOR.navy + ';margin-bottom:6px">Your Role</label>' +
			'<select id="scorecard-role" name="role" style="' + css( {
				width:           '100%',
				padding:         '11px 14px',
				border:          '1.5px solid ' + COLOR.border,
				'border-radius': '6px',
				'font-family':   FONT_RALEWAY,
				'font-size':     '0.9375rem',
				color:           '#374151',
				background:      COLOR.white,
				appearance:      'none',
				'-webkit-appearance': 'none',
			} ) + '">' +
			'<option value="">Select your role (optional)</option>' +
			'<option value="Builder / Head Contractor">Builder / Head Contractor</option>' +
			'<option value="Developer">Developer</option>' +
			'<option value="Architect / Designer">Architect / Designer</option>' +
			'<option value="Owner / Investor">Owner / Investor</option>' +
			'<option value="Strata Manager / FM">Strata Manager / FM</option>' +
			'<option value="Legal / Insurance">Legal / Insurance</option>' +
			'<option value="Other">Other</option>' +
			'</select>' +
			'</div>' +

			// Error message placeholder
			'<div id="scorecard-lead-error" role="alert" style="display:none;background:#fff5f5;border:1px solid #fca5a5;border-radius:6px;padding:12px 16px;font-size:0.875rem;color:#b91c1c;margin-bottom:16px"></div>' +

			// Submit
			'<button id="scorecard-lead-submit" type="submit" style="' + css( {
				display:         'flex',
				'align-items':   'center',
				'justify-content': 'center',
				gap:             '10px',
				width:           '100%',
				background:      COLOR.navy,
				color:           COLOR.white,
				'font-family':   FONT_RALEWAY,
				'font-weight':   '700',
				'font-size':     '1rem',
				padding:         '15px 32px',
				'border-radius': '4px',
				border:          'none',
				cursor:          'pointer',
				transition:      'opacity 0.2s',
				'margin-bottom': '14px',
			} ) + '" type="submit">' +
			'Unlock My Risk Report' +
			'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
			'</button>' +

			// Privacy note
			'<p style="font-size:0.8125rem;color:' + COLOR.muted + ';text-align:center;margin:0;line-height:1.5">' +
			'Your details are kept private. We do not share your information with third parties.' +
			'</p>' +

			'</form>' +
			'</div>' +
			'</div>'
		);

		app.innerHTML = html;

		document.getElementById( 'scorecard-lead-form' ).addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			submitLeadGate( app );
		} );
	}

	function formField( id, type, name, placeholder, required ) {
		return (
			'<div>' +
			'<label for="' + id + '" style="display:block;font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.8125rem;color:' + COLOR.navy + ';margin-bottom:6px">' + escHtml( placeholder ) + '</label>' +
			'<input id="' + id + '" type="' + type + '" name="' + name + '" placeholder="" autocomplete="' + ( type === 'email' ? 'email' : type === 'tel' ? 'tel' : 'on' ) + '" ' + ( required ? 'required' : '' ) + ' style="' + css( {
				width:           '100%',
				padding:         '11px 14px',
				border:          '1.5px solid ' + COLOR.border,
				'border-radius': '6px',
				'font-family':   FONT_RALEWAY,
				'font-size':     '0.9375rem',
				color:           '#374151',
				'box-sizing':    'border-box',
				outline:         'none',
				transition:      'border-color 0.15s',
			} ) + '">' +
			'</div>'
		);
	}

	function submitLeadGate( app ) {
		var firstName = ( document.getElementById( 'scorecard-first-name' ).value || '' ).trim();
		var lastName  = ( document.getElementById( 'scorecard-last-name' ).value  || '' ).trim();
		var company   = ( document.getElementById( 'scorecard-company' ).value    || '' ).trim();
		var email     = ( document.getElementById( 'scorecard-email' ).value      || '' ).trim();
		var phone     = ( document.getElementById( 'scorecard-phone' ).value      || '' ).trim();
		var role      = ( document.getElementById( 'scorecard-role' ).value       || '' ).trim();

		var errors = [];
		if ( ! firstName ) errors.push( 'First name is required.' );
		if ( ! lastName )  errors.push( 'Last name is required.' );
		if ( ! company )   errors.push( 'Company / Organisation is required.' );
		if ( ! email || ! /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test( email ) ) errors.push( 'A valid email address is required.' );
		if ( ! phone )     errors.push( 'Phone number is required.' );

		var errEl = document.getElementById( 'scorecard-lead-error' );
		if ( errors.length ) {
			errEl.innerHTML = errors.map( function ( e ) { return escHtml( e ); } ).join( '<br>' );
			errEl.style.display = 'block';
			return;
		}
		errEl.style.display = 'none';

		var submitBtn = document.getElementById( 'scorecard-lead-submit' );
		submitBtn.disabled    = true;
		submitBtn.textContent = 'Submitting\u2026';

		var state  = getState();
		var scores = calculateScores( state.answers );
		var risk   = getRiskLevel( scores.total );

		var payload = {
			data: [ {
				First_Name:   firstName,
				Last_Name:    lastName,
				Company:      company,
				Email:        email,
				Phone:        phone,
				Lead_Source:  'WI Risk Scorecard',
				Description:  'Risk Level: ' + risk.label + ' | Total Score: ' + scores.total + ' | Role: ' + role,
			} ],
		};

		fetch( ZOHO_API_ENDPOINT, {
			method:  'POST',
			headers: {
				'Content-Type':  'application/json',
				'Authorization': 'Zoho-oauthtoken ' + ZOHO_API_KEY,
			},
			body: JSON.stringify( payload ),
		} )
		.then( function ( res ) {
			// Proceed to results regardless of API response
			// (API key may be placeholder in staging)
			pushGTM( 'scorecard_lead_submitted', {
				lead_email:  email,
				risk_level:  risk.id,
				total_score: scores.total,
			} );
			setState( { stage: 'results', lead: { firstName: firstName, email: email, role: role } } );
			renderResults( app );
		} )
		.catch( function () {
			// Network error: proceed to results anyway — don't block the user
			setState( { stage: 'results', lead: { firstName: firstName, email: email, role: role } } );
			renderResults( app );
		} );
	}

	// =========================================================================
	// STAGE 4 — RESULTS
	// =========================================================================

	function renderResults( app ) {
		var state   = getState();
		var scores  = calculateScores( state.answers );
		var risk    = getRiskLevel( scores.total );
		var lead    = state.lead || {};
		var name    = lead.firstName ? escHtml( lead.firstName ) : 'there';

		pushGTM( 'scorecard_completed', {
			risk_level:  risk.id,
			total_score: scores.total,
		} );

		var html = outerWrap(
			// Header bar
			'<div style="' + css( {
				background:     COLOR.navy,
				padding:        '0 24px',
				display:        'flex',
				'align-items':  'center',
				'justify-content': 'space-between',
				'flex-shrink':  '0',
				height:         '64px',
			} ) + '">' +
			'<span style="font-family:' + FONT_RALEWAY + ';font-weight:800;font-size:1rem;color:' + COLOR.white + '">WI Risk Scorecard</span>' +
			'<button id="scorecard-restart" type="button" style="font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.8125rem;color:rgba(255,255,255,0.55);background:transparent;border:none;cursor:pointer;padding:0">Retake assessment</button>' +
			'</div>' +

			// Results body
			'<div style="' + css( {
				flex:           '1',
				background:     '#fafafa',
				padding:        '48px 24px 80px',
				'overflow-y':   'auto',
			} ) + '">' +
			container(

				// Greeting
				'<p style="font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.9375rem;color:' + COLOR.muted + ';margin:0 0 8px 0">Hi ' + name + ', here is your waterproofing risk report.</p>' +

				// Risk level badge
				'<div style="' + css( {
					background:      risk.bg,
					border:          '2px solid ' + risk.border,
					'border-radius': '10px',
					padding:         '24px 28px',
					'margin-bottom': '40px',
					display:         'flex',
					'align-items':   'center',
					'justify-content': 'space-between',
					'flex-wrap':     'wrap',
					gap:             '16px',
				} ) + '">' +
				'<div>' +
				'<p style="font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.75rem;letter-spacing:0.08em;text-transform:uppercase;color:' + risk.colour + ';margin:0 0 6px 0">Your Risk Level</p>' +
				'<p style="font-family:' + FONT_RALEWAY + ';font-weight:800;font-size:1.75rem;color:' + risk.colour + ';margin:0 0 10px 0">' + escHtml( risk.label ) + '</p>' +
				'<p style="font-size:0.9375rem;color:#374151;margin:0;line-height:1.65;max-width:500px">' + escHtml( risk.summary ) + '</p>' +
				'</div>' +
				'<div style="text-align:center;flex-shrink:0">' +
				'<p style="font-family:' + FONT_RALEWAY + ';font-weight:800;font-size:2.5rem;color:' + risk.colour + ';margin:0;line-height:1">' + scores.total + '</p>' +
				'<p style="font-size:0.75rem;color:' + COLOR.muted + ';margin:4px 0 0 0">out of 40</p>' +
				'</div>' +
				'</div>' +

				// Category score bars
				'<h3 style="font-family:' + FONT_RALEWAY + ';font-weight:700;font-size:1.0625rem;color:' + COLOR.navy + ';margin:0 0 20px 0">Category Breakdown</h3>' +
				'<div style="display:flex;flex-direction:column;gap:16px;margin-bottom:40px">' +
				CATEGORIES.map( function ( cat ) {
					var sc    = scores.byCategory[ cat ] || { score: 0, max: 0 };
					var pct   = sc.max > 0 ? Math.round( ( sc.score / sc.max ) * 100 ) : 0;
					var barColour = pct >= 80 ? '#c0392b' : pct >= 55 ? '#b36a00' : pct >= 35 ? '#2563eb' : '#22863a';
					return '<div>' +
					'<div style="display:flex;justify-content:space-between;align-items:baseline;margin-bottom:6px">' +
					'<span style="font-family:' + FONT_RALEWAY + ';font-weight:600;font-size:0.9375rem;color:' + COLOR.navy + '">' + escHtml( cat ) + '</span>' +
					'<span style="font-size:0.8125rem;color:' + COLOR.muted + '">' + sc.score + ' / ' + sc.max + '</span>' +
					'</div>' +
					'<div style="height:10px;background:' + COLOR.border + ';border-radius:5px;overflow:hidden">' +
					'<div style="height:10px;background:' + barColour + ';width:' + pct + '%;border-radius:5px;transition:width 0.6s ease"></div>' +
					'</div>' +
					'</div>';
				} ).join( '' ) +
				'</div>' +

				// Recommended services
				'<div style="' + css( {
					background:      COLOR.white,
					border:          '1px solid ' + COLOR.border,
					'border-radius': '8px',
					padding:         '28px',
					'margin-bottom': '40px',
				} ) + '">' +
				'<h3 style="font-family:' + FONT_RALEWAY + ';font-weight:700;font-size:1.0625rem;color:' + COLOR.navy + ';margin:0 0 16px 0">Recommended Services</h3>' +
				'<ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:10px">' +
				risk.services.map( function ( svc ) {
					return '<li style="display:flex;align-items:center;gap:12px;font-size:0.9375rem;color:#374151">' +
					'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="' + COLOR.gold + '" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>' +
					escHtml( svc ) +
					'</li>';
				} ).join( '' ) +
				'</ul>' +
				'</div>' +

				// CTA
				'<div style="' + css( {
					background:      'linear-gradient(135deg,' + COLOR.navy + ' 0%,' + COLOR.navyLight + ' 100%)',
					'border-radius': '10px',
					padding:         '36px 32px',
					'text-align':    'center',
				} ) + '">' +
				'<h3 style="font-family:' + FONT_RALEWAY + ';font-weight:700;font-size:1.25rem;color:' + COLOR.white + ';margin:0 0 10px 0">Ready to address your risk?</h3>' +
				'<p style="font-size:0.9375rem;color:rgba(255,255,255,0.7);margin:0 0 24px 0;line-height:1.6">Speak with a senior WI adviser. No obligation &#8212; just clear, independent advice tailored to your project.</p>' +
				'<a id="scorecard-cta" href="/contact/" class="cta-button" style="' + css( {
					display:         'inline-flex',
					'align-items':   'center',
					gap:             '10px',
					background:      COLOR.gold,
					color:           COLOR.navy,
					'font-family':   FONT_RALEWAY,
					'font-weight':   '700',
					'font-size':     '1rem',
					padding:         '15px 36px',
					'border-radius': '4px',
					'text-decoration': 'none',
				} ) + '">' +
				'Speak to an Adviser' +
				'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>' +
				'</a>' +
				'<p style="font-size:0.8125rem;color:rgba(255,255,255,0.45);margin:16px 0 0 0">Or call us: <a href="tel:1300025944" class="tel-link" style="color:rgba(255,255,255,0.65);font-weight:600;text-decoration:none">1300 025 944</a></p>' +
				'</div>',

				'640px'
			) +
			'</div>'
		);

		app.innerHTML = html;

		var ctaBtn = document.getElementById( 'scorecard-cta' );
		if ( ctaBtn ) {
			ctaBtn.addEventListener( 'click', function () {
				pushGTM( 'scorecard_cta_clicked', {
					risk_level:  risk.id,
					total_score: scores.total,
				} );
			} );
		}

		document.getElementById( 'scorecard-restart' ).addEventListener( 'click', function () {
			clearState();
			renderLanding( app );
		} );
	}

	// =========================================================================
	// SCORING HELPERS
	// =========================================================================

	function calculateScores( answers ) {
		var total      = 0;
		var byCategory = {};

		CATEGORIES.forEach( function ( cat ) {
			byCategory[ cat ] = { score: 0, max: 0 };
		} );

		QUESTIONS.forEach( function ( q ) {
			var cat      = q.category;
			var maxScore = q.options.reduce( function ( acc, o ) { return Math.max( acc, o.score ); }, 0 );

			if ( ! byCategory[ cat ] ) byCategory[ cat ] = { score: 0, max: 0 };
			byCategory[ cat ].max += maxScore;

			var answerIdx = answers[ q.id ];
			if ( answerIdx !== undefined && q.options[ answerIdx ] ) {
				var score = q.options[ answerIdx ].score;
				byCategory[ cat ].score += score;
				total += score;
			} else {
				// Unanswered: assume mid score to avoid skewing results
				var mid = Math.round( maxScore / 2 );
				byCategory[ cat ].score += mid;
				total += mid;
			}
		} );

		return { total: total, byCategory: byCategory };
	}

	function getRiskLevel( total ) {
		for ( var i = 0; i < RISK_LEVELS.length; i++ ) {
			var r = RISK_LEVELS[ i ];
			if ( total >= r.min && total <= r.max ) return r;
		}
		// Fallback to highest if out of range
		return RISK_LEVELS[ RISK_LEVELS.length - 1 ];
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
			case 'questions': renderQuestion( app ); break;
			case 'lead':      renderLeadGate( app ); break;
			case 'results':   renderResults( app );  break;
			default:          renderLanding( app );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}

} )();
