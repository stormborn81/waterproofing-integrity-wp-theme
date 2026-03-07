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
<!-- wp:group {"tagName":"section","className":"wi-social-proof","style":{"color":{"background":"var(--wp--preset--color--navy)"},"spacing":{"padding":{"top":"2rem","bottom":"3rem","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-social-proof" style="background:var(--wp--preset--color--navy);padding-top:2rem;padding-right:var(--wp--preset--spacing--md);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"isStackedOnMobile":true,"className":"wi-stats-grid","style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns wi-stats-grid is-layout-flex">

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"gold","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-gold-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">10,000+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0"}}}} -->
				<p style="font-size:0.75rem;font-weight:400;letter-spacing:0.08em;color:rgba(255,255,255,0.7);text-align:center;margin-top:0;text-transform:uppercase">Inspections</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">750+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0"}}}} -->
				<p style="font-size:0.75rem;font-weight:400;letter-spacing:0.08em;color:rgba(255,255,255,0.7);text-align:center;margin-top:0;text-transform:uppercase">Designs</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">$283K</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0"}}}} -->
				<p style="font-size:0.75rem;font-weight:400;letter-spacing:0.08em;color:rgba(255,255,255,0.7);text-align:center;margin-top:0;text-transform:uppercase">Avg Defect Cost</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"},"spacing":{"margin":{"bottom":"4px"}}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">2,500+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0"}}}} -->
				<p style="font-size:0.75rem;font-weight:400;letter-spacing:0.08em;color:rgba(255,255,255,0.7);text-align:center;margin-top:0;text-transform:uppercase">Projects</p>
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
