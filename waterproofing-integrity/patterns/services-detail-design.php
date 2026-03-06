<?php
/**
 * Pattern: Services Detail — Design Review
 * Slug: waterproofing-integrity/services-detail-design
 *
 * id="design" — White bg — 2-col (60% copy left, 40% stats right).
 * Left: PenTool icon, H2, italic tagline, body copy, CTA button.
 * Right: stats panel with Gold left-border (750+ designs, 35% defects from design).
 *
 * TODO: Replace placeholder body copy with copy from src/pages/Services.tsx.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Services Detail — Design Review', 'waterproofing-integrity' ),
	'description' => __( 'Waterproofing Design Review service section with stats panel.', 'waterproofing-integrity' ),
	'keywords'    => [ 'services', 'design', 'review', 'specification' ],
	'content'     => '
<!-- wp:group {"tagName":"section","anchor":"design","className":"wi-service-detail wi-service-design","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section id="design" class="wp-block-group wi-service-detail wi-service-design has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--2xl)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Left: copy (60%) -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- wp:html -->
				<div style="width:52px;height:52px;background:var(--wp--preset--color--light-grey);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
				<h2 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Waterproofing Design Review</h2>
				<!-- /wp:heading -->

				<!-- TODO: Replace italic tagline with copy from Services.tsx -->
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontSize":"1.125rem"},"color":{"text":"var(--wp--preset--color--blue)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p style="font-style:italic;font-size:1.125rem;color:var(--wp--preset--color--blue);margin-bottom:var(--wp--preset--spacing--md)">Eliminate defects before a single membrane is installed.</p>
				<!-- /wp:paragraph -->

				<!-- TODO: Replace body copy with paragraphs from Services.tsx — Design section -->
				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--md)">Waterproofing failures most commonly originate at the design stage — before construction has even begun. Inadequate specifications, inappropriate product selection, and missing details at interfaces and penetrations create the conditions for failure that no amount of installation care can prevent.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--lg)">Our Waterproofing Design Review provides comprehensive, independent specifications grounded in AS 4654 and AS 3740, aligned with your project&#8217;s structural and architectural intent, and practically buildable by your appointed contractor. We have delivered 750+ designs across Australia&#8217;s most demanding construction programmes.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"cta-button","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontWeight":"700","fontSize":"1rem"}},"backgroundColor":"gold","textColor":"navy"} -->
					<div class="wp-block-button cta-button"><a class="wp-block-button__link cta-button has-navy-color has-gold-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-weight:700;font-size:1rem">Get Expert Advice</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:column -->

			<!-- Right: stats panel (40%) — Gold left-border -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:html -->
				<div style="border-left:4px solid var(--wp--preset--color--gold);background:var(--wp--preset--color--light-grey);border-radius:0 8px 8px 0;padding:40px 32px;height:100%;box-sizing:border-box;display:flex;flex-direction:column;gap:32px">

					<div>
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:clamp(2.5rem,5vw,3.5rem);font-weight:800;color:var(--wp--preset--color--navy);margin:0 0 4px 0;line-height:1">750+</p>
						<p style="font-size:1rem;font-weight:600;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Designs Delivered</p>
						<p style="font-size:0.875rem;color:var(--wp--preset--color--muted);margin:0">Across residential, commercial, and infrastructure projects nationally</p>
					</div>

					<div style="border-top:1px solid var(--wp--preset--color--border);padding-top:32px">
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:clamp(2.5rem,5vw,3.5rem);font-weight:800;color:var(--wp--preset--color--gold);margin:0 0 4px 0;line-height:1">35%</p>
						<p style="font-size:1rem;font-weight:600;color:var(--wp--preset--color--navy);margin:0 0 4px 0">of Defects Originate at Design</p>
						<p style="font-size:0.875rem;color:var(--wp--preset--color--muted);margin:0">Catching failures at specification stage costs a fraction of post-construction remediation</p>
					</div>

					<div style="border-top:1px solid var(--wp--preset--color--border);padding-top:32px">
						<ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:12px">
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								AS 4654 &amp; AS 3740 compliant
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Buildable by any qualified contractor
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Fully independent — no contractor affiliation
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
