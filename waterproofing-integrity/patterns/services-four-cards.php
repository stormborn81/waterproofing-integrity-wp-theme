<?php
/**
 * Pattern: Services — Four Cards
 * Slug: waterproofing-integrity/services-four-cards
 *
 * 4-column card grid: Design, Inspect, Test, Remediate.
 * White bg — always-blue top border — hover: lift shadow — "Learn More →" link.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Services — Four Cards', 'waterproofing-integrity' ),
	'description' => __( 'Four service cards: Design Review, Inspection, NATA Testing, Defect Remediation.', 'waterproofing-integrity' ),
	'keywords'    => [ 'services', 'cards', 'design', 'inspect', 'test', 'remediate' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-services","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-services has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--sm)">What We Do</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--lg)"}}}} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--lg)">Four specialised services. One independent authority.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-service-card","backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-service-card has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div class="wi-service-card-header">
						<div class="wi-service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 19 7-7 3 3-7 7-3-3z"/><path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="m2 2 7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
						</div>
						<span class="wi-service-label">DESIGN</span>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--xs)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)">Design it once. Build it right.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Comprehensive specifications to eliminate defects before construction starts.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"wi-stat","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p class="wi-stat" style="font-size:0.8125rem;font-weight:600;margin-top:0;margin-bottom:var(--wp--preset--spacing--md)">750+ designs delivered</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/services/design/" class="has-blue-color">Learn More →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-service-card","backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-service-card has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div class="wi-service-card-header">
						<div class="wi-service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
						</div>
						<span class="wi-service-label">INSPECT</span>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--xs)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)">See what others miss.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Independent oversight at every stage to catch defects before they become costly.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"wi-stat","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p class="wi-stat" style="font-size:0.8125rem;font-weight:600;margin-top:0;margin-bottom:var(--wp--preset--spacing--md)">10,000+ inspections completed</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/services/inspect/" class="has-blue-color">Learn More →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-service-card","backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-service-card has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div class="wi-service-card-header">
						<div class="wi-service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 2v17.5c0 1.4-1.1 2.5-2.5 2.5s-2.5-1.1-2.5-2.5V2"/><path d="M8.5 2h7"/><path d="M14.5 16h-5"/></svg>
						</div>
						<span class="wi-service-label">TEST</span>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--xs)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)">Trust the data, not the promise.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Non-destructive membrane testing by our NATA-accredited laboratory. Objective, defensible results.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"wi-stat","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p class="wi-stat" style="font-size:0.8125rem;font-weight:600;margin-top:0;margin-bottom:var(--wp--preset--spacing--md)">NATA-accredited lab testing</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/services/test/" class="has-blue-color">Learn More →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-service-card","backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-service-card has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div class="wi-service-card-header">
						<div class="wi-service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
						</div>
						<span class="wi-service-label">REMEDIATE</span>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--xs)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)">Fix it properly. Fix it once.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-top:0;margin-bottom:var(--wp--preset--spacing--sm)">Diagnose root causes and manage remediation to final resolution.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"wi-stat","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--md)"}}}} -->
					<p class="wi-stat" style="font-size:0.8125rem;font-weight:600;margin-top:0;margin-bottom:var(--wp--preset--spacing--md)">2,500+ projects completed</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"},"spacing":{"margin":{"top":"auto","bottom":"0"}}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem;margin-top:auto;margin-bottom:0"><a href="/services/remediate/" class="has-blue-color">Learn More →</a></p>
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
