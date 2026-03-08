<?php
/**
 * Pattern: Contact — FAQ Accordion
 * Slug: waterproofing-integrity/contact-faq-accordion
 *
 * Light Grey bg — 8 FAQ Q&As from Loveable Contact.tsx.
 * CSS-only accordion using native <details>/<summary> elements.
 * No JavaScript. All styles in style.css.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Contact — FAQ Accordion', 'waterproofing-integrity' ),
	'description' => __( '8 FAQ items on light grey background using CSS-only details/summary accordion.', 'waterproofing-integrity' ),
	'keywords'    => [ 'contact', 'faq', 'accordion', 'questions', 'answers' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-faq","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group wi-faq" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--xl)">Common Questions</h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<div class="wi-faq-list">

			<details>
				<summary>How quickly will someone get back to me?</summary>
				<div class="wi-faq-body">
					<p>Our SLA is under 4 hours during business hours. Most enquiries receive a call within 2 hours. After-hours submissions are actioned first thing the next business day.</p>
				</div>
			</details>

			<details>
				<summary>Do you work nationally?</summary>
				<div class="wi-faq-body">
					<p>Yes. We have offices in Sydney, Melbourne, and Brisbane with specialists covering all states and territories.</p>
				</div>
			</details>

			<details>
				<summary>What does an initial consultation involve?</summary>
				<div class="wi-faq-body">
					<p>We will discuss your project, understand the scope, and recommend the right service, whether that is a design review, inspection program, testing, or defect assessment. There is no cost or obligation for the initial conversation.</p>
				</div>
			</details>

			<details>
				<summary>Do you provide waterproofing installation?</summary>
				<div class="wi-faq-body">
					<p>No. We are 100% independent consultants. We design, inspect, test, and advise. We never install. That independence is what makes our advice trustworthy.</p>
				</div>
			</details>

			<details>
				<summary>What size projects do you work on?</summary>
				<div class="wi-faq-body">
					<p>Everything from single-dwelling remediation to multi-tower developments. Our client base includes tier-1 builders, major developers, and individual asset owners.</p>
				</div>
			</details>

			<details>
				<summary>What accreditations do you hold?</summary>
				<div class="wi-faq-body">
					<p>We are NATA accredited for waterproofing testing and members of the Australian Institute of Waterproofing (AIW). Our team includes qualified building inspectors and registered engineers.</p>
				</div>
			</details>

			<details>
				<summary>How are your fees structured?</summary>
				<div class="wi-faq-body">
					<p>Fees depend on scope, complexity, and service type. We provide a clear proposal with fixed pricing before any work begins. No hidden costs.</p>
				</div>
			</details>

			<details>
				<summary>Can I send you plans or documents before our call?</summary>
				<div class="wi-faq-body">
					<p>Absolutely. After submitting the form, you will receive a confirmation email with instructions for sharing project documentation securely.</p>
				</div>
			</details>

		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
