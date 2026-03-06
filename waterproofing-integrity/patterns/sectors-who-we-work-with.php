<?php
/**
 * Pattern: Sectors — Who We Work With
 * Slug: waterproofing-integrity/sectors-who-we-work-with
 *
 * Navy gradient bg — 3 glassmorphism cards (white 5% opacity, backdrop-blur).
 * Cards: Builders, Developers & Owners, Asset Owners.
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

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Who We Work With</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.7)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center" style="color:rgba(255,255,255,0.7);margin-bottom:var(--wp--preset--spacing--xl)">Independent waterproofing advisory trusted by the full construction supply chain.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Card 1: Builders -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-sector-card","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-sector-card" style="background:rgba(255,255,255,0.05);backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.12);border-radius:12px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg)">

					<!-- wp:html -->
					<div style="width:56px;height:56px;background:rgba(255,255,255,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"level":3,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:1.25rem;margin-bottom:var(--wp--preset--spacing--sm)">Builders</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem","letterSpacing":"0.05em"},"color":{"text":"var(--wp--preset--color--gold)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h4 class="wp-block-heading" style="font-weight:600;font-size:0.875rem;letter-spacing:0.05em;color:var(--wp--preset--color--gold);text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--sm)">Construction Quality Assurance</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.75)"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p style="color:rgba(255,255,255,0.75);font-size:0.9375rem;line-height:1.65;margin-bottom:var(--wp--preset--spacing--md)">Independent oversight at every stage of construction. We work alongside your trades to catch defects before they become disputes, protecting your programme and your liability exposure.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gold)"},"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p style="color:var(--wp--preset--color--gold);font-weight:600;font-size:0.9375rem"><a href="/sectors/builders/" style="color:var(--wp--preset--color--gold);text-decoration:none">Learn More &#8594;</a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Developers & Owners -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-sector-card","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-sector-card" style="background:rgba(255,255,255,0.05);backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.12);border-radius:12px;padding:var(--wp--preset--spacing--xl) var(--wp--preset--spacing--lg)">

					<!-- wp:html -->
					<div style="width:56px;height:56px;background:rgba(255,255,255,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"level":3,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:1.25rem;margin-bottom:var(--wp--preset--spacing--sm)">Developers &amp; Owners</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem","letterSpacing":"0.05em"},"color":{"text":"var(--wp--preset--color--gold)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h4 class="wp-block-heading" style="font-weight:600;font-size:0.875rem;letter-spacing:0.05em;color:var(--wp--preset--color--gold);text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--sm)">Risk Management &amp; Due Diligence</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.75)"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p style="color:rgba(255,255,255,0.75);font-size:0.9375rem;line-height:1.65;margin-bottom:var(--wp--preset--spacing--md)">Protect your development from waterproofing risk from feasibility through to handover. Our independent advice gives you the evidence base to manage contractors, satisfy financiers, and defend against future claims.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gold)"},"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p style="color:var(--wp--preset--color--gold);font-weight:600;font-size:0.9375rem"><a href="/sectors/developers/" style="color:var(--wp--preset--color--gold);text-decoration:none">Learn More &#8594;</a></p>
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
					<div style="width:56px;height:56px;background:rgba(255,255,255,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:heading {"level":3,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:1.25rem;margin-bottom:var(--wp--preset--spacing--sm)">Asset Owners</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem","letterSpacing":"0.05em"},"color":{"text":"var(--wp--preset--color--gold)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h4 class="wp-block-heading" style="font-weight:600;font-size:0.875rem;letter-spacing:0.05em;color:var(--wp--preset--color--gold);text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--sm)">Ongoing Maintenance &amp; Compliance</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.75)"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p style="color:rgba(255,255,255,0.75);font-size:0.9375rem;line-height:1.65;margin-bottom:var(--wp--preset--spacing--md)">Maintain the long-term integrity of your building envelope with independent assessment, planned maintenance programmes, and expert defect resolution backed by NATA-accredited testing.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gold)"},"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p style="color:var(--wp--preset--color--gold);font-weight:600;font-size:0.9375rem"><a href="/sectors/asset-owners/" style="color:var(--wp--preset--color--gold);text-decoration:none">Learn More &#8594;</a></p>
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
