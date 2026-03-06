<?php
/**
 * Pattern: Services Detail — Inspection
 * Slug: waterproofing-integrity/services-detail-inspect
 *
 * id="inspect" — Light Grey bg — 2-col reversed (40% stats left, 60% copy right).
 * Left: stats panel with Gold left-border (10,000+ inspections, Tier 1 projects, Independent).
 * Right: Search icon, H2, body copy.
 *
 * TODO: Replace placeholder body copy with copy from src/pages/Services.tsx.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Services Detail — Inspection', 'waterproofing-integrity' ),
	'description' => __( 'Inspection During Construction service section with reversed stats layout.', 'waterproofing-integrity' ),
	'keywords'    => [ 'services', 'inspect', 'inspection', 'construction' ],
	'content'     => '
<!-- wp:group {"tagName":"section","anchor":"inspect","className":"wi-service-detail wi-service-inspect","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section id="inspect" class="wp-block-group wi-service-detail wi-service-inspect" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--2xl)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Left: stats panel (40%) — Gold left-border -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:html -->
				<div style="border-left:4px solid var(--wp--preset--color--gold);background:#fff;border-radius:0 8px 8px 0;padding:40px 32px;height:100%;box-sizing:border-box;display:flex;flex-direction:column;gap:32px">

					<div>
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:clamp(2.5rem,5vw,3.5rem);font-weight:800;color:var(--wp--preset--color--gold);margin:0 0 4px 0;line-height:1">10,000+</p>
						<p style="font-size:1rem;font-weight:600;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Inspections Completed</p>
						<p style="font-size:0.875rem;color:var(--wp--preset--color--muted);margin:0">Across Australia&#8217;s residential, commercial, and infrastructure sectors</p>
					</div>

					<div style="border-top:1px solid var(--wp--preset--color--border);padding-top:32px">
						<p style="font-family:var(--wp--preset--font-family--raleway);font-size:1.5rem;font-weight:800;color:var(--wp--preset--color--navy);margin:0 0 4px 0;line-height:1.2">Tier 1</p>
						<p style="font-size:1rem;font-weight:600;color:var(--wp--preset--color--navy);margin:0 0 4px 0">Projects on Our Portfolio</p>
						<p style="font-size:0.875rem;color:var(--wp--preset--color--muted);margin:0">Including Growthbuilt, Built, Roberts Co, Meriton, and Aqualand programmes</p>
					</div>

					<div style="border-top:1px solid var(--wp--preset--color--border);padding-top:32px">
						<ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:12px">
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Stage-by-stage inspection programme
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								Written report issued after each inspection
							</li>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:0.9375rem;color:var(--wp--preset--color--navy)">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><polyline points="20 6 9 17 4 12"/></svg>
								100% independent — no contractor affiliation
							</li>
						</ul>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right: copy (60%) -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- wp:html -->
				<div style="width:52px;height:52px;background:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
				<h2 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Inspection During Construction</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontSize":"1.125rem"},"color":{"text":"var(--wp--preset--color--blue)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p style="font-style:italic;font-size:1.125rem;color:var(--wp--preset--color--blue);margin-bottom:var(--wp--preset--spacing--md)">Catch defects at the point of installation — not after handover.</p>
				<!-- /wp:paragraph -->

				<!-- TODO: Replace body copy with paragraphs from Services.tsx — Inspect section -->
				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--md)">Construction-stage inspections are the most cost-effective intervention available. Identifying and rectifying a waterproofing defect during construction costs a fraction of the remediation expense once a building is complete and occupied — and avoids the consequential damage, disputes, and litigation that invariably follow.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--lg)">Our inspection programme provides independent third-party oversight at every critical stage — substrate preparation, membrane application, detail treatment, and protection layer installation. We integrate with your construction programme to minimise hold time while maximising risk coverage across every waterproofed element.</p>
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

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
