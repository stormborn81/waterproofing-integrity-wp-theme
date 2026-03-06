<?php
/**
 * Pattern: Project Types Grid — Flip Cards
 * Slug: waterproofing-integrity/project-types-grid
 *
 * 8 CSS 3D flip cards on Navy gradient background.
 * Front: Gold icon + title + "Hover to learn more".
 * Back: Blue bg + title + 2-sentence description.
 * Touch support via tabindex and :focus-within (JS in theme.js handles tap-away).
 * CSS classes: .wi-flip-card, .wi-flip-card__inner, .wi-flip-card__front, .wi-flip-card__back
 * (defined in style.css).
 *
 * SESSION 3 PATTERN — included here but front-page.html will reference it in Session 3.
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

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Sectors We Serve</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.7)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center" style="color:rgba(255,255,255,0.7);margin-bottom:var(--wp--preset--spacing--xl)">Independent waterproofing advice across every building sector in Australia.</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<div class="wi-flip-cards-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px">

			<!-- Multi-Residential -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Multi-Residential sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Multi-Residential</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Multi-Residential</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Apartment towers, podiums, balconies, and wet areas. We manage waterproofing risk from design through practical completion.</span>
					</div>
				</div>
			</div>

			<!-- Aged Care -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Aged Care sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Aged Care</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Aged Care</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Retirement living and care facilities demand zero tolerance for moisture-related defects. We ensure compliant, durable outcomes.</span>
					</div>
				</div>
			</div>

			<!-- Infrastructure -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Infrastructure sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Infrastructure</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Infrastructure</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Bridges, tunnels, retaining walls, and below-grade structures. High-risk waterproofing where failure is not an option.</span>
					</div>
				</div>
			</div>

			<!-- Hospitals -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Hospitals sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Hospitals</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Hospitals</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Health facilities and operating theatres require infection-control-grade waterproofing. We deliver solutions to clinical standards.</span>
					</div>
				</div>
			</div>

			<!-- Education -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Education sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Education</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Education</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Schools, universities, and TAFEs across Australia. Long-life waterproofing protecting learning environments for decades.</span>
					</div>
				</div>
			</div>

			<!-- Commercial -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Commercial sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Commercial</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Commercial</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Office towers and mixed-use developments. Independent oversight protecting your asset from Day 1 through to final completion.</span>
					</div>
				</div>
			</div>

			<!-- Community -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Community sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Community</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Community</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Recreation centres and aquatic facilities. High-use, wet-area environments with the most demanding waterproofing requirements.</span>
					</div>
				</div>
			</div>

			<!-- Residential -->
			<div class="wi-flip-card" tabindex="0" role="button" aria-label="Residential sector — hover or press to see details">
				<div class="wi-flip-card__inner">
					<div class="wi-flip-card__front" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Residential</span>
						<span style="font-size:0.8125rem;color:rgba(255,255,255,0.55)">Hover to learn more</span>
					</div>
					<div class="wi-flip-card__back" style="background:var(--wp--preset--color--blue);border-radius:8px;padding:32px 24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:180px;gap:12px">
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:1.0625rem;color:#fff">Residential</span>
						<span style="font-size:0.9rem;color:rgba(255,255,255,0.9);line-height:1.5">Luxury residential and premium townhouses. Protect significant private assets with independent inspection and testing.</span>
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
