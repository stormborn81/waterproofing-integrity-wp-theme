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

## Known WordPress FSE Gotchas — Learn From These

### 1. Sticky Nav Must Be on wp-block-template-part, Not the Inner Group
A sticky element can only stick within its direct parent container. The header wp-block-template-part is only 80px tall — sticky on the inner .wi-site-header group will not work. Always apply sticky positioning to the template part wrapper:
.wp-block-template-part:has(.wi-site-header) { position: sticky; top: 0; z-index: 100; }

### 2. WordPress Core Overrides position:sticky on wp-block-group
WordPress core applies position:relative to .wp-block-group via a :where() selector. Override explicitly:
.wi-site-header.wp-block-group { position: sticky !important; top: 0 !important; }

### 3. WordPress Core Applies overflow-x:clip to .wp-site-blocks
This breaks sticky positioning on any child. Always include this override:
.wp-site-blocks { overflow-x: unset; }

### 4. Smart Quotes Break PHP Parsing
Never use curly/smart quotes inside PHP strings including apostrophes in words like Integrity's. Always use straight quotes. After creating any PHP file run: grep -n filename.php to check.

### 5. Claude Code Branch Workflow
Always run git fetch origin after a session to find the branch name, then:
git fetch origin
git merge origin/[claude-branch-name]
git push origin master
If diverged: git stash, git pull origin master --rebase, git stash pop, git push origin master

## Source Reference URLs

Loveable design source (fetch these when doing visual alignment work):
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/index.css
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/HeroSection.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/ServicesSection.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/StatsSection.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/GoogleReviews.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/WhyChooseUs.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/SectorsSection.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/LocationsSection.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/Footer.tsx
- https://raw.githubusercontent.com/stormborn81/water-tight-resolve/main/src/components/Navigation.tsx
