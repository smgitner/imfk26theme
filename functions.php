<?php
/**
 * IMFK Theme functions and definitions.
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * ---------------------------------------------------------------
 * Theme Setup
 * ---------------------------------------------------------------
 */
function imfktheme_setup() {
	// Let WordPress manage the document <title>.
	add_theme_support( 'title-tag' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Wide and full-width Gutenberg alignment.
	add_theme_support( 'align-wide' );

	// Gutenberg editor styles — loads editor-style.css in the block editor.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );

	// Register navigation menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'imfktheme' ),
	) );
}
add_action( 'after_setup_theme', 'imfktheme_setup' );

/**
 * ---------------------------------------------------------------
 * Enqueue Styles
 * ---------------------------------------------------------------
 *
 * 1. Sora font from Fontshare (loaded first).
 * 2. Theme stylesheet (style.css) with filemtime() versioning.
 *
 * To change which Sora weights are loaded, edit the $sora_weights
 * array below — no other file needs to change.
 */
function imfktheme_enqueue_styles() {

	/*
	 * --- Sora Font Weights ---
	 * Edit this single array to add or remove weights.
	 * The Fontshare API builds @font-face rules for each listed weight.
	 */
	$sora_weights = array( 300, 400, 500, 600, 700 );

	$font_url = 'https://api.fontshare.com/v2/css?f[]=sora@'
		. implode( ',', array_map( 'intval', $sora_weights ) )
		. '&display=swap';

	wp_enqueue_style(
		'imfk-sora-font',
		$font_url,
		array(),
		null // CDN resource — no local version number.
	);

	// Theme base styles (layout, nav, dropdowns).
	wp_enqueue_style(
		'imfktheme-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array( 'imfk-sora-font' ),
		filemtime( get_template_directory() . '/assets/css/theme.css' )
	);

	// Base stylesheet (variables, typography, components).
	wp_enqueue_style(
		'imfktheme-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array( 'imfktheme-theme' ),
		filemtime( get_template_directory() . '/assets/css/base.css' )
	);

	// Theme stylesheet (WP header + any overrides) — loaded last.
	wp_enqueue_style(
		'imfktheme-style',
		get_stylesheet_uri(),
		array( 'imfktheme-base' ),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'imfktheme_enqueue_styles' );

/**
 * ---------------------------------------------------------------
 * Enqueue Scripts
 * ---------------------------------------------------------------
 */
function imfktheme_enqueue_scripts() {
	// Deregister default jQuery and re-register to load in header
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.min.js' ), array(), false, false );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
		'imfktheme-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/navigation.js' ),
		true // Load in footer.
	);

	// Enqueue StorySplat constraint script to prevent fullscreen
	wp_enqueue_script(
		'imfktheme-storysplat-constrain',
		get_template_directory_uri() . '/assets/js/storysplat-constrain.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/storysplat-constrain.js' ),
		true // Load in footer.
	);
}
add_action( 'wp_enqueue_scripts', 'imfktheme_enqueue_scripts' );

/**
 * ---------------------------------------------------------------
 * ACF Field Groups
 * ---------------------------------------------------------------
 */
require_once get_template_directory() . '/inc/acf-fields.php';

/**
 * ---------------------------------------------------------------
 * Page Setup (runs once on theme activation)
 * ---------------------------------------------------------------
 */
require_once get_template_directory() . '/inc/setup-pages.php';
add_action( 'after_switch_theme', 'imfktheme_create_sitemap_pages' );
