<?php
/**
 * Pattern: Contact Hero
 * Slug: waterproofing-integrity/contact-hero
 *
 * Navy gradient hero for the Contact page.
 * Left-aligned content: H1 "Get Expert Advice", description, trust bar.
 * Dark navy + repeating plus-sign SVG overlay handled entirely in style.css.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Contact Hero', 'waterproofing-integrity' ),
	'description' => __( 'Navy gradient hero with plus-sign texture, left-aligned heading, description, and trust bar.', 'waterproofing-integrity' ),
	'keywords'    => [ 'contact', 'hero', 'navy', 'page header' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-contact-hero","layout":{"type":"default"}} -->
<section class="wp-block-group wi-contact-hero">

	<!-- wp:html -->
	<div class="wi-contact-hero__inner">
		<h1 class="wi-contact-hero__heading">Get Expert Advice</h1>
		<p class="wi-contact-hero__desc">Tell us about your project and we will have the right specialist in touch within 4 hours.</p>
		<p class="wi-contact-hero__trust">NATA Accredited&nbsp;&nbsp;|&nbsp;&nbsp;2,500+ Projects&nbsp;&nbsp;|&nbsp;&nbsp;Independent &amp; Conflict-Free</p>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
',
];
