<?php
/**
 * Pattern: Case Study Carousel (Featured Projects)
 * Slug: waterproofing-integrity/case-study-carousel
 *
 * WordPress Query Loop block pulling latest 3 Case Study CPT posts.
 * White bg — 3-col desktop / 1-col mobile.
 * Shows fallback message when no case studies are published yet.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Case Study Carousel — Featured Projects', 'waterproofing-integrity' ),
	'description' => __( '3-column grid of latest case studies pulled from the Case Study CPT via Query Loop.', 'waterproofing-integrity' ),
	'keywords'    => [ 'case studies', 'projects', 'portfolio', 'query loop' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-case-studies","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-case-studies has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)","margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700">Featured Projects</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textAlign":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color">Independent waterproofing expertise delivered across Australia.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"postType":"case-study","perPage":3,"order":"desc","orderBy":"date"},"className":"wi-case-study-grid","layout":{"type":"default"}} -->
		<div class="wp-block-query wi-case-study-grid">

			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

				<!-- wp:group {"className":"wi-case-study-card","backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="wp-block-group wi-case-study-card has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;overflow:hidden">

					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{}}} /-->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--md)","bottom":"var(--wp--preset--spacing--md)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
					<div class="wp-block-group" style="padding:var(--wp--preset--spacing--md)">

						<!-- wp:post-title {"level":3,"isLink":true,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} /-->

						<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"textColor":"muted","style":{"typography":{"fontSize":"0.9rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} /-->

						<!-- wp:read-more {"content":"View Project \u2192","textColor":"gold","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} /-->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)"}}}} -->
				<div class="wp-block-group" style="text-align:center;padding:var(--wp--preset--spacing--xl) 0">
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"1rem"}}} -->
					<p class="has-muted-color has-text-color" style="font-size:1rem">Case studies are coming soon. In the meantime, <a href="/contact/">contact us</a> to discuss your project.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			<!-- /wp:query-no-results -->

		</div>
		<!-- /wp:query -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--xl)"}}}} -->
		<div class="wp-block-buttons is-layout-flex is-content-justification-center" style="margin-top:var(--wp--preset--spacing--xl)">
			<!-- wp:button {"className":"","style":{"border":{"radius":"8px"}},"backgroundColor":"navy","textColor":"white"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-navy-background-color has-text-color has-background wp-element-button" href="/case-studies/" style="border-radius:8px">View All Projects</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
