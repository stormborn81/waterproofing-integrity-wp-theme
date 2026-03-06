<?php
/**
 * Pattern: Social Proof Stats
 * Slug: waterproofing-integrity/social-proof-stats
 *
 * Navy bg — 4 stats (Inspections in Gold, rest White) + client logos text strip.
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

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--xl)">Proven Results Across Australia</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"gold","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"}}} -->
				<p class="has-gold-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">10,000+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Inspections Completed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">750+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Designs Delivered</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">$283K</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Average Defect Cost Exposed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column" style="text-align:center">
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2rem,4vw,3rem)"}}} -->
				<p class="has-white-color has-text-color" style="font-weight:800;font-size:clamp(2rem,4vw,3rem);text-align:center;margin-bottom:4px">2,500+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"500"}}} -->
				<p class="has-white-color has-text-color" style="font-size:1rem;font-weight:500;text-align:center;margin-top:0">Projects Completed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- Client logos text strip -->
		<!-- wp:html -->
		<div style="margin-top:var(--wp--preset--spacing--xl);padding-top:var(--wp--preset--spacing--lg);border-top:1px solid rgba(255,255,255,0.15);display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:32px">
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Toga</span>
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Growthbuilt</span>
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Meriton</span>
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Built</span>
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Roberts Co</span>
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Aqualand</span>
			<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.875rem;letter-spacing:0.05em;color:rgba(255,255,255,0.5);text-transform:uppercase">Crown</span>
		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
