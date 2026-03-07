<?php
/**
 * Pattern: Sectors — Who We Work With
 * Slug: waterproofing-integrity/sectors-who-we-work-with
 *
 * Navy gradient bg — small white/muted uppercase "WHO WE WORK WITH" label — 3 glassmorphism cards.
 * Cards: icon + gold sector label row, white title (2-line <br>), white 80% description, white Learn More →.
 * Sectors: Builders, Developers, Asset Owners.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Sectors — Who We Work With', 'waterproofing-integrity' ),
	'description' => __( '3 glassmorphism cards on navy gradient — Builders, Developers, Asset Owners.', 'waterproofing-integrity' ),
	'keywords'    => [ 'sectors', 'who we work with', 'builders', 'developers' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-who-we-work-with","style":{"color":{"gradient":"linear-gradient(135deg,var(--wp--preset--color--navy) 0%,#152d4a 100%)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-who-we-work-with" style="background:linear-gradient(135deg,var(--wp--preset--color--navy) 0%,#152d4a 100%);padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- Section label -->
		<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.1em"},"color":{"text":"rgba(255,255,255,0.5)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;color:rgba(255,255,255,0.5);text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--xl)">WHO WE WORK WITH</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Card 1: Builders -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-sector-card","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-sector-card" style="background:rgba(255,255,255,0.05);backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.12);border-radius:12px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg)">

					<!-- wp:html -->
					<div class="wi-sector-card-header">
						<div class="wi-sector-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
						</div>
						<span class="wi-sector-label">BUILDERS</span>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"level":3,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Protect your programme.<br>Reduce rework.</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--lg)"}}}} -->
					<p style="color:rgba(255,255,255,0.8);font-size:0.9375rem;line-height:1.65;margin-top:0;margin-bottom:var(--wp--preset--spacing--lg)">Risk registers, programme delays and defect liability, managed before they escalate.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/sectors/builders/" style="color:#fff;text-decoration:none">Learn More &#8594;</a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Developers -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-sector-card","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-sector-card" style="background:rgba(255,255,255,0.05);backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.12);border-radius:12px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg)">

					<!-- wp:html -->
					<div class="wi-sector-card-header">
						<div class="wi-sector-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
						</div>
						<span class="wi-sector-label">DEVELOPERS</span>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"level":3,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Protect your asset.<br>Reduce your exposure.</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--lg)"}}}} -->
					<p style="color:rgba(255,255,255,0.8);font-size:0.9375rem;line-height:1.65;margin-top:0;margin-bottom:var(--wp--preset--spacing--lg)">Long-term asset protection, warranty periods and portfolio risk, all covered.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/sectors/developers/" style="color:#fff;text-decoration:none">Learn More &#8594;</a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Asset Owners -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-sector-card","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-sector-card" style="background:rgba(255,255,255,0.05);backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.12);border-radius:12px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg)">

					<!-- wp:html -->
					<div class="wi-sector-card-header">
						<div class="wi-sector-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
						</div>
						<span class="wi-sector-label">ASSET OWNERS</span>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"level":3,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Know what you own.<br>Know what it costs.</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--lg)"}}}} -->
					<p style="color:rgba(255,255,255,0.8);font-size:0.9375rem;line-height:1.65;margin-top:0;margin-bottom:var(--wp--preset--spacing--lg)">Condition assessments, maintenance planning and remediation budgets, clarified.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/sectors/asset-owners/" style="color:#fff;text-decoration:none">Learn More &#8594;</a></p>
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
