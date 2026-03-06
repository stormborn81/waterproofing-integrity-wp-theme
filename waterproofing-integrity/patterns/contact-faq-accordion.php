<?php
/**
 * Pattern: Contact — FAQ Accordion
 * Slug: waterproofing-integrity/contact-faq-accordion
 *
 * Light Grey bg — 8 FAQ Q&As.
 * CSS-only accordion using native <details>/<summary> elements.
 * No JavaScript dependency.
 *
 * TODO: Replace Q&A copy with questions and answers from src/pages/Contact.tsx.
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

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Frequently Asked Questions</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">Everything you need to know before engaging Waterproofing Integrity.</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<style>
			.wi-faq details {
				background: #ffffff;
				border-radius: 8px;
				border: 1px solid var(--wp--preset--color--border);
				margin-bottom: 8px;
				overflow: hidden;
			}
			.wi-faq details[open] {
				border-color: var(--wp--preset--color--blue);
			}
			.wi-faq summary {
				display: flex;
				justify-content: space-between;
				align-items: center;
				gap: 16px;
				padding: 20px 24px;
				font-family: var(--wp--preset--font-family--raleway);
				font-weight: 700;
				font-size: 1rem;
				color: var(--wp--preset--color--navy);
				cursor: pointer;
				list-style: none;
				-webkit-user-select: none;
				user-select: none;
			}
			.wi-faq summary::-webkit-details-marker { display: none; }
			.wi-faq summary::after {
				content: "";
				display: block;
				flex-shrink: 0;
				width: 20px;
				height: 20px;
				background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='%23c9a84c' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
				background-repeat: no-repeat;
				background-size: contain;
				transition: transform 0.2s ease;
			}
			.wi-faq details[open] summary::after {
				transform: rotate(180deg);
			}
			.wi-faq .wi-faq-body {
				padding: 0 24px 20px 24px;
				font-size: 0.9375rem;
				color: var(--wp--preset--color--muted);
				line-height: 1.7;
			}
		</style>

		<!-- TODO: Replace all 8 Q&A pairs with copy from src/pages/Contact.tsx -->
		<div>

			<details>
				<summary>How quickly can you mobilise for an inspection?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">For standard inspection engagements, we typically mobilise within 2&#8211;5 business days of written instruction. For urgent matters &#8212; such as time-critical construction milestones or active defect disputes &#8212; please call us directly on <a href="tel:1300025944" class="tel-link" style="color:var(--wp--preset--color--blue);font-weight:600">1300 025 944</a> and we will make every effort to accommodate your programme.</p>
				</div>
			</details>

			<details>
				<summary>Do you work nationally across all Australian states?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">Yes. Waterproofing Integrity operates nationally, with offices in Sydney, Newcastle, Brisbane, and Melbourne. Our field technicians conduct inspections and testing across every state and territory. For remote or regional sites, please contact us to discuss logistics and mobilisation arrangements.</p>
				</div>
			</details>

			<details>
				<summary>What is a NATA-accredited test and why does it matter?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">NATA (National Association of Testing Authorities) is Australia&#8217;s peak body for accrediting testing, inspection, and calibration facilities. A NATA-accredited test result carries internationally recognised authority. For waterproofing, this means our flood tests, electric impedance tests, and other methodologies produce certificates that are accepted by building certifiers, insurers, and courts &#8212; without question.</p>
				</div>
			</details>

			<details>
				<summary>What is the difference between a waterproofing inspection and a waterproofing test?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">An inspection is a visual and physical assessment of waterproofing installation against the project specification &#8212; checking substrate preparation, membrane application, detailing at penetrations and upstands, and compliance with AS 4654 or AS 3740. A test uses instrumented methodology (flood testing, electric impedance, nuclear isotope moisture scanning, or infrared thermography) to objectively verify membrane integrity and detect defects not visible to the naked eye. Most projects benefit from both.</p>
				</div>
			</details>

			<details>
				<summary>Do you carry out remediation works, or is WI advisory only?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">Waterproofing Integrity is strictly an independent advisory practice. We do not install, supply, or carry out waterproofing works. This is the foundation of our independence &#8212; we have no commercial interest in any remediation outcome. We will, however, manage the remediation process on your behalf: scoping the works, tendering to approved contractors, and inspecting and certifying the completed remediation.</p>
				</div>
			</details>

			<details>
				<summary>How much does an independent waterproofing inspection cost?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">Fees vary depending on project size, location, number of inspection stages, and testing requirements. We offer both fixed-fee engagements (for clearly scoped projects) and schedule-of-rates arrangements (for ongoing or larger programmes). Contact us with your project details and we will provide a tailored, obligation-free fee proposal within one business day.</p>
				</div>
			</details>

			<details>
				<summary>Can Waterproofing Integrity provide expert witness reports?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">Yes. David Previte and senior members of our team are accepted expert witnesses in waterproofing disputes before NCAT, VCAT, QCAT, and the Federal Court of Australia. Our expert reports are prepared in accordance with the applicable expert evidence guidelines in each jurisdiction. Please contact us directly to discuss your matter and confirm availability.</p>
				</div>
			</details>

			<details>
				<summary>What information do I need to provide to get a quote?</summary>
				<div class="wi-faq-body">
					<p style="margin:0">The more context you can provide, the more accurate our proposal will be. Helpful information includes: project type and size (e.g. residential apartment, commercial podium), location, programme stage, the waterproofing areas involved (e.g. bathrooms, balconies, podium, roof), whether you already have a waterproofing specification, and your preferred start date. Fill in the enquiry form on this page and we will come back to you within 2 business hours.</p>
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
