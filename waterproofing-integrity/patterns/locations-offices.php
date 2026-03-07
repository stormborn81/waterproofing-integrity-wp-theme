<?php
/**
 * Pattern: Locations — 4 Office Cards
 * Slug: waterproofing-integrity/locations-offices
 *
 * White bg — 4-col desktop / 1-col mobile.
 * Section header: "NATIONAL COVERAGE" label (blue), heading left + phone right.
 * White card bg, 1px #E0E0E0 border — Gold MapPin SVG + city name inline.
 * Sydney card: "HEAD OFFICE" gold badge inline after city name.
 *
 * Card order per card:
 *   1. Gold map pin + city name (+ HEAD OFFICE badge for Sydney)
 *   2. Covering: [region] in blue
 *   3. Street address in muted grey
 *   4. Divider 1px #E0E0E0
 *   5. Email with envelope SVG (muted grey)
 *   6. Phone with phone SVG (muted grey)
 *
 * Melbourne: covering → "Address coming soon" italic → divider → email → phone.
 * Phone numbers use <a href="tel:"> with class .tel-link.
 * Emails use <a href="mailto:">.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Locations — 4 Office Cards', 'waterproofing-integrity' ),
	'description' => __( '4 office location cards: Sydney, Newcastle, Brisbane, Melbourne.', 'waterproofing-integrity' ),
	'keywords'    => [ 'locations', 'offices', 'contact', 'address' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-locations","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-locations has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- Section header: label + heading/phone row -->
		<!-- wp:html -->
		<div class="wi-locations-header">
			<p class="wi-location-label">NATIONAL COVERAGE</p>
			<div class="wi-location-heading-row">
				<h2 class="wi-location-heading">Offices Across Australia</h2>
				<a href="tel:1300025944" class="tel-link wi-location-phone" aria-label="Call 1300 025 944">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13 19.79 19.79 0 0 1 1.65 4.38 2 2 0 0 1 3.63 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					1300 025 944
				</a>
			</div>
		</div>
		<!-- /wp:html -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Sydney (Head Office) -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-office-card">
					<!-- Row 1: map pin + city + badge -->
					<div class="wi-office-city-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F0A500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span class="wi-office-city">Sydney</span>
						<span class="wi-office-badge">HEAD OFFICE</span>
					</div>
					<!-- Row 2: covering -->
					<p class="wi-office-coverage">NSW &amp; ACT</p>
					<!-- Row 3: address -->
					<p class="wi-office-address">49C Slough Business Park, 2 Slough Ave, Silverwater NSW 2128</p>
					<!-- Divider -->
					<hr class="wi-office-divider">
					<!-- Row 4: email -->
					<a href="mailto:sales@waterproofingintegrity.com.au" class="wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						sales@waterproofingintegrity.com.au
					</a>
					<!-- Row 5: phone -->
					<a href="tel:1300025944" class="tel-link wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13 19.79 19.79 0 0 1 1.65 4.38 2 2 0 0 1 3.63 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						1300 025 944
					</a>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->

			<!-- Newcastle -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-office-card">
					<!-- Row 1: map pin + city -->
					<div class="wi-office-city-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F0A500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span class="wi-office-city">Newcastle</span>
					</div>
					<!-- Row 2: covering -->
					<p class="wi-office-coverage">Newcastle, Central Coast, Greater Hunter, Tamworth, Port Macquarie</p>
					<!-- Row 3: address -->
					<p class="wi-office-address">13/56 Industrial Drive, Mayfield East NSW 2304</p>
					<!-- Divider -->
					<hr class="wi-office-divider">
					<!-- Row 4: email -->
					<a href="mailto:newcastle@waterproofingintegrity.com.au" class="wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						newcastle@waterproofingintegrity.com.au
					</a>
					<!-- Row 5: phone -->
					<a href="tel:0249265654" class="tel-link wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13 19.79 19.79 0 0 1 1.65 4.38 2 2 0 0 1 3.63 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						02 4926 5654
					</a>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->

			<!-- Brisbane -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-office-card">
					<!-- Row 1: map pin + city -->
					<div class="wi-office-city-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F0A500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span class="wi-office-city">Brisbane</span>
					</div>
					<!-- Row 2: covering -->
					<p class="wi-office-coverage">Brisbane, Gold Coast, Sunshine Coast, Byron Bay &amp; Greater South-East QLD</p>
					<!-- Row 3: address -->
					<p class="wi-office-address">PO Box 12, Cannon Hill QLD 4170</p>
					<!-- Divider -->
					<hr class="wi-office-divider">
					<!-- Row 4: email -->
					<a href="mailto:brisbane@waterproofingintegrity.com.au" class="wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						brisbane@waterproofingintegrity.com.au
					</a>
					<!-- Row 5: phone -->
					<a href="tel:0421003003" class="tel-link wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13 19.79 19.79 0 0 1 1.65 4.38 2 2 0 0 1 3.63 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						0421 003 003
					</a>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:column -->

			<!-- Melbourne -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:html -->
				<div class="wi-office-card">
					<!-- Row 1: map pin + city -->
					<div class="wi-office-city-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F0A500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span class="wi-office-city">Melbourne</span>
					</div>
					<!-- Row 2: covering -->
					<p class="wi-office-coverage">Geelong, Greater Victoria &amp; Tasmania</p>
					<!-- Row 3: address coming soon -->
					<p class="wi-office-address wi-office-address--soon">Address coming soon</p>
					<!-- Divider -->
					<hr class="wi-office-divider">
					<!-- Row 4: email -->
					<a href="mailto:melbourne@waterproofingintegrity.com.au" class="wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						melbourne@waterproofingintegrity.com.au
					</a>
					<!-- Row 5: phone -->
					<a href="tel:1300025944" class="tel-link wi-office-contact-row">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6B7E9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13 19.79 19.79 0 0 1 1.65 4.38 2 2 0 0 1 3.63 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						1300 025 944
					</a>
				</div>
				<!-- /wp:html -->
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
