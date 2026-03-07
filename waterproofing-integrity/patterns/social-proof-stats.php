<?php
/**
 * Pattern: Social Proof Stats
 * Slug: waterproofing-integrity/social-proof-stats
 *
 * Navy bg — 4 stats + "TRUSTED BY" label + client logos text strip.
 * Stats grid: 1-col mobile, 2-col tablet (768px), 4-col desktop (1024px).
 * Client logos: Toga, Growthbuilt, Meriton, Built, Roberts Co, Aqualand, Crown.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Social Proof Stats', 'waterproofing-integrity' ),
	'description' => __( 'Navy background stats strip with 4 key figures and client logos text row.', 'waterproofing-integrity' ),
	'keywords'    => [ 'stats', 'social proof', 'clients', 'numbers' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-social-proof","style":{"color":{"background":"var(--wp--preset--color--navy)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-social-proof" style="background:var(--wp--preset--color--navy);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"className":"wi-stats-grid","style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns wi-stats-grid is-layout-flex">

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"gold","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-gold-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">10,000+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Inspections Completed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">750+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Designs Delivered</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">$283K</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Average Defect Cost Exposed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">2,500+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Projects Completed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- TRUSTED BY label + client logos text strip -->
		<!-- wp:html -->
		<div class="wi-trusted-by-section">
			<p class="wi-trusted-by-label">TRUSTED BY</p>
			<div class="wi-company-names">
				<span>Toga</span>
				<span>Growthbuilt</span>
				<span>Meriton</span>
				<span>Built</span>
				<span>Roberts Co</span>
				<span>Aqualand</span>
				<span>Crown</span>
			</div>
		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
