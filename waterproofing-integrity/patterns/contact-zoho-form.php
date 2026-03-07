<?php
/**
 * Pattern: Contact — Zoho Form
 * Slug: waterproofing-integrity/contact-zoho-form
 *
 * Navy gradient bg — 'Get Expert Advice' H2 White — subheading White 80%.
 * White card (8px radius, p-8, max-width 800px, centred) containing a
 * Custom HTML block with a clearly labelled Zoho shortcode placeholder.
 *
 * Admin replaces the placeholder comment with the Zoho shortcode after
 * installing the Zoho Forms plugin:
 *   [zohoforms id='XXXXXXXX' width='100%']
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Contact — Zoho Form', 'waterproofing-integrity' ),
	'description' => __( 'Navy gradient section with centred white form card containing Zoho shortcode placeholder.', 'waterproofing-integrity' ),
	'keywords'    => [ 'contact', 'form', 'zoho', 'cta' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-contact-form","style":{"color":{"gradient":"linear-gradient(135deg,var(--wp--preset--color--navy) 0%,#152d4a 100%)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-contact-form" style="background:linear-gradient(135deg,var(--wp--preset--color--navy) 0%,#152d4a 100%);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;margin-bottom:0.5rem">Get Expert Advice</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.8)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center" style="color:rgba(255,255,255,0.8);margin-bottom:var(--wp--preset--spacing--xl)">Tell us about your project. We&#8217;ll have the right specialist in touch within 4 hours.</p>
		<!-- /wp:paragraph -->

		<!-- White form card -->
		<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--xl)","right":"var(--wp--preset--spacing--xl)"}}}} -->
		<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl)">

			<!-- wp:html -->
			<!-- ZOHO FORM: Replace this comment with your Zoho shortcode.
			     Example: [zohoforms id=\'XXXXXXXX\' width=\'100%\']
			     Install the Zoho Forms plugin first.
			     Get the shortcode from: Zoho Forms > Web Forms > Embed > WordPress Shortcode -->
			<p style="text-align:center;color:var(--wp--preset--color--muted);font-size:0.9375rem;padding:40px 0">
				<strong style="display:block;margin-bottom:8px;color:var(--wp--preset--color--navy)">Zoho Form Placeholder</strong>
				Replace this block with your Zoho Forms shortcode after installing the Zoho Forms plugin.
			</p>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
