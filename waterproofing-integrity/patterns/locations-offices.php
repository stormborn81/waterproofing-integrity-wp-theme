<?php
/**
 * Pattern: Locations — 4 Office Cards
 * Slug: waterproofing-integrity/locations-offices
 *
 * White bg — 4-col desktop / 2-col tablet / 1-col mobile.
 * Light Grey card bg — Gold MapPin icon.
 * Offices: Sydney (Head Office), Newcastle, Brisbane, Melbourne.
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

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"navy","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--lg)">Our Offices</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
		<div class="wp-block-columns is-layout-flex">

			<!-- Sydney (Head Office) -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-office-card","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-office-card" style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.75rem;letter-spacing:0.08em;color:var(--wp--preset--color--gold);text-transform:uppercase">Head Office</span>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">Sydney</h3>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<address style="font-style:normal;display:flex;flex-direction:column;gap:8px">
						<p style="margin:0;font-size:0.9rem;color:var(--wp--preset--color--muted);line-height:1.5">49C Slough Business Park<br>2 Slough Ave, Silverwater NSW 2128</p>
						<p style="margin:0;font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering NSW &amp; ACT</p>
						<a href="tel:1300025944" class="tel-link" style="font-size:0.9rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
						<a href="mailto:info@waterproofingintegrity.com.au" style="font-size:0.875rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">info@waterproofingintegrity.com.au</a>
					</address>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Newcastle -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-office-card","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-office-card" style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">Newcastle</h3>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<address style="font-style:normal;display:flex;flex-direction:column;gap:8px">
						<p style="margin:0;font-size:0.9rem;color:var(--wp--preset--color--muted);line-height:1.5">Suite 1, 3 Honeysuckle Dr<br>Newcastle NSW 2300</p>
						<p style="margin:0;font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering Newcastle &amp; Hunter</p>
						<a href="tel:1300025944" class="tel-link" style="font-size:0.9rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
						<a href="mailto:newcastle@waterproofingintegrity.com.au" style="font-size:0.875rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">newcastle@waterproofingintegrity.com.au</a>
					</address>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Brisbane -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-office-card","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-office-card" style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">Brisbane</h3>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<address style="font-style:normal;display:flex;flex-direction:column;gap:8px">
						<p style="margin:0;font-size:0.9rem;color:var(--wp--preset--color--muted);line-height:1.5">Level 5, 10 Market St<br>Brisbane QLD 4000</p>
						<p style="margin:0;font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering QLD</p>
						<a href="tel:1300025944" class="tel-link" style="font-size:0.9rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
						<a href="mailto:brisbane@waterproofingintegrity.com.au" style="font-size:0.875rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">brisbane@waterproofingintegrity.com.au</a>
					</address>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Melbourne -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wi-office-card","style":{"color":{"background":"var(--wp--preset--color--light-grey)"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}}}} -->
				<div class="wp-block-group wi-office-card" style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:var(--wp--preset--spacing--lg)">
					<!-- wp:html -->
					<div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
					<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--sm)">Melbourne</h3>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<address style="font-style:normal;display:flex;flex-direction:column;gap:8px">
						<p style="margin:0;font-size:0.9rem;color:var(--wp--preset--color--muted);line-height:1.5">Level 14, 330 Collins St<br>Melbourne VIC 3000</p>
						<p style="margin:0;font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering VIC</p>
						<a href="tel:1300025944" class="tel-link" style="font-size:0.9rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
						<a href="mailto:melbourne@waterproofingintegrity.com.au" style="font-size:0.875rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">melbourne@waterproofingintegrity.com.au</a>
					</address>
					<!-- /wp:html -->
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
