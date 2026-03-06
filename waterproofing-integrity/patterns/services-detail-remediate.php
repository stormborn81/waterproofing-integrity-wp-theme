<?php
/**
 * Pattern: Services Detail — Defect Remediation
 * Slug: waterproofing-integrity/services-detail-remediate
 *
 * id="remediate" — Navy bg — 2-col reversed (40% stats left, 60% copy right).
 * Left: $283K stat prominent + 2,500+ projects.
 * Right: Wrench icon, H2, body copy, 6 bullet points.
 *
 * TODO: Replace placeholder body copy and bullet points with copy from Services.tsx.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Services Detail — Defect Remediation', 'waterproofing-integrity' ),
	'description' => __( 'Defect Assessment & Remediation service section on Navy background with $283K stat.', 'waterproofing-integrity' ),
	'keywords'    => [ 'services', 'remediate', 'defect', 'assessment', 'remediation' ],
	'content'     => '
<!-- wp:group {"tagName":"section","anchor":"remediate","className":"wi-service-detail wi-service-remediate","style":{"color":{"background":"var(--wp--preset--color--navy)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section id="remediate" class="wp-block-group wi-service-detail wi-service-remediate" style="background:var(--wp--preset--color--navy);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--2xl)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Left: $283K stats panel (40%) -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:html -->
				<div style="border-left:4px solid var(--wp--preset--color--gold);background:rgba(255,255,255,0.06);border-radius:0 8px 8px 0;padding:40px 32px;height:100%;box-sizing:border-box;display:flex;flex-direction:column;gap:32px">

					<div>
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:clamp(2.5rem,5vw,3.75rem);font-weight:800;color:var(--wp--preset--color--gold);margin:0 0 4px 0;line-height:1">$283K</p>
						<p style="font-size:1rem;font-weight:600;color:#fff;margin:0 0 8px 0">Average Defect Cost Exposed</p>
						<p style="font-size:0.875rem;color:rgba(255,255,255,0.6);margin:0">Across 2,500+ remediation projects — the true cost of a waterproofing failure goes far beyond repair</p>
					</div>

					<div style="border-top:1px solid rgba(255,255,255,0.15);padding-top:32px">
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;margin:0 0 4px 0;line-height:1">2,500+</p>
						<p style="font-size:1rem;font-weight:600;color:#fff;margin:0 0 4px 0">Projects Completed</p>
						<p style="font-size:0.875rem;color:rgba(255,255,255,0.6);margin:0">From minor defect reports to complex multi-storey remediation programmes</p>
					</div>

					<div style="border-top:1px solid rgba(255,255,255,0.15);padding-top:32px">
						<ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:12px">
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:rgba(255,255,255,0.85)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								End-to-end management
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:rgba(255,255,255,0.85)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Legally defensible reporting
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:rgba(255,255,255,0.85)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								NATA-accredited commissioning tests
							</li>
						</ul>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right: copy + bullet points (60%) -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- wp:html -->
				<div style="width:52px;height:52px;background:rgba(255,255,255,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
				<h2 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Defect Assessment &amp; Remediation</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontSize":"1.125rem"},"color":{"text":"var(--wp--preset--color--gold)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p style="font-style:italic;font-size:1.125rem;color:var(--wp--preset--color--gold);margin-bottom:var(--wp--preset--spacing--md)">Diagnose the root cause. Manage remediation to resolution.</p>
				<!-- /wp:paragraph -->

				<!-- TODO: Replace body copy with paragraph from Services.tsx — Remediate section -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
				<p style="color:rgba(255,255,255,0.8);margin-bottom:var(--wp--preset--spacing--lg)">When waterproofing fails, the consequences extend far beyond the cost of repair. Consequential damage, business interruption, strata disputes, and legal proceedings can easily push total exposure beyond $283K — our average figure across 2,500+ projects. The right response requires independent expertise from diagnosis through to final resolution.</p>
				<!-- /wp:paragraph -->

				<!-- TODO: Replace bullet points with items from Services.tsx — Remediate section -->
				<!-- wp:html -->
				<ul style="list-style:none;padding:0;margin:0 0 var(--wp--preset--spacing--lg) 0;display:flex;flex-direction:column;gap:14px">
					<li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9375rem;color:rgba(255,255,255,0.85);line-height:1.5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:3px"><polyline points="20 6 9 17 4 12"/></svg>
						Independent root cause analysis to identify the true origin of failure
					</li>
					<li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9375rem;color:rgba(255,255,255,0.85);line-height:1.5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:3px"><polyline points="20 6 9 17 4 12"/></svg>
						Technical defect report suitable for legal and insurance proceedings
					</li>
					<li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9375rem;color:rgba(255,255,255,0.85);line-height:1.5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:3px"><polyline points="20 6 9 17 4 12"/></svg>
						Remediation specification prepared to AS 4654 and project-specific requirements
					</li>
					<li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9375rem;color:rgba(255,255,255,0.85);line-height:1.5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:3px"><polyline points="20 6 9 17 4 12"/></svg>
						Contractor procurement and competitive tendering support
					</li>
					<li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9375rem;color:rgba(255,255,255,0.85);line-height:1.5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:3px"><polyline points="20 6 9 17 4 12"/></svg>
						Independent inspection oversight during remediation works
					</li>
					<li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9375rem;color:rgba(255,255,255,0.85);line-height:1.5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:3px"><polyline points="20 6 9 17 4 12"/></svg>
						NATA-accredited commissioning testing and defects liability period monitoring
					</li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"cta-button","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontWeight":"700","fontSize":"1rem"}},"backgroundColor":"gold","textColor":"navy"} -->
					<div class="wp-block-button cta-button"><a class="wp-block-button__link cta-button has-navy-color has-gold-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-weight:700;font-size:1rem">Get Expert Advice</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
