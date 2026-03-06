<?php
/**
 * Pattern: About — Memberships & Accreditations
 * Slug: waterproofing-integrity/about-memberships
 *
 * Light Grey bg — NATA, AIW, MBA NSW.
 * Logo placeholder box + description for each.
 * Replace placeholder boxes with actual logo images via WordPress media library.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'About — Memberships & Accreditations', 'waterproofing-integrity' ),
	'description' => __( 'NATA, AIW, and MBA NSW membership cards with logo placeholders.', 'waterproofing-integrity' ),
	'keywords'    => [ 'about', 'memberships', 'accreditations', 'nata', 'aiw', 'mba' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-memberships","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-memberships" style="background:var(--wp--preset--color--light-grey);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Accreditations &amp; Memberships</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">The credentials that underpin every inspection, test, and report we produce.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- NATA -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg);text-align:center">

					<!-- Logo placeholder — replace with NATA logo via WordPress media library -->
					<!-- wp:html -->
					<div style="width:160px;height:80px;background:var(--wp--preset--color--light-grey);border-radius:6px;display:flex;align-items:center;justify-content:center;margin:0 auto var(--wp--preset--spacing--lg) auto;border:1px dashed var(--wp--preset--color--border)">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.75rem;color:var(--wp--preset--color--muted);letter-spacing:0.05em;text-transform:uppercase">NATA Logo</span>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">NATA Accredited</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
					<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.65">National Association of Testing Authorities — Australia&#8217;s peak body for accrediting testing, inspection, and calibration. Our NATA accreditation means every test result we issue carries internationally recognised authority.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- AIW -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg);text-align:center">

					<!-- Logo placeholder — replace with AIW logo via WordPress media library -->
					<!-- wp:html -->
					<div style="width:160px;height:80px;background:var(--wp--preset--color--light-grey);border-radius:6px;display:flex;align-items:center;justify-content:center;margin:0 auto var(--wp--preset--spacing--lg) auto;border:1px dashed var(--wp--preset--color--border)">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.75rem;color:var(--wp--preset--color--muted);letter-spacing:0.05em;text-transform:uppercase">AIW Logo</span>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">AIW Member</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
					<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.65">Australian Institute of Waterproofing — the professional body representing the waterproofing industry in Australia. AIW membership demonstrates our commitment to industry standards, continuing education, and ethical practice.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- MBA NSW -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg);text-align:center">

					<!-- Logo placeholder — replace with MBA NSW logo via WordPress media library -->
					<!-- wp:html -->
					<div style="width:160px;height:80px;background:var(--wp--preset--color--light-grey);border-radius:6px;display:flex;align-items:center;justify-content:center;margin:0 auto var(--wp--preset--spacing--lg) auto;border:1px dashed var(--wp--preset--color--border)">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.75rem;color:var(--wp--preset--color--muted);letter-spacing:0.05em;text-transform:uppercase">MBA NSW Logo</span>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">MBA NSW</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
					<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.65">Master Builders Association NSW — membership affirms our alignment with the standards and professional expectations of the New South Wales construction industry, reinforcing the credibility of our advisory practice across the sector.</p>
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
