<?php
/**
 * Pattern: Testimonials — Google Reviews
 * Slug: waterproofing-integrity/testimonials
 *
 * White bg — 3 hardcoded Google review cards.
 * Google Reviews header with 5.0 rating and star icons.
 * AggregateRating JSON-LD schema block.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Testimonials — Google Reviews', 'waterproofing-integrity' ),
	'description' => __( '3 hardcoded Google review cards with 5-star rating header and AggregateRating JSON-LD.', 'waterproofing-integrity' ),
	'keywords'    => [ 'reviews', 'testimonials', 'google', 'social proof' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-reviews","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-reviews has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- Google Reviews Header -->
		<!-- wp:html -->
		<div style="display:flex;flex-direction:column;align-items:center;gap:8px;margin-bottom:48px">
			<div style="display:flex;align-items:center;gap:12px">
				<!-- Google G icon -->
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="36" height="36" aria-hidden="true">
					<path fill="#4285F4" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
					<path fill="#34A853" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
					<path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
					<path fill="#EA4335" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
				</svg>
				<span style="font-family:var(--wp--preset--font-family--raleway);font-size:2.5rem;font-weight:800;color:var(--wp--preset--color--navy)">5.0</span>
				<span style="display:flex;gap:2px;color:var(--wp--preset--color--gold);font-size:1.5rem" aria-label="5 stars">★★★★★</span>
			</div>
			<p style="font-size:1rem;color:var(--wp--preset--color--muted);margin:0">Rated 5 Stars on Google</p>
		</div>
		<!-- /wp:html -->

		<!-- Review Cards -->
		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Review 1: D A -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
						<div style="width:44px;height:44px;border-radius:50%;background:var(--wp--preset--color--navy);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff;flex-shrink:0">DA</div>
						<div>
							<p style="margin:0;font-weight:700;color:var(--wp--preset--color--navy);font-size:0.9375rem">D A</p>
							<span style="color:var(--wp--preset--color--gold);font-size:1rem" aria-label="5 stars">★★★★★</span>
						</div>
					</div>
					<p style="margin:0;font-size:0.9375rem;color:var(--wp--preset--color--muted);line-height:1.6">"Outstanding service from start to finish. The team at Waterproofing Integrity provided thorough independent inspections that gave us complete confidence in our project. Their detailed reports were invaluable."</p>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Review 2: Salar Mohseni -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
						<div style="width:44px;height:44px;border-radius:50%;background:var(--wp--preset--color--blue);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff;flex-shrink:0">SM</div>
						<div>
							<p style="margin:0;font-weight:700;color:var(--wp--preset--color--navy);font-size:0.9375rem">Salar Mohseni</p>
							<span style="color:var(--wp--preset--color--gold);font-size:1rem" aria-label="5 stars">★★★★★</span>
						</div>
					</div>
					<p style="margin:0;font-size:0.9375rem;color:var(--wp--preset--color--muted);line-height:1.6">"Waterproofing Integrity\'s independence is what sets them apart. As a developer, having an advisor who has no relationship with our contractors gives us genuine peace of mind. Highly recommend."</p>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Review 3: Jamie Yiw -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
						<div style="width:44px;height:44px;border-radius:50%;background:var(--wp--preset--color--navy);display:flex;align-items:center;justify-content:center;font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff;flex-shrink:0">JY</div>
						<div>
							<p style="margin:0;font-weight:700;color:var(--wp--preset--color--navy);font-size:0.9375rem">Jamie Yiw</p>
							<span style="color:var(--wp--preset--color--gold);font-size:1rem" aria-label="5 stars">★★★★★</span>
						</div>
					</div>
					<p style="margin:0;font-size:0.9375rem;color:var(--wp--preset--color--muted);line-height:1.6">"Their NATA-accredited testing service identified membrane failures that would have cost hundreds of thousands to fix post-completion. Worth every dollar. The team is professional, prompt, and thorough."</p>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- AggregateRating JSON-LD -->
	<!-- wp:html -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "LocalBusiness",
		"name": "Waterproofing Integrity",
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "5.0",
			"reviewCount": "3",
			"bestRating": "5",
			"worstRating": "1"
		}
	}
	</script>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
',
];
