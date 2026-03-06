<?php
/**
 * Pattern: Contact — Offices Sidebar
 * Slug: waterproofing-integrity/contact-offices-sidebar
 *
 * 3 office cards stacked vertically for sidebar use: Sydney, Newcastle, Brisbane.
 * Gold MapPin icon, address, coverage area, email, phone (.tel-link).
 * Melbourne is omitted from this sidebar (full 4-office list: locations-offices pattern).
 *
 * @package WaterproofingIntegrity
 */

return [
	'title'       => __( 'Contact — Offices Sidebar', 'waterproofing-integrity' ),
	'description' => __( '3 stacked office cards (Sydney, Newcastle, Brisbane) for contact page sidebar.', 'waterproofing-integrity' ),
	'keywords'    => [ 'contact', 'offices', 'sidebar', 'address', 'phone' ],
	'content'     => '
<!-- wp:group {"className":"wi-offices-sidebar","layout":{"type":"default"}} -->
<div class="wp-block-group wi-offices-sidebar">

	<!-- wp:heading {"level":3,"textColor":"navy","style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
	<h3 class="wp-block-heading has-navy-color has-text-color" style="font-weight:700;font-size:1.0625rem;margin-bottom:var(--wp--preset--spacing--md)">Our Offices</h3>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<div style="display:flex;flex-direction:column;gap:16px">

		<!-- Sydney (Head Office) -->
		<div style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:20px 20px 20px 20px">
			<div style="display:flex;align-items:center;gap:8px;margin-bottom:12px">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				<span style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.6875rem;letter-spacing:0.08em;color:var(--wp--preset--color--gold);text-transform:uppercase">Head Office</span>
			</div>
			<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Sydney</p>
			<address style="font-style:normal;display:flex;flex-direction:column;gap:6px">
				<span style="font-size:0.875rem;color:var(--wp--preset--color--muted);line-height:1.5">49C Slough Business Park<br>2 Slough Ave, Silverwater NSW 2128</span>
				<span style="font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering NSW &amp; ACT</span>
				<a href="tel:1300025944" class="tel-link" style="font-size:0.875rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
				<a href="mailto:info@waterproofingintegrity.com.au" style="font-size:0.8125rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">info@waterproofingintegrity.com.au</a>
			</address>
		</div>

		<!-- Newcastle -->
		<div style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:20px">
			<div style="display:flex;align-items:center;gap:8px;margin-bottom:12px">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
			</div>
			<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Newcastle</p>
			<address style="font-style:normal;display:flex;flex-direction:column;gap:6px">
				<span style="font-size:0.875rem;color:var(--wp--preset--color--muted);line-height:1.5">Suite 1, 3 Honeysuckle Dr<br>Newcastle NSW 2300</span>
				<span style="font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering Newcastle &amp; Hunter</span>
				<a href="tel:1300025944" class="tel-link" style="font-size:0.875rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
				<a href="mailto:newcastle@waterproofingintegrity.com.au" style="font-size:0.8125rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">newcastle@waterproofingintegrity.com.au</a>
			</address>
		</div>

		<!-- Brisbane -->
		<div style="background:var(--wp--preset--color--light-grey);border-radius:8px;padding:20px">
			<div style="display:flex;align-items:center;gap:8px;margin-bottom:12px">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
			</div>
			<p style="font-family:var(--wp--preset--font-family--raleway);font-weight:700;font-size:0.9375rem;color:var(--wp--preset--color--navy);margin:0 0 8px 0">Brisbane</p>
			<address style="font-style:normal;display:flex;flex-direction:column;gap:6px">
				<span style="font-size:0.875rem;color:var(--wp--preset--color--muted);line-height:1.5">Level 5, 10 Market St<br>Brisbane QLD 4000</span>
				<span style="font-size:0.8125rem;font-weight:600;color:var(--wp--preset--color--blue)">Covering QLD</span>
				<a href="tel:1300025944" class="tel-link" style="font-size:0.875rem;color:var(--wp--preset--color--navy);font-weight:600;text-decoration:none">1300 025 944</a>
				<a href="mailto:brisbane@waterproofingintegrity.com.au" style="font-size:0.8125rem;color:var(--wp--preset--color--muted);text-decoration:none;word-break:break-all">brisbane@waterproofingintegrity.com.au</a>
			</address>
		</div>

	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
];
