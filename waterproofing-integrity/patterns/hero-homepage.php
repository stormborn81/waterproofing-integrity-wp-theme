<?php
/**
 * Pattern: Hero — Homepage
 * Slug: waterproofing-integrity/hero-homepage
 *
 * Full-width hero with navy CSS gradient overlay, H1, CTA button, and trust line.
 * Pure CSS gradient — no background image.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Hero — Homepage', 'waterproofing-integrity' ),
	'description' => __( 'Full-width hero with navy gradient, headline, CTA button, and trust line.', 'waterproofing-integrity' ),
	'keywords'    => [ 'hero', 'homepage', 'cta' ],
	'blockTypes'  => [ 'core/group' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-hero","style":{"color":{"gradient":"linear-gradient(135deg,hsla(218,47%,16%,0.92) 0%,hsla(218,47%,24%,0.85) 100%)"},"spacing":{"padding":{"top":"80px","bottom":"64px","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group wi-hero" style="background:linear-gradient(135deg,hsla(218,47%,16%,0.92) 0%,hsla(218,47%,24%,0.85) 100%);min-height:55vh;padding-top:80px;padding-right:var(--wp--preset--spacing--md);padding-bottom:64px;padding-left:var(--wp--preset--spacing--md);display:flex;align-items:center">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(30px,5vw,56px)"},"color":{"text":"#ffffff"}}} -->
		<h1 class="wp-block-heading" style="color:#ffffff;font-weight:800;line-height:1.1;font-size:clamp(30px,5vw,56px)">Australia\'s Independent <span style="color:var(--wp--preset--color--blue)">Waterproofing Authority</span></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"rgba(255,255,255,0.85)"}}} -->
		<p style="font-size:1.125rem;color:rgba(255,255,255,0.85);max-width:560px">From design through to defect resolution.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--sm)"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"cta-button","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontWeight":"700","fontSize":"1rem"}},"backgroundColor":"gold","textColor":"navy"} -->
			<div class="wp-block-button cta-button"><a class="wp-block-button__link cta-button has-navy-color has-gold-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-weight:700;font-size:1rem">Get Expert Advice</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.6)"},"typography":{"fontSize":"0.875rem"}}} -->
		<p style="color:rgba(255,255,255,0.6);font-size:0.875rem">NATA Accredited&nbsp;&nbsp;•&nbsp;&nbsp;AIW Member</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
