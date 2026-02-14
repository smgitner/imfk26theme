<?php
/**
 * One-time page setup — creates all sitemap pages on theme activation.
 *
 * This file runs via the 'after_switch_theme' hook. Once the pages exist
 * it will not create duplicates (checks by slug before inserting).
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Create all sitemap pages with proper parent/child hierarchy.
 */
function imfktheme_create_sitemap_pages() {

	/*
	 * Page tree definition.
	 * Each top-level key is a parent page; its value is an array of children.
	 * Add or remove entries here to change the sitemap.
	 */
	$sitemap = array(
		'Home'            => array(),
		'About'           => array( 'Our Team', 'Public Speaking', 'Partnerships' ),
		'Services'        => array( 'Hire Ground', "Women's Outreach", 'Street Outreach' ),
		'Blog'            => array( 'Current Events', 'Library' ),
		'Store'           => array(),
		'Donate'          => array( 'Money', 'Clothing', 'Time' ),
		'Connect With Us' => array( 'TikTok', 'Partnerships' ),
		'Search'          => array(),
	);

	foreach ( $sitemap as $parent_title => $children ) {
		$parent_id = imfktheme_maybe_create_page( $parent_title );

		if ( $parent_id && ! empty( $children ) ) {
			foreach ( $children as $child_title ) {
				imfktheme_maybe_create_page( $child_title, $parent_id );
			}
		}
	}

	// Create Style Guide page with template
	imfktheme_create_style_guide_page();
}

/**
 * Create the Style Guide page with the style guide template.
 */
function imfktheme_create_style_guide_page() {
	$slug = 'style-guide';

	// Check if page already exists
	$existing = get_posts( array(
		'post_type'   => 'page',
		'name'        => $slug,
		'post_status' => array( 'publish', 'draft', 'private' ),
		'numberposts' => 1,
	) );

	if ( ! empty( $existing ) ) {
		// Update existing page to use the template
		update_post_meta( $existing[0]->ID, '_wp_page_template', 'page-style-guide.php' );
		return $existing[0]->ID;
	}

	// Create new page
	$page_id = wp_insert_post( array(
		'post_title'   => 'Style Guide',
		'post_name'    => $slug,
		'post_status'  => 'publish',
		'post_type'    => 'page',
		'post_content' => '',
	) );

	if ( ! is_wp_error( $page_id ) ) {
		// Assign the style guide template
		update_post_meta( $page_id, '_wp_page_template', 'page-style-guide.php' );
		return $page_id;
	}

	return false;
}

/**
 * Insert a page if one with the same slug doesn't already exist.
 *
 * @param string $title     Page title.
 * @param int    $parent_id Optional parent page ID.
 * @return int|false        The page ID, or false on failure.
 */
function imfktheme_maybe_create_page( $title, $parent_id = 0 ) {

	$slug = sanitize_title( $title );

	// Check if page already exists (match slug + parent to avoid collisions).
	$existing = get_posts( array(
		'post_type'   => 'page',
		'name'        => $slug,
		'post_parent' => $parent_id,
		'post_status' => array( 'publish', 'draft', 'private' ),
		'numberposts' => 1,
	) );

	if ( ! empty( $existing ) ) {
		return $existing[0]->ID;
	}

	$page_id = wp_insert_post( array(
		'post_title'   => $title,
		'post_name'    => $slug,
		'post_status'  => 'publish',
		'post_type'    => 'page',
		'post_parent'  => $parent_id,
		'post_content' => '',
	) );

	return ( ! is_wp_error( $page_id ) ) ? $page_id : false;
}
