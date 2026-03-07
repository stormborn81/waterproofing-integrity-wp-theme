<?php
/**
 * Pattern: Hero — Homepage
 * Slug: waterproofing-integrity/hero-homepage
 *
 * Full-width hero with background image + navy gradient overlay, H1, CTA button, and trust line.
 * Background image set via .wi-hero CSS. Content centred via .wi-container.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Hero — Homepage', 'waterproofing-integrity' ),
	'description' => __( 'Full-width hero with background image, headline, CTA button, and trust line.', 'waterproofing-integrity' ),
	'keywords'    => [ 'hero', 'homepage', 'cta' ],
	'blockTypes'  => [ 'core/group' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"64px"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group wi-hero" style="padding-top:80px;padding-bottom:64px">

	<!-- wp:group {"className":"wi-container","style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
	<div class="wp-block-group wi-container">

		<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(30px,5vw,56px)"},"color":{"text":"#ffffff"}}} -->
		<h1 class="wp-block-heading" style="color:#ffffff;font-weight:800;line-height:1.1;font-size:clamp(30px,5vw,56px)">Australia\'s Independent<br><span style="color:var(--wp--preset--color--blue)">Waterproofing Authority</span></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"rgba(255,255,255,0.85)"}}} -->
		<p style="font-size:1.125rem;color:rgba(255,255,255,0.85)">From design through to defect resolution.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"wi-hero-cta-row","style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)","margin":{"top":"var(--wp--preset--spacing--sm)"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group wi-hero-cta-row is-layout-flex is-vertical-alignment-center" style="margin-top:var(--wp--preset--spacing--sm)">

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"cta-button","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}},"typography":{"fontWeight":"700","fontSize":"1rem"}},"backgroundColor":"gold","textColor":"white"} -->
				<div class="wp-block-button cta-button"><a class="wp-block-button__link cta-button has-white-color has-gold-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px;font-weight:700;font-size:1rem">Get Expert Advice →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"wi-hero-trust","style":{"color":{"text":"rgba(255,255,255,0.6)"},"typography":{"fontSize":"0.875rem"}}} -->
			<p class="wi-hero-trust" style="color:rgba(255,255,255,0.6);font-size:0.875rem">NATA Accredited&nbsp;&nbsp;·&nbsp;&nbsp;AIW Member</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
