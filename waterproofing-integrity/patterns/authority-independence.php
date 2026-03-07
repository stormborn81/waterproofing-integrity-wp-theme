<?php
/**
 * Pattern: Authority — Why Independence Matters
 * Slug: waterproofing-integrity/authority-independence
 *
 * Light grey bg — 2-col layout (60% copy + 40% sidebar).
 * Left: icon+heading row, 2 body paragraphs (no link).
 * Right: "LATEST RESOURCES" label + 3 individual white resource cards with date.
 *
 * TODO: Replace placeholder resource cards with WordPress Query Loop → /articles/
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Authority — Why Independence Matters', 'waterproofing-integrity' ),
	'description' => __( 'Light grey 2-column section: independence copy left, Latest Resources cards right.', 'waterproofing-integrity' ),
	'keywords'    => [ 'authority', 'independence', 'why choose us', 'resources' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-authority","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-authority" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--2xl)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Left column: 60% — copy -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- Icon + heading on same row -->
				<!-- wp:html -->
				<div class="wi-authority-title-row">
					<div class="wi-authority-icon" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2E86AB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
					</div>
					<h2 class="wi-authority-heading">Why Independence Matters</h2>
				</div>
				<!-- /wp:html -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--md)"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--md)">We have no product affiliations. No installer partnerships. No conflicts of interest. Our advice is purely expert opinion: defensible, evidence-based and aligned only with your project&#8217;s best outcome.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:0">That independence is why builders, developers and asset owners trust Waterproofing Integrity on their most complex and legally sensitive projects.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right column: 40% — Latest Resources -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:html -->
				<div>
					<p class="wi-resource-label">LATEST RESOURCES</p>

					<!-- TODO: Replace placeholder cards below with a WordPress Query Loop
					     block pointing to /articles/ (post type: post, order: date desc, posts: 3). -->

					<a href="/articles/ncc-2026-waterproofing-changes/" class="wi-resource-card">
						<div class="wi-resource-card-top">
							<span class="wi-resource-title">NCC 2026: What Changes Mean for Waterproofing</span>
							<span class="wi-resource-arrow" aria-hidden="true">&#8594;</span>
						</div>
						<span class="wi-resource-date">Feb 2026</span>
					</a>

					<a href="/articles/nata-accredited-testing/" class="wi-resource-card">
						<div class="wi-resource-card-top">
							<span class="wi-resource-title">Understanding NATA-Accredited Testing</span>
							<span class="wi-resource-arrow" aria-hidden="true">&#8594;</span>
						</div>
						<span class="wi-resource-date">Jan 2026</span>
					</a>

					<a href="/articles/independent-design-reviews/" class="wi-resource-card">
						<div class="wi-resource-card-top">
							<span class="wi-resource-title">Why Independent Design Reviews Save Projects</span>
							<span class="wi-resource-arrow" aria-hidden="true">&#8594;</span>
						</div>
						<span class="wi-resource-date">Dec 2025</span>
					</a>
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
