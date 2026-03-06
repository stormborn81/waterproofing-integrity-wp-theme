<?php
/**
 * Pattern: Services Detail — NATA Testing
 * Slug: waterproofing-integrity/services-detail-test
 *
 * id="test" — White bg — 2-col (60% copy+sub-cards left, 40% stats right).
 * Left: Flask icon, H2, body copy, 6 testing method sub-cards in Light Grey boxes.
 * Right: stats panel with Gold left-border (NATA badge, 7 methodologies, Non-destructive).
 *
 * TODO: Replace placeholder body copy with copy from src/pages/Services.tsx.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Services Detail — NATA Testing', 'waterproofing-integrity' ),
	'description' => __( 'NATA-Accredited Testing service section with 6 testing method sub-cards.', 'waterproofing-integrity' ),
	'keywords'    => [ 'services', 'test', 'nata', 'testing', 'membrane' ],
	'content'     => '
<!-- wp:group {"tagName":"section","anchor":"test","className":"wi-service-detail wi-service-test","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section id="test" class="wp-block-group wi-service-detail wi-service-test has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--2xl)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Left: copy + 6 testing method sub-cards (60%) -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- wp:html -->
				<div style="width:52px;height:52px;background:var(--wp--preset--color--light-grey);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
					<!-- Flask / beaker icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 3h6"/><path d="M9 3v7l-5.5 10A1.07 1.07 0 0 0 4.5 21h15a1.07 1.07 0 0 0 1-1l-5.5-10V3"/><line x1="6" y1="15" x2="18" y2="15"/></svg>
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
				<h2 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">NATA-Accredited Testing</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontSize":"1.125rem"},"color":{"text":"var(--wp--preset--color--blue)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p style="font-style:italic;font-size:1.125rem;color:var(--wp--preset--color--blue);margin-bottom:var(--wp--preset--spacing--md)">Objective, defensible evidence of waterproofing performance.</p>
				<!-- /wp:paragraph -->

				<!-- TODO: Replace body copy with paragraphs from Services.tsx — Test section -->
				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--md)">NATA accreditation is the benchmark for laboratory testing credibility in Australia. Our accredited laboratory conducts non-destructive membrane testing that provides objective, defensible evidence of waterproofing performance — evidence that stands up to builder, developer, and legal scrutiny.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">We apply seven distinct testing methodologies depending on membrane type, location, and risk profile, ensuring the right test is applied in the right situation to produce results that are meaningful and actionable.</p>
				<!-- /wp:paragraph -->

				<!-- 6 Testing method sub-cards -->
				<!-- wp:html -->
				<div style="display:grid;grid-template-columns:repeat(2,1fr);gap:12px">

					<div style="background:var(--wp--preset--color--light-grey);border-radius:6px;padding:16px">
						<p style="font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Flood Testing</p>
						<p style="font-size:0.8125rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.5">Static water ponding per AS 4654 — the primary acceptance test for horizontal membranes</p>
					</div>

					<div style="background:var(--wp--preset--color--light-grey);border-radius:6px;padding:16px">
						<p style="font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Electric Impedance Testing</p>
						<p style="font-size:0.8125rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.5">Non-destructive detection of membrane continuity faults and pinholes across large areas</p>
					</div>

					<div style="background:var(--wp--preset--color--light-grey);border-radius:6px;padding:16px">
						<p style="font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Nuclear Isotope Moisture</p>
						<p style="font-size:0.8125rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.5">Locates trapped moisture beneath membranes without surface penetration</p>
					</div>

					<div style="background:var(--wp--preset--color--light-grey);border-radius:6px;padding:16px">
						<p style="font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Infrared Thermography</p>
						<p style="font-size:0.8125rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.5">Identifies moisture and thermal anomalies non-destructively using thermal imaging</p>
					</div>

					<div style="background:var(--wp--preset--color--light-grey);border-radius:6px;padding:16px">
						<p style="font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Hose Testing</p>
						<p style="font-size:0.8125rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.5">Dynamic water infiltration testing at vertical surfaces, penetrations, and junctions</p>
					</div>

					<div style="background:var(--wp--preset--color--light-grey);border-radius:6px;padding:16px">
						<p style="font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Adhesion &amp; Tensile Testing</p>
						<p style="font-size:0.8125rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.5">Verifies membrane bond strength to substrate — critical for below-ground applications</p>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right: stats panel (40%) — Gold left-border -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:html -->
				<div style="border-left:4px solid var(--wp--preset--color--gold);background:var(--wp--preset--color--light-grey);border-radius:0 8px 8px 0;padding:40px 32px;height:100%;box-sizing:border-box;display:flex;flex-direction:column;gap:32px">

					<div>
						<div style="display:inline-flex;align-items:center;gap:8px;background:var(--wp--preset--color--navy);color:#fff;font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.75rem;letter-spacing:0.08em;text-transform:uppercase;padding:6px 14px;border-radius:4px;margin-bottom:12px">
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
							NATA Accredited
						</div>
						<p style="font-size:0.875rem;color:var(--wp--preset--color--muted);margin:0">National Association of Testing Authorities — Australia&#8217;s peak accreditation body for testing laboratories</p>
					</div>

					<div style="border-top:1px solid var(--wp--preset--color--border);padding-top:32px">
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:clamp(2.5rem,5vw,3.5rem);font-weight:800;color:var(--wp--preset--color--navy);margin:0 0 4px 0;line-height:1">7</p>
						<p style="font-size:1rem;font-weight:600;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Testing Methodologies</p>
						<p style="font-size:0.875rem;color:var(--wp--preset--color--muted);margin:0">Applied based on membrane type, substrate, and risk profile</p>
					</div>

					<div style="border-top:1px solid var(--wp--preset--color--border);padding-top:32px">
						<ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:12px">
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								100% non-destructive methods
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Defensible in legal proceedings
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Written NATA-accredited report issued
							</li>
						</ul>
					</div>

				</div>
				<!-- /wp:html -->

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
