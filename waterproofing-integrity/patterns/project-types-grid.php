<?php
/**
 * Pattern: Project Types Grid — Flip Cards
 * Slug: waterproofing-integrity/project-types-grid
 *
 * Navy gradient bg — "PROJECT EXPERIENCE" label — "Sectors We Cover" H2.
 * 8 CSS 3D flip cards: 2-col mobile/tablet, 4-col desktop (1024px+).
 * Front: white SVG icon + title + "HOVER TO LEARN MORE".
 * Back: blue bg + title + description.
 * Card style: rgba(255,255,255,0.05) bg, rgba(255,255,255,0.1) border, border-radius 12px.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Project Types Grid — Flip Cards', 'waterproofing-integrity' ),
	'description' => __( '8 CSS 3D flip cards on navy gradient — sectors served by Waterproofing Integrity.', 'waterproofing-integrity' ),
	'keywords'    => [ 'sectors', 'flip cards', 'who we work with', 'project types' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-sectors","style":{"color":{"gradient":"linear-gradient(135deg,var(--wp--preset--color--navy) 0%,#152d4a 100%)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-sectors" style="background:linear-gradient(135deg,var(--wp--preset--color--navy) 0%,#152d4a 100%);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.1em"},"color":{"text":"rgba(255,255,255,0.5)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xs)"}}}} -->
		<p class="has-text-align-center" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;color:rgba(255,255,255,0.5);text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--xs)">PROJECT EXPERIENCE</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;margin-top:0;margin-bottom:var(--wp--preset--spacing--xl)">Sectors We Cover</h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<div class="wi-flip-cards-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px">

			<!-- Multi-Residential -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Multi-Residential sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Multi-Residential</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Multi-Residential</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Apartment towers, podiums, balconies, and wet areas. We manage waterproofing risk from design through practical completion.</span>
					</div>
				</div>
			</div>

			<!-- Aged Care -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Aged Care sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Aged Care</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Aged Care</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Retirement living and care facilities demand zero tolerance for moisture-related defects. We ensure compliant, durable outcomes.</span>
					</div>
				</div>
			</div>

			<!-- Infrastructure -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Infrastructure sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="3" width="16" height="16" rx="2"/><path d="M4 11h16"/><path d="M12 3v8"/><path d="M8 19l-2 3"/><path d="M18 22l-2-3"/><circle cx="8" cy="15" r="1" fill="#ffffff" stroke="none"/><circle cx="16" cy="15" r="1" fill="#ffffff" stroke="none"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Infrastructure</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Infrastructure</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Bridges, tunnels, retaining walls, and below-grade structures. High-risk waterproofing where failure is not an option.</span>
					</div>
				</div>
			</div>

			<!-- Hospitals & Health Care -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Hospitals and Health Care sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Hospitals &amp; Health Care</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Hospitals &amp; Health Care</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Health facilities and operating theatres require infection-control-grade waterproofing. We deliver solutions to clinical standards.</span>
					</div>
				</div>
			</div>

			<!-- Education -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Education sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Education</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Education</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Schools, universities, and TAFEs across Australia. Long-life waterproofing protecting learning environments for decades.</span>
					</div>
				</div>
			</div>

			<!-- Commercial -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Commercial sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Commercial</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Commercial</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Office towers and mixed-use developments. Independent oversight protecting your asset from Day 1 through to final completion.</span>
					</div>
				</div>
			</div>

			<!-- Community Facilities -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Community Facilities sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Community Facilities</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Community Facilities</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Recreation centres and aquatic facilities. High-use, wet-area environments with the most demanding waterproofing requirements.</span>
					</div>
				</div>
			</div>

			<!-- Residential -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Residential sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Residential</span>
						<span style="font-size:0.7rem;letter-spacing:0.08em;color:rgba(255,255,255,0.6);text-transform:uppercase">HOVER TO LEARN MORE</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:160px;gap:10px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1rem;color:#fff">Residential</span>
						<span style="font-size:0.875rem;color:rgba(255,255,255,0.9);line-height:1.5">Luxury residential and premium townhouses. Protect significant private assets with independent inspection and testing.</span>
					</div>
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
