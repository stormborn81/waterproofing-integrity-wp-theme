<?php
/**
 * Pattern: CTA Banner
 * Slug: waterproofing-integrity/cta-banner
 *
 * Reusable Navy CTA strip — used on homepage and inner pages.
 * Gold "Get Expert Advice" button (.cta-button) + phone tel: link (.tel-link).
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'CTA Banner', 'waterproofing-integrity' ),
	'description' => __( 'Navy background CTA strip with Get Expert Advice button and phone number.', 'waterproofing-integrity' ),
	'keywords'    => [ 'cta', 'call to action', 'contact', 'banner' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-cta-banner","style":{"color":{"background":"var(--wp--preset--color--navy)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-cta-banner" style="background:var(--wp--preset--color--navy);padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Ready to Protect Your Project?</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.8)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
		<p class="has-text-align-center" style="color:rgba(255,255,255,0.8);margin-bottom:var(--wp--preset--spacing--lg)">Independent waterproofing advice you can trust. Speak with a specialist today.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)"}}} -->
		<div class="wp-block-buttons is-layout-flex is-content-justification-center">

			<!-- wp:button {"className":"cta-button","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontWeight":"700","fontSize":"1rem"}},"backgroundColor":"gold","textColor":"navy"} -->
			<div class="wp-block-button cta-button"><a class="wp-block-button__link cta-button has-navy-color has-gold-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-weight:700;font-size:1rem">Get Expert Advice</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"","style":{"border":{"radius":"8px","width":"2px","color":"rgba(255,255,255,0.5)"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"30px","right":"30px"}},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link tel-link has-white-color has-text-color wp-element-button" href="tel:1300025944" style="border-radius:8px;border:2px solid rgba(255,255,255,0.5);padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px;font-weight:600;font-size:1rem;color:#fff;background:transparent">Call 1300 025 944</a></div>
			<!-- /wp:button -->

		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
