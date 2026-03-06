<?php
/**
 * Pattern: About — Process Steps
 * Slug: waterproofing-integrity/about-process-steps
 *
 * Light Grey bg — 01-05 vertical timeline.
 * Gold number circles — Blue vertical connector line between steps.
 *
 * TODO: Replace step titles and descriptions with copy from src/pages/About.tsx.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'About — Process Steps', 'waterproofing-integrity' ),
	'description' => __( '5-step vertical timeline on light grey with gold number circles and blue connector line.', 'waterproofing-integrity' ),
	'keywords'    => [ 'about', 'process', 'steps', 'timeline', 'how we work' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-process-steps","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-process-steps" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">How We Work</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--2xl)"}}}} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--2xl)">A transparent, structured process from first contact to final sign-off.</p>
		<!-- /wp:paragraph -->

		<!-- TODO: Replace step titles and descriptions with copy from About.tsx — process section -->
		<!-- wp:html -->
		<div style="position:relative;display:flex;flex-direction:column;gap:0">

			<!-- Vertical blue connector line -->
			<div style="position:absolute;left:27px;top:54px;bottom:54px;width:2px;background:var(--wp--preset--color--blue);z-index:0" aria-hidden="true"></div>

			<!-- Step 01 -->
			<div style="display:flex;gap:24px;align-items:flex-start;position:relative;z-index:1;padding-bottom:40px">
				<div style="flex-shrink:0;width:56px;height:56px;border-radius:50%;background:var(--wp--preset--color--gold);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:800;font-size:1rem;color:var(--wp--preset--color--navy)">01</div>
				<div style="padding-top:12px">
					<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.125rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Initial Consultation</p>
					<p style="font-size:0.9375rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.65">We meet with you to understand your project scope, programme, risk profile, and what you need from an independent waterproofing adviser. No obligation — just a clear conversation.</p>
				</div>
			</div>

			<!-- Step 02 -->
			<div style="display:flex;gap:24px;align-items:flex-start;position:relative;z-index:1;padding-bottom:40px">
				<div style="flex-shrink:0;width:56px;height:56px;border-radius:50%;background:var(--wp--preset--color--gold);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:800;font-size:1rem;color:var(--wp--preset--color--navy)">02</div>
				<div style="padding-top:12px">
					<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.125rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Scope of Works</p>
					<p style="font-size:0.9375rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.65">We prepare a tailored scope of works covering design review, inspection stages, testing requirements, and reporting deliverables. Fixed-fee or schedule-of-rates — agreed before we start.</p>
				</div>
			</div>

			<!-- Step 03 -->
			<div style="display:flex;gap:24px;align-items:flex-start;position:relative;z-index:1;padding-bottom:40px">
				<div style="flex-shrink:0;width:56px;height:56px;border-radius:50%;background:var(--wp--preset--color--gold);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:800;font-size:1rem;color:var(--wp--preset--color--navy)">03</div>
				<div style="padding-top:12px">
					<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.125rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Design Review</p>
					<p style="font-size:0.9375rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.65">Our team reviews or prepares independent waterproofing specifications, checking compliance with AS 4654 and AS 3740, adequacy of product selection, and completeness of detail at all interfaces and penetrations.</p>
				</div>
			</div>

			<!-- Step 04 -->
			<div style="display:flex;gap:24px;align-items:flex-start;position:relative;z-index:1;padding-bottom:40px">
				<div style="flex-shrink:0;width:56px;height:56px;border-radius:50%;background:var(--wp--preset--color--gold);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:800;font-size:1rem;color:var(--wp--preset--color--navy)">04</div>
				<div style="padding-top:12px">
					<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.125rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Construction Oversight</p>
					<p style="font-size:0.9375rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.65">Our inspectors attend site at each agreed stage to verify installation against specification. A written inspection report with photographic evidence is issued within 24 hours of each visit.</p>
				</div>
			</div>

			<!-- Step 05 -->
			<div style="display:flex;gap:24px;align-items:flex-start;position:relative;z-index:1">
				<div style="flex-shrink:0;width:56px;height:56px;border-radius:50%;background:var(--wp--preset--color--gold);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:800;font-size:1rem;color:var(--wp--preset--color--navy)">05</div>
				<div style="padding-top:12px">
					<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.125rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Final Sign-Off</p>
					<p style="font-size:0.9375rem;color:var(--wp--preset--color--muted);margin:0;line-height:1.65">NATA-accredited commissioning tests are conducted on completion. We issue a final waterproofing certificate confirming all works meet specification — a document your insurer, certifier, and purchasers can rely on.</p>
				</div>
			</div>

		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
