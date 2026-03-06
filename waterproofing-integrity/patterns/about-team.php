<?php
/**
 * Pattern: About — Team
 * Slug: waterproofing-integrity/about-team
 *
 * White bg — 3 team cards: David Previte (MD), Design Team, Technicians.
 * Featured image placeholders — images set in WordPress media library.
 * Images use loading="lazy" (below fold).
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'About — Team', 'waterproofing-integrity' ),
	'description' => __( '3 team cards: David Previte MD, Design Team, Technicians — with featured image placeholders.', 'waterproofing-integrity' ),
	'keywords'    => [ 'about', 'team', 'david previte', 'staff', 'people' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-team","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-team has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">Meet the Team</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">Specialists in independent waterproofing advisory — no installation arm, no conflict of interest.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--lg)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Card 1: David Previte — Managing Director -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-team-card","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="wp-block-group wi-team-card" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;overflow:hidden">

					<!-- Featured image placeholder — replace with actual headshot via WordPress media -->
					<!-- wp:html -->
					<div style="width:100%;aspect-ratio:4/3;background:var(--wp--preset--color--light-grey);display:flex;align-items:center;justify-content:center" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--border)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
					<div class="wp-block-group" style="padding:var(--wp--preset--spacing--lg)">

						<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"4px"}}}} -->
						<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-bottom:4px">David Previte</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
						<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.875rem;margin-bottom:var(--wp--preset--spacing--sm)">Managing Director</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
						<p class="has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.6">David founded Waterproofing Integrity with a clear mandate: provide the Australian construction industry with the independent advisory it had long lacked. With decades of experience across design, inspection, and dispute resolution, David leads WI&#8217;s national operations and serves as an expert witness in waterproofing litigation.</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Design Team -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-team-card","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="wp-block-group wi-team-card" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;overflow:hidden">

					<!-- Featured image placeholder -->
					<!-- wp:html -->
					<div style="width:100%;aspect-ratio:4/3;background:var(--wp--preset--color--light-grey);display:flex;align-items:center;justify-content:center" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--border)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
					<div class="wp-block-group" style="padding:var(--wp--preset--spacing--lg)">

						<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"4px"}}}} -->
						<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-bottom:4px">Design Team</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
						<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.875rem;margin-bottom:var(--wp--preset--spacing--sm)">Waterproofing Specification Specialists</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
						<p class="has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.6">Our design team has delivered 750+ waterproofing specifications across Australia&#8217;s most complex residential, commercial, and infrastructure projects. Each specification is independently prepared and grounded in AS 4654, AS 3740, and current best practice — with no contractor to favour.</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Technicians -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-team-card","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="wp-block-group wi-team-card" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;overflow:hidden">

					<!-- Featured image placeholder -->
					<!-- wp:html -->
					<div style="width:100%;aspect-ratio:4/3;background:var(--wp--preset--color--light-grey);display:flex;align-items:center;justify-content:center" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--border)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<!-- /wp:html -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
					<div class="wp-block-group" style="padding:var(--wp--preset--spacing--lg)">

						<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"4px"}}}} -->
						<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-bottom:4px">Field Technicians</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
						<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.875rem;margin-bottom:var(--wp--preset--spacing--sm)">NATA-Accredited Inspection &amp; Testing</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"}}} -->
						<p class="has-muted-color has-text-color" style="font-size:0.9375rem;line-height:1.6">Our field technicians conduct over 10,000 inspections per year across every state in Australia. Trained in NATA-accredited testing methodologies and supported by purpose-built reporting systems, they provide the on-site oversight that protects your programme and your liability position.</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

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
