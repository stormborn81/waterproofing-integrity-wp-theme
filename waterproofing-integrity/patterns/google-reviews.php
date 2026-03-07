<?php
/**
 * Pattern: Google Reviews
 * Slug: waterproofing-integrity/google-reviews
 *
 * White bg — left-aligned Google rating header — 3 equal-height review cards.
 * Cards: #F2F2F2 bg, no border, navy avatar circle, name+date row, 5 gold stars, navy review text.
 * Real reviews: D A, Salar Mohseni, Jamie Yiw.
 * AggregateRating JSON-LD schema.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Google Reviews', 'waterproofing-integrity' ),
	'description' => __( '3 hardcoded Google review cards with 5-star rating header and AggregateRating JSON-LD.', 'waterproofing-integrity' ),
	'keywords'    => [ 'reviews', 'testimonials', 'google', 'social proof' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-reviews","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-reviews has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- Google Reviews Header — left-aligned row -->
		<!-- wp:html -->
		<div class="wi-reviews-header">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32" aria-hidden="true" focusable="false">
				<path fill="#4285F4" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
				<path fill="#34A853" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
				<path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
				<path fill="#EA4335" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
			</svg>
			<span class="wi-reviews-rating">5.0</span>
			<span class="wi-reviews-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
			<span class="wi-reviews-source">5.0 on Google</span>
		</div>
		<!-- /wp:html -->

		<!-- Review Cards -->
		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Review 1: D A -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-review-card">
					<div class="wi-review-author">
						<div class="wi-review-avatar" aria-hidden="true">DA</div>
						<div class="wi-review-author-info">
							<p class="wi-review-name">D A</p>
							<p class="wi-review-date">2 months ago</p>
						</div>
					</div>
					<div class="wi-review-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
					<p class="wi-review-text">David and his team provided an independent, evidence-based assessment that stood out for its integrity, measured analysis, and proportionate articulation. Although I approached them on short notice and in difficult circumstances, they accepted my request and delivered exceptional support. Their assistance has been catalytic in my ongoing legal efforts and is likely to be a genuine game changer. I wholeheartedly endorse this company and sincerely appreciate their help.</p>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->

			<!-- Review 2: Salar Mohseni -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-review-card">
					<div class="wi-review-author">
						<div class="wi-review-avatar" aria-hidden="true">SM</div>
						<div class="wi-review-author-info">
							<p class="wi-review-name">Salar Mohseni</p>
							<p class="wi-review-date">2 months ago</p>
						</div>
					</div>
					<div class="wi-review-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
					<p class="wi-review-text">I had a great experience in using David\'s technical expertise and getting professional advice on waterproofing best practices. David was very collaborative and took genuine time in explaining what to look out for.</p>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->

			<!-- Review 3: Jamie Yiw -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-review-card">
					<div class="wi-review-author">
						<div class="wi-review-avatar" aria-hidden="true">JY</div>
						<div class="wi-review-author-info">
							<p class="wi-review-name">Jamie Yiw</p>
							<p class="wi-review-date">3 months ago</p>
						</div>
					</div>
					<div class="wi-review-stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
					<p class="wi-review-text">They preformed a water proofing inspection on our new build in Brisbane. Very detailed report which proved very useful. I would recommend. Thanks Kieran</p>
				</div>
				<!-- /wp:html -->
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
