/**
 * Waterproofing Integrity — Main Theme JS
 *
 * Vanilla ES6+. No jQuery. No external dependencies.
 * GTM dataLayer events use the standard GTM convention.
 *
 * Functions:
 *   - Sticky nav: toggle .is-scrolled on header when scrolled
 *   - GTM dataLayer: CTA clicks, tel/email clicks, nav clicks, outbound links
 *   - GTM dataLayer: Scroll depth milestones (25 / 50 / 75 / 100%)
 *   - Flip card: touchstart toggle for mobile (hover handles desktop)
 */

'use strict';

// ---------------------------------------------------------------------------
// Constants
// ---------------------------------------------------------------------------

const SCROLL_THRESHOLD = 10; // px before nav gets shadow
const SCROLL_MILESTONES = [25, 50, 75, 100];

// ---------------------------------------------------------------------------
// Utility: push to GTM dataLayer safely
// ---------------------------------------------------------------------------

/**
 * @param {Object} eventData
 */
const pushDataLayer = (eventData) => {
	window.dataLayer = window.dataLayer || [];
	window.dataLayer.push(eventData);
};

// ---------------------------------------------------------------------------
// Sticky navigation
// ---------------------------------------------------------------------------

const initStickyNav = () => {
	const header = document.querySelector('.wi-site-header');
	if (!header) return;

	const handleScroll = () => {
		if (window.scrollY > SCROLL_THRESHOLD) {
			header.classList.add('is-scrolled');
		} else {
			header.classList.remove('is-scrolled');
		}
	};

	// Set initial state
	handleScroll();

	window.addEventListener('scroll', handleScroll, { passive: true });
};

// ---------------------------------------------------------------------------
// GTM: CTA button click events
// ---------------------------------------------------------------------------

const initCtaClickTracking = () => {
	document.addEventListener('click', (e) => {
		const btn = e.target.closest('.cta-button, .wp-block-button__link.cta-button');
		if (!btn) return;

		pushDataLayer({
			event: 'cta_click',
			event_category: 'CTA',
			event_label: btn.textContent.trim(),
			event_destination: (e.target.closest('a') || btn.querySelector('a'))?.href || '',
		});
	});
};

// ---------------------------------------------------------------------------
// GTM: Tel and email link clicks
// ---------------------------------------------------------------------------

const initContactLinkTracking = () => {
	document.addEventListener('click', (e) => {
		const link = e.target.closest('a[href^="tel:"], a[href^="mailto:"]');
		if (!link) return;

		const href = link.getAttribute('href') || '';
		const isTel = href.startsWith('tel:');

		pushDataLayer({
			event: isTel ? 'phone_click' : 'email_click',
			event_category: 'Contact',
			event_label: href.replace(/^(tel:|mailto:)/, ''),
			event_destination: href,
		});
	});
};

// ---------------------------------------------------------------------------
// GTM: Navigation link clicks
// ---------------------------------------------------------------------------

const initNavClickTracking = () => {
	const nav = document.querySelector('.wi-site-header .wp-block-navigation');
	if (!nav) return;

	nav.addEventListener('click', (e) => {
		const link = e.target.closest('a');
		if (!link) return;

		pushDataLayer({
			event: 'nav_click',
			event_category: 'Navigation',
			event_label: link.textContent.trim(),
			event_destination: link.href || '',
		});
	});
};

// ---------------------------------------------------------------------------
// GTM: Outbound link clicks
// ---------------------------------------------------------------------------

const initOutboundLinkTracking = () => {
	const hostname = window.location.hostname;

	document.addEventListener('click', (e) => {
		const link = e.target.closest('a[href]');
		if (!link) return;

		const href = link.getAttribute('href') || '';

		// Skip non-http links (tel:, mailto:, #, etc.)
		if (!href.startsWith('http')) return;

		try {
			const url = new URL(href);
			if (url.hostname !== hostname) {
				pushDataLayer({
					event: 'outbound_link_click',
					event_category: 'Outbound Link',
					event_label: url.href,
					event_destination: url.hostname,
				});
			}
		} catch {
			// Malformed URL — skip silently
		}
	});
};

// ---------------------------------------------------------------------------
// GTM: Scroll depth tracking (25 / 50 / 75 / 100%)
// ---------------------------------------------------------------------------

const initScrollDepthTracking = () => {
	const fired = new Set();

	const getScrollPercent = () => {
		const scrollTop = window.scrollY || document.documentElement.scrollTop;
		const docHeight = document.documentElement.scrollHeight - window.innerHeight;
		if (docHeight <= 0) return 100;
		return Math.round((scrollTop / docHeight) * 100);
	};

	const handleScroll = () => {
		const percent = getScrollPercent();

		for (const milestone of SCROLL_MILESTONES) {
			if (percent >= milestone && !fired.has(milestone)) {
				fired.add(milestone);
				pushDataLayer({
					event: 'scroll_depth',
					event_category: 'Scroll',
					event_label: `${milestone}%`,
					scroll_depth_threshold: milestone,
				});
			}
		}
	};

	window.addEventListener('scroll', handleScroll, { passive: true });
};

// ---------------------------------------------------------------------------
// Flip card: touch toggle for mobile
// Desktop hover is handled entirely in CSS.
// ---------------------------------------------------------------------------

const initFlipCardTouch = () => {
	const flipCards = document.querySelectorAll('.wi-flip-card');
	if (!flipCards.length) return;

	flipCards.forEach((card) => {
		card.addEventListener('touchstart', (e) => {
			// Allow native scroll to pass through if already scrolling
			e.preventDefault();
			card.classList.toggle('is-flipped');
		}, { passive: false });
	});
};

// ---------------------------------------------------------------------------
// Mobile navigation: close overlay on outside click
// ---------------------------------------------------------------------------

const initNavOverlayClose = () => {
	document.addEventListener('click', (e) => {
		const nav = document.querySelector('.wp-block-navigation__responsive-container.is-menu-open');
		if (!nav) return;

		const isClickInsideNav = nav.contains(e.target);
		const isToggleButton = e.target.closest('.wp-block-navigation__responsive-container-open');
		if (!isClickInsideNav && !isToggleButton) {
			const closeButton = nav.querySelector('.wp-block-navigation__responsive-container-close');
			if (closeButton) closeButton.click();
		}
	});
};

// ---------------------------------------------------------------------------
// Init on DOMContentLoaded
// ---------------------------------------------------------------------------

const init = () => {
	initStickyNav();
	initCtaClickTracking();
	initContactLinkTracking();
	initNavClickTracking();
	initOutboundLinkTracking();
	initScrollDepthTracking();
	initFlipCardTouch();
	initNavOverlayClose();
};

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', init);
} else {
	// DOM already parsed (script deferred)
	init();
}
