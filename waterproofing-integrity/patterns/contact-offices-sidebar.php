<?php
/**
 * Pattern: Contact — Offices Sidebar
 * Slug: waterproofing-integrity/contact-offices-sidebar
 *
 * Four office cards stacked vertically: Sydney (Head Office), Melbourne,
 * Brisbane, Newcastle. Each card shows city, state, coverage area, phone.
 * Below the cards: email + LinkedIn contact row.
 * All styles via CSS classes — no inline styles.
 *
 * Card row order: city/badge → location → phone → coverage
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Contact — Offices Sidebar', 'waterproofing-integrity' ),
	'description' => __( '4 stacked office cards (Sydney, Melbourne, Brisbane, Newcastle) with email/LinkedIn row below.', 'waterproofing-integrity' ),
	'keywords'    => [ 'contact', 'offices', 'sidebar', 'address', 'phone' ],
	'content'     => '
<!-- wp:group {"className":"wi-offices-sidebar","layout":{"type":"default"}} -->
<div class="wp-block-group wi-offices-sidebar">

	<!-- wp:html -->
	<h3 class="wi-offices-sidebar__heading">Our Offices</h3>
	<div class="wi-office-cards">

		<!-- Sydney (Head Office) -->
		<div class="wi-office-card">
			<div class="wi-office-card__header">
				<span class="wi-office-card__city">Sydney</span>
				<span class="wi-office-card__badge">(Head Office)</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				<span>Sydney, NSW</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.33 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 5.49 5.49l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
				<a href="tel:1300025944" class="tel-link wi-office-card__tel">1300 025 944</a>
			</div>
			<p class="wi-office-card__coverage">Coverage: NSW, ACT</p>
		</div>

		<!-- Melbourne -->
		<div class="wi-office-card">
			<div class="wi-office-card__header">
				<span class="wi-office-card__city">Melbourne</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				<span>Melbourne, VIC</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.33 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 5.49 5.49l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
				<a href="tel:1300025944" class="tel-link wi-office-card__tel">1300 025 944</a>
			</div>
			<p class="wi-office-card__coverage">Coverage: VIC, TAS, SA</p>
		</div>

		<!-- Brisbane -->
		<div class="wi-office-card">
			<div class="wi-office-card__header">
				<span class="wi-office-card__city">Brisbane</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				<span>Brisbane, QLD</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.33 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 5.49 5.49l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
				<a href="tel:1300025944" class="tel-link wi-office-card__tel">1300 025 944</a>
			</div>
			<p class="wi-office-card__coverage">Coverage: QLD</p>
		</div>

		<!-- Newcastle -->
		<div class="wi-office-card">
			<div class="wi-office-card__header">
				<span class="wi-office-card__city">Newcastle</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				<span>Newcastle, NSW</span>
			</div>
			<div class="wi-office-card__row">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.33 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 5.49 5.49l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
				<a href="tel:1300025944" class="tel-link wi-office-card__tel">1300 025 944</a>
			</div>
			<p class="wi-office-card__coverage">Coverage: Newcastle &amp; Hunter</p>
		</div>

	</div>

	<div class="wi-offices-contacts">
		<a href="mailto:info@waterproofingintegrity.com.au" class="wi-offices-contacts__link">
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
			info@waterproofingintegrity.com.au
		</a>
		<a href="https://www.linkedin.com/company/waterproofingintegrity" class="wi-offices-contacts__link" target="_blank" rel="noopener noreferrer">
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
			LinkedIn
		</a>
	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
];
