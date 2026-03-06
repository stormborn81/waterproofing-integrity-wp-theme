<?php
/**
 * Pattern: About — Why We Exist
 * Slug: waterproofing-integrity/about-why-we-exist
 *
 * White bg — founding story — 4 body paragraphs.
 *
 * TODO: Replace all 4 paragraphs with copy from src/pages/About.tsx — founding story section.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'About — Why We Exist', 'waterproofing-integrity' ),
	'description' => __( 'White background founding story section with 4 body paragraphs.', 'waterproofing-integrity' ),
	'keywords'    => [ 'about', 'founding', 'story', 'history', 'why' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-why-we-exist","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-why-we-exist has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--xl)">Why We Exist</h2>
		<!-- /wp:heading -->

		<!-- TODO: Replace paragraphs 1-4 with founding story copy from About.tsx -->

		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
		<p class="has-muted-color has-text-color" style="font-size:1.0625rem;line-height:1.75;margin-bottom:var(--wp--preset--spacing--md)">Waterproofing Integrity was founded on a simple observation: the Australian construction industry had a structural conflict of interest problem. The same parties responsible for designing and installing waterproofing systems were also responsible for certifying their own work. When a defect appeared, liability was disputed and buildings failed while the parties pointed at each other.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
		<p class="has-muted-color has-text-color" style="font-size:1.0625rem;line-height:1.75;margin-bottom:var(--wp--preset--spacing--md)">The consequences of that conflict are significant and measurable. Waterproofing defects represent one of the most common and costly forms of building failure in Australia. Our data, drawn from over 2,500 projects, shows an average defect cost exposure of $283,000 per project — a figure that grows substantially when consequential damage, legal costs, and strata disputes are included.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
		<p class="has-muted-color has-text-color" style="font-size:1.0625rem;line-height:1.75;margin-bottom:var(--wp--preset--spacing--md)">We exist to remove that conflict. Waterproofing Integrity holds no commercial relationships with any installer, manufacturer, or contractor. We are retained by builders, developers, and asset owners to provide the independent technical oversight that the industry cannot provide for itself. Our reports reflect what we find — not what anyone needs us to say.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"0"}}}} -->
		<p class="has-muted-color has-text-color" style="font-size:1.0625rem;line-height:1.75;margin-bottom:0">Today, we are Australia&#8217;s leading independent waterproofing advisory practice — NATA-accredited, AIW-member, and accepted as expert witnesses by Australian courts. Our mission has not changed: to give every client the objective, rigorous, and defensible advice they deserve.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
