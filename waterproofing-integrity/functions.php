<?php

declare(strict_types=1);

/**
 * Waterproofing Integrity — Block Theme Functions
 *
 * PHP 8.1+ required. All functions prefixed wi_.
 * No jQuery. No page builders. Pure FSE.
 *
 * @package WaterproofingIntegrity
 */

// Prevent direct access.
defined('ABSPATH') || exit;

// =============================================================================
// ASSETS: Enqueue styles and scripts
// =============================================================================

/**
 * Enqueue theme assets.
 * Raleway loaded from Google Fonts with display=swap.
 * theme.js loaded in footer, deferred.
 */
function wi_enqueue_assets(): void {
	// Raleway from Google Fonts — weights 400,500,600,700,800
	wp_enqueue_style(
		'wi-raleway',
		'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap',
		[],
		null // no version — Google manages cache-busting
	);

	// Main theme stylesheet
	wp_enqueue_style(
		'wi-style',
		get_stylesheet_uri(),
		['wi-raleway'],
		wp_get_theme()->get('Version')
	);

	// Main theme JS (footer, defer)
	wp_enqueue_script(
		'wi-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		[],
		wp_get_theme()->get('Version'),
		[
			'strategy'  => 'defer',
			'in_footer' => true,
		]
	);
}
add_action('wp_enqueue_scripts', 'wi_enqueue_assets');

/**
 * Enqueue scorecard JS only on the risk scorecard page template.
 */
function wi_enqueue_scorecard_assets(): void {
	if ( ! is_page_template('page-risk-scorecard') ) {
		return;
	}

	wp_enqueue_script(
		'wi-scorecard',
		get_template_directory_uri() . '/assets/js/scorecard.js',
		[],
		wp_get_theme()->get('Version'),
		[
			'strategy'  => 'defer',
			'in_footer' => true,
		]
	);

	wp_localize_script(
		'wi-scorecard',
		'wiScorecard',
		[
			'logoUrl' => get_template_directory_uri() . '/assets/images/WI_logo-Dws3Kc0z.png',
		]
	);
}
add_action('wp_enqueue_scripts', 'wi_enqueue_scorecard_assets');

// =============================================================================
// GOOGLE TAG MANAGER — head snippet
// Replace GTM-XXXXXXX with the real container ID.
// =============================================================================

/**
 * Output GTM <script> snippet immediately after <head>.
 * Placeholder: GTM-XXXXXXX — replace with real container ID.
 */
function wi_gtm_head(): void {
	?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXXX');</script>
<!-- End Google Tag Manager -->
	<?php
}
add_action('wp_head', 'wi_gtm_head', 1);

/**
 * Output GTM <noscript> snippet immediately after <body>.
 * Placeholder: GTM-XXXXXXX — replace with real container ID.
 */
function wi_gtm_body(): void {
	?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php
}
add_action('wp_body_open', 'wi_gtm_body', 1);

// =============================================================================
// BLOCK PATTERNS — register all PHP pattern files
// =============================================================================

/**
 * Register block pattern category and all patterns from /patterns/ directory.
 * Each pattern file must return an array with 'title', 'content', and
 * optionally 'description', 'keywords', 'blockTypes'.
 */
function wi_register_block_patterns(): void {
	// Register a custom pattern category.
	register_block_pattern_category(
		'waterproofing-integrity',
		['label' => __('Waterproofing Integrity', 'waterproofing-integrity')]
	);

	$pattern_dir = get_template_directory() . '/patterns/';

	if ( ! is_dir($pattern_dir) ) {
		return;
	}

	$pattern_files = glob($pattern_dir . '*.php');

	if ( empty($pattern_files) ) {
		return;
	}

	foreach ( $pattern_files as $pattern_file ) {
		$pattern = include $pattern_file;

		if ( ! is_array($pattern) || empty($pattern['title']) || empty($pattern['content']) ) {
			continue;
		}

		$slug = basename($pattern_file, '.php');

		register_block_pattern(
			'waterproofing-integrity/' . $slug,
			array_merge(
				[
					'categories' => ['waterproofing-integrity'],
				],
				$pattern
			)
		);
	}
}
add_action('init', 'wi_register_block_patterns');

// =============================================================================
// CUSTOM POST TYPES
// =============================================================================

/**
 * Register Case Study CPT.
 * Archive: /case-studies/
 * Supports: title, editor, thumbnail, excerpt, custom-fields
 */
function wi_register_cpt_case_study(): void {
	$labels = [
		'name'               => __('Case Studies', 'waterproofing-integrity'),
		'singular_name'      => __('Case Study', 'waterproofing-integrity'),
		'add_new'            => __('Add New Case Study', 'waterproofing-integrity'),
		'add_new_item'       => __('Add New Case Study', 'waterproofing-integrity'),
		'edit_item'          => __('Edit Case Study', 'waterproofing-integrity'),
		'new_item'           => __('New Case Study', 'waterproofing-integrity'),
		'view_item'          => __('View Case Study', 'waterproofing-integrity'),
		'search_items'       => __('Search Case Studies', 'waterproofing-integrity'),
		'not_found'          => __('No case studies found', 'waterproofing-integrity'),
		'not_found_in_trash' => __('No case studies found in Trash', 'waterproofing-integrity'),
		'menu_name'          => __('Case Studies', 'waterproofing-integrity'),
	];

	register_post_type('case-study', [
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'has_archive'         => 'case-studies',
		'rewrite'             => ['slug' => 'case-studies', 'with_front' => false],
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-portfolio',
		'menu_position'       => 5,
		'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
		'template'            => [],
		'description'         => __('Waterproofing project case studies.', 'waterproofing-integrity'),
	]);
}
add_action('init', 'wi_register_cpt_case_study');

/**
 * Register Team Member CPT.
 * Single: /team/[slug]/
 * Supports: title, editor, thumbnail, custom-fields
 */
function wi_register_cpt_team_member(): void {
	$labels = [
		'name'               => __('Team Members', 'waterproofing-integrity'),
		'singular_name'      => __('Team Member', 'waterproofing-integrity'),
		'add_new'            => __('Add New Team Member', 'waterproofing-integrity'),
		'add_new_item'       => __('Add New Team Member', 'waterproofing-integrity'),
		'edit_item'          => __('Edit Team Member', 'waterproofing-integrity'),
		'new_item'           => __('New Team Member', 'waterproofing-integrity'),
		'view_item'          => __('View Team Member', 'waterproofing-integrity'),
		'search_items'       => __('Search Team Members', 'waterproofing-integrity'),
		'not_found'          => __('No team members found', 'waterproofing-integrity'),
		'not_found_in_trash' => __('No team members found in Trash', 'waterproofing-integrity'),
		'menu_name'          => __('Team', 'waterproofing-integrity'),
	];

	register_post_type('team-member', [
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'has_archive'         => false,
		'rewrite'             => ['slug' => 'team', 'with_front' => false],
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-businessman',
		'menu_position'       => 6,
		'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields'],
		'description'         => __('Waterproofing Integrity team members.', 'waterproofing-integrity'),
	]);
}
add_action('init', 'wi_register_cpt_team_member');

// =============================================================================
// SECTOR TAXONOMY
// =============================================================================

/**
 * Register Sector taxonomy.
 * Applied to: case-study (and optionally page).
 * Non-hierarchical (tag-style).
 * Slugs: multi-residential, infrastructure, health, education,
 *        commercial, aged-care, aquatic, remedial, residential
 */
function wi_register_sector_taxonomy(): void {
	$labels = [
		'name'              => __('Sectors', 'waterproofing-integrity'),
		'singular_name'     => __('Sector', 'waterproofing-integrity'),
		'search_items'      => __('Search Sectors', 'waterproofing-integrity'),
		'all_items'         => __('All Sectors', 'waterproofing-integrity'),
		'edit_item'         => __('Edit Sector', 'waterproofing-integrity'),
		'update_item'       => __('Update Sector', 'waterproofing-integrity'),
		'add_new_item'      => __('Add New Sector', 'waterproofing-integrity'),
		'new_item_name'     => __('New Sector Name', 'waterproofing-integrity'),
		'menu_name'         => __('Sectors', 'waterproofing-integrity'),
	];

	register_taxonomy('sector', ['case-study'], [
		'labels'            => $labels,
		'hierarchical'      => false,
		'public'            => true,
		'publicly_queryable' => true,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'sector', 'with_front' => false],
		'capabilities'      => [
			'manage_terms' => 'manage_categories',
			'edit_terms'   => 'manage_categories',
			'delete_terms'  => 'manage_categories',
			'assign_terms'  => 'edit_posts',
		],
	]);
}
add_action('init', 'wi_register_sector_taxonomy');

// =============================================================================
// THEME SETUP
// =============================================================================

/**
 * Theme setup: add_theme_support declarations, navigation menus.
 */
function wi_theme_setup(): void {
	// Block theme support.
	add_theme_support('block-templates');

	// Title tag managed by WordPress.
	add_theme_support('title-tag');

	// Post thumbnails.
	add_theme_support('post-thumbnails');

	// HTML5 markup.
	add_theme_support('html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	]);

	// Editor styles.
	add_theme_support('editor-styles');

	// Load Raleway and theme stylesheet inside the Gutenberg editor iframe.
	// Required because wp_enqueue_scripts does not fire in the editor.
	add_editor_style('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap');
	add_editor_style(get_stylesheet_uri());

	// Register navigation menus.
	register_nav_menus([
		'primary' => __('Primary Navigation', 'waterproofing-integrity'),
		'footer'  => __('Footer Navigation', 'waterproofing-integrity'),
	]);
}
add_action('after_setup_theme', 'wi_theme_setup');

// =============================================================================
// PERMALINK FLUSH ON ACTIVATION
// =============================================================================

/**
 * Flush rewrite rules on theme activation so CPT and taxonomy
 * slugs resolve correctly without manual Settings → Permalinks save.
 */
function wi_flush_rewrite_rules(): void {
	wi_register_cpt_case_study();
	wi_register_cpt_team_member();
	wi_register_sector_taxonomy();
	flush_rewrite_rules();
}
add_action('after_switch_theme', 'wi_flush_rewrite_rules');
