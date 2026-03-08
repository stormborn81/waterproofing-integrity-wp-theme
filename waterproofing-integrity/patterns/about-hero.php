<?php
/**
 * Pattern: About Hero
 * Slug: waterproofing-integrity/about-hero
 *
 * Hero for the About page.
 * Background image + dark overlay via CSS, left-aligned content, 1200px constrained.
 * Gold eyebrow label, H1 (white line 1 / blue line 2), description,
 * trust-tag pills with gold checkmark SVGs, primary + secondary CTA buttons.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'About Hero', 'waterproofing-integrity' ),
	'description' => __( 'Hero for the About page with background image, eyebrow, H1, trust tags, and CTA buttons.', 'waterproofing-integrity' ),
	'keywords'    => [ 'about', 'hero', 'page header' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-about-hero","layout":{"type":"default"}} -->
<section class="wp-block-group wi-about-hero">

	<!-- wp:html -->
	<div class="wi-about-hero__inner">

		<p class="wi-about-hero__eyebrow">ABOUT WATERPROOFING INTEGRITY</p>

		<h1 class="wi-about-hero__heading">
			Australia&#8217;s Leading Independent<br>
			<span class="wi-about-hero__heading-blue">Waterproofing Advisors</span>
		</h1>

		<p class="wi-about-hero__desc">We do not install waterproofing. We advise, inspect, test and remediate, independently. From design through to defect resolution.</p>

		<div class="wi-about-hero__tags">
			<span class="wi-about-hero__tag">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11"/></svg>
				NATA Accredited Testing
			</span>
			<span class="wi-about-hero__tag">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11"/></svg>
				10,000+ Inspections Completed
			</span>
			<span class="wi-about-hero__tag">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11"/></svg>
				2,500+ Projects Nationwide
			</span>
		</div>

		<div class="wi-about-hero__cta-row">
			<a href="/contact/" class="cta-button wi-about-hero__btn-primary">
				Get Expert Advice <span class="wi-btn-arrow" aria-hidden="true">&#8594;</span>
			</a>
			<a href="#how-we-help" class="wi-about-hero__btn-secondary">How We Work</a>
		</div>

	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
',
];
