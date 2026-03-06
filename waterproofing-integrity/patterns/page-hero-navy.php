<?php
/**
 * Pattern: Page Hero — Navy (Reusable Inner-Page Hero)
 * Slug: waterproofing-integrity/page-hero-navy
 *
 * Reusable Navy gradient hero for all inner pages.
 * Contains placeholder H1, subheading, and optional CTA button.
 * Editor replaces H1 and subheading copy per page.
 *
 * Used on: Services, About, Contact, Case Studies, Blog archive, and more.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Page Hero — Navy', 'waterproofing-integrity' ),
	'description' => __( 'Reusable navy gradient hero for inner pages — replace H1 and subheading per page.', 'waterproofing-integrity' ),
	'keywords'    => [ 'hero', 'inner page', 'navy', 'page header' ],
	'blockTypes'  => [ 'core/group' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-page-hero","style":{"color":{"gradient":"linear-gradient(135deg,hsla(218,47%,16%,0.97) 0%,hsla(218,47%,22%,0.95) 100%)"},"spacing":{"padding":{"top":"96px","bottom":"64px","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group wi-page-hero" style="background:linear-gradient(135deg,hsla(218,47%,16%,0.97) 0%,hsla(218,47%,22%,0.95) 100%);padding-top:96px;padding-right:var(--wp--preset--spacing--md);padding-bottom:64px;padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.15","fontSize":"clamp(28px,4vw,48px)"},"color":{"text":"#ffffff"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-weight:800;line-height:1.15;font-size:clamp(28px,4vw,48px)">Page Title Goes Here</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"rgba(255,255,255,0.8)"}}} -->
		<p class="has-text-align-center" style="font-size:1.125rem;color:rgba(255,255,255,0.8);max-width:600px;margin-left:auto;margin-right:auto">Supporting subheading copy goes here. Keep it to one or two short sentences.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--sm)"}}}} -->
		<div class="wp-block-buttons is-layout-flex is-content-justification-center">
			<!-- wp:button {"className":"cta-button","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontWeight":"700","fontSize":"1rem"}},"backgroundColor":"gold","textColor":"navy"} -->
			<div class="wp-block-button cta-button"><a class="wp-block-button__link cta-button has-navy-color has-gold-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-weight:700;font-size:1rem">Get Expert Advice</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
