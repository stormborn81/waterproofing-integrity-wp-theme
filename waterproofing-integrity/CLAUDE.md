# Waterproofing Integrity — WordPress Block Theme

## Spec Documents
The full build specification is in the repo root:
- WI-Dev-Spec.docx — design and development specification, session prompts
- WI-Dev-Principles.docx — coding standards and principles

Read both documents before starting any work.

## Critical Rules
- This is a pure FSE Block Theme — no page builders, no Elementor, no Divi
- All design tokens go in theme.json — never hardcode colours or spacing in CSS
- Vanilla JS only — no jQuery
- Mobile-first CSS — mobile styles first, min-width for desktop
- All images use loading="lazy" except the hero (loading="eager" fetchpriority="high")
- All phone numbers use <a href="tel:..."> with class .tel-link
- All CTA buttons have class .cta-button
- No caching plugins — Kinsta handles caching
- Never hardcode Zoho form IDs — use placeholder comment blocks
- Working directory for all theme files: waterproofing-integrity/
