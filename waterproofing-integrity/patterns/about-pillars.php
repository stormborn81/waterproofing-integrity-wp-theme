<?php
/**
 * Pattern: About — Pillars
 * Slug: waterproofing-integrity/about-pillars
 *
 * Light Grey bg — 3 cards: Independence (ShieldCheck), Authority (Award),
 * Confidence (CheckCircle).
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'About — Pillars', 'waterproofing-integrity' ),
	'description' => __( '3 pillar cards on light grey: Independence, Authority, Confidence.', 'waterproofing-integrity' ),
	'keywords'    => [ 'about', 'pillars', 'independence', 'authority', 'confidence', 'values' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-pillars","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-pillars" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Our Three Pillars</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">Every engagement we undertake is built on these principles.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Pillar 1: Independence -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg);text-align:center">

					<!-- wp:html -->
					<div style="width:64px;height:64px;background:var(--wp--preset--color--light-grey);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px auto">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;font-size:1.25rem;margin-bottom:var(--wp--preset--spacing--sm)">Independence</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
					<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.65">We hold no commercial agreements with any waterproofing installer, applicator, or manufacturer. Our advice is conflict-free, always driven by what is technically correct for your project.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Pillar 2: Authority -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg);text-align:center">

					<!-- wp:html -->
					<div style="width:64px;height:64px;background:var(--wp--preset--color--light-grey);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px auto">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;font-size:1.25rem;margin-bottom:var(--wp--preset--spacing--sm)">Authority</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
					<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.65">NATA-accredited laboratory, AIW membership, and a track record of court-accepted expert testimony. Our credentials ensure every report we produce carries the technical and legal weight it needs.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Pillar 3: Confidence -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg);text-align:center">

					<!-- wp:html -->
					<div style="width:64px;height:64px;background:var(--wp--preset--color--light-grey);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px auto">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;font-size:1.25rem;margin-bottom:var(--wp--preset--spacing--sm)">Confidence</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
					<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.65">10,000+ inspections, 750+ design reviews, and 2,500+ completed projects have given our team an unmatched depth of practical waterproofing knowledge that no installer-affiliated consultant can replicate.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
',
];
