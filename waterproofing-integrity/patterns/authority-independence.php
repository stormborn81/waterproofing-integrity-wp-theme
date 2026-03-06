<?php
/**
 * Pattern: Authority — Why Independence Matters
 * Slug: waterproofing-integrity/authority-independence
 *
 * Light Grey bg — 2-col layout (3/5 copy + 2/5 sidebar).
 * Left: ShieldCheck icon, Why Independence Matters H2, 2 body paragraphs,
 *       Learn More About WI link.
 * Right: Latest Resources sidebar — 3 placeholder blog links.
 *        TODO: Replace with WordPress Query Loop pointing to /articles/
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Authority — Why Independence Matters', 'waterproofing-integrity' ),
	'description' => __( 'Light grey 2-column section: independence copy left, Latest Resources sidebar right.', 'waterproofing-integrity' ),
	'keywords'    => [ 'authority', 'independence', 'why choose us', 'resources' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-authority","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-authority" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--2xl)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Left column: 3/5 — copy -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- wp:html -->
				<div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<h2 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--md)">Why Independence Matters</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--md)">When the same party designs and installs waterproofing, there is an inherent conflict of interest. Defects go undetected. Liability is disputed. Buildings fail. Waterproofing Integrity operates as a fully independent third party — we have no commercial relationship with any installer, manufacturer, or contractor.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--lg)">Our independence means our advice is objective, our inspections are rigorous, and our reports stand up to legal scrutiny. Builders trust us. Developers rely on us. Courts accept our expert testimony.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-blue-color has-text-color" style="font-weight:600"><a href="/about-wi/" class="has-blue-color">Learn More About WI &#8594;</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right column: 2/5 — Latest Resources sidebar -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--lg)">

					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-bottom:var(--wp--preset--spacing--md)">Latest Resources</h3>
					<!-- /wp:heading -->

					<!-- TODO: Replace the placeholder links below with a WordPress Query Loop
					     block pointing to /articles/ (post type: post, category: all,
					     posts per page: 3, order: date desc). -->
					<!-- wp:html -->
					<ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0">
						<li style="border-bottom:1px solid var(--wp--preset--color--border);padding-bottom:16px;margin-bottom:16px">
							<a href="/articles/" style="display:block;font-size:0.9375rem;font-weight:600;color:var(--wp--preset--color--navy);text-decoration:none;line-height:1.4;margin-bottom:4px">Understanding AS 4654: Waterproofing Membranes for External Above-Ground Use</a>
							<span style="font-size:0.8125rem;color:var(--wp--preset--color--muted)">Placeholder — replace with Query Loop</span>
						</li>
						<li style="border-bottom:1px solid var(--wp--preset--color--border);padding-bottom:16px;margin-bottom:16px">
							<a href="/articles/" style="display:block;font-size:0.9375rem;font-weight:600;color:var(--wp--preset--color--navy);text-decoration:none;line-height:1.4;margin-bottom:4px">The $283K Question: Why Defect Detection at Design Stage Saves Millions</a>
							<span style="font-size:0.8125rem;color:var(--wp--preset--color--muted)">Placeholder — replace with Query Loop</span>
						</li>
						<li>
							<a href="/articles/" style="display:block;font-size:0.9375rem;font-weight:600;color:var(--wp--preset--color--navy);text-decoration:none;line-height:1.4;margin-bottom:4px">NATA Accreditation Explained: What It Means for Your Waterproofing Report</a>
							<span style="font-size:0.8125rem;color:var(--wp--preset--color--muted)">Placeholder — replace with Query Loop</span>
						</li>
					</ul>
					<!-- /wp:html -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--md)"}}}} -->
					<p style="margin-top:var(--wp--preset--spacing--md)"><a href="/articles/" class="has-blue-color" style="font-size:0.875rem;font-weight:600;color:var(--wp--preset--color--blue)">View All Articles &#8594;</a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

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
