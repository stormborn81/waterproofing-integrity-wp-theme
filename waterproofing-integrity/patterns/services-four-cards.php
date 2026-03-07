<?php
/**
 * Pattern: Services — Four Cards
 * Slug: waterproofing-integrity/services-four-cards
 *
 * 4-column card grid: Design, Inspect, Test, Remediate.
 * White bg — hover: lift shadow + blue top border — "Learn More →" link.
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Services — Four Cards', 'waterproofing-integrity' ),
	'description' => __( 'Four service cards: Design Review, Inspection, NATA Testing, Defect Remediation.', 'waterproofing-integrity' ),
	'keywords'    => [ 'services', 'cards', 'design', 'inspect', 'test', 'remediate' ],
	'content'     => '
<!-- wp:group {"tagName":"section","className":"wi-services","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}}}} -->
<section class="wp-block-group wi-services has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--md)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--lg)">Independent Waterproofing Services</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-service-card","backgroundColor":"white","style":{"border":{"width":"1px","color":"var(--wp--preset--color--border)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-service-card has-white-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div class="wi-service-icon" style="width:36px;height:36px;background:rgba(46,134,171,0.10);border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem">Waterproofing Design Review</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-bottom:var(--wp--preset--spacing--sm)">Comprehensive specifications to eliminate defects before construction starts. 750+ designs delivered.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem"><a href="/services/#design" class="has-blue-color">Learn More →</a></p>
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
					<div class="wi-service-icon" style="width:36px;height:36px;background:rgba(46,134,171,0.10);border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem">Inspection During Construction</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-bottom:var(--wp--preset--spacing--sm)">Independent oversight at every stage to catch defects before they become costly. 10,000+ inspections completed.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem"><a href="/services/#inspect" class="has-blue-color">Learn More →</a></p>
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
					<div class="wi-service-icon" style="width:36px;height:36px;background:rgba(46,134,171,0.10);border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem">NATA-Accredited Testing</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-bottom:var(--wp--preset--spacing--sm)">Non-destructive membrane testing by our NATA-accredited laboratory. Objective, defensible results.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem"><a href="/services/#test" class="has-blue-color">Learn More →</a></p>
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
					<div class="wi-service-icon" style="width:36px;height:36px;background:rgba(46,134,171,0.10);border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.125rem">Defect Assessment &amp; Remediation</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<p class="has-muted-color has-text-color" style="font-size:0.9375rem;margin-bottom:var(--wp--preset--spacing--sm)">Diagnose root causes and manage remediation to final resolution. 2,500+ projects completed.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"blue","style":{"typography":{"fontWeight":"600","fontSize":"0.9375rem"}}} -->
					<p class="has-blue-color has-text-color" style="font-weight:600;font-size:0.9375rem"><a href="/services/#remediate" class="has-blue-color">Learn More →</a></p>
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
