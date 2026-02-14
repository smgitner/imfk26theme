<?php
/**
 * ACF Field Groups
 *
 * Programmatically register ACF field groups.
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register About Page fields.
 */
function imfktheme_register_about_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_about_page',
		'title'    => 'About Page Content',
		'fields'   => array(
			array(
				'key'           => 'field_our_mission',
				'label'         => 'Our Mission',
				'name'          => 'our_mission',
				'type'          => 'wysiwyg',
				'instructions'  => 'Enter the mission statement content.',
				'required'      => 0,
				'default_value' => '',
				'tabs'          => 'all',
				'toolbar'       => 'full',
				'media_upload'  => 1,
				'delay'         => 0,
			),
			array(
				'key'           => 'field_our_values',
				'label'         => 'Our Values',
				'name'          => 'our_values',
				'type'          => 'wysiwyg',
				'instructions'  => 'Enter the values content.',
				'required'      => 0,
				'default_value' => '',
				'tabs'          => 'all',
				'toolbar'       => 'full',
				'media_upload'  => 1,
				'delay'         => 0,
			),
			array(
				'key'           => 'field_our_history',
				'label'         => 'Our History',
				'name'          => 'our_history',
				'type'          => 'wysiwyg',
				'instructions'  => 'Enter the history content.',
				'required'      => 0,
				'default_value' => '',
				'tabs'          => 'all',
				'toolbar'       => 'full',
				'media_upload'  => 1,
				'delay'         => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-about.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => array( 'the_content' ),
	) );
}
add_action( 'acf/init', 'imfktheme_register_about_fields' );

/**
 * Register Storysplat Template fields.
 */
function imfktheme_register_storysplat_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_storysplat_template',
		'title'    => 'Storysplat Settings',
		'fields'   => array(
			array(
				'key'           => 'field_storysplat_scene_id',
				'label'         => 'Storysplat Scene ID',
				'name'          => 'storysplat_scene_id',
				'type'          => 'text',
				'instructions'  => 'Enter your Storysplat Scene ID (required). Get this from your Storysplat dashboard under "Developer Export".',
				'required'      => 1,
				'default_value' => '',
				'placeholder'   => 'e.g., abc123xyz',
			),
			array(
				'key'           => 'field_storysplat_height',
				'label'         => 'Viewer Height',
				'name'          => 'storysplat_height',
				'type'          => 'text',
				'instructions'  => 'Height of the 3D viewer (e.g., "600px", "80vh"). Default: 600px',
				'required'      => 0,
				'default_value' => '600px',
				'placeholder'   => '600px',
			),
			array(
				'key'           => 'field_storysplat_autoplay',
				'label'         => 'Auto-play Tour',
				'name'          => 'storysplat_autoplay',
				'type'          => 'true_false',
				'instructions'  => 'Automatically start tour playback when the viewer loads.',
				'required'      => 0,
				'default_value' => 0,
				'ui'            => 1,
			),
			array(
				'key'           => 'field_storysplat_showui',
				'label'         => 'Show Navigation Controls',
				'name'          => 'storysplat_showui',
				'type'          => 'true_false',
				'instructions'  => 'Show navigation controls (play/pause, waypoint navigation).',
				'required'      => 0,
				'default_value' => 1,
				'ui'            => 1,
			),
			array(
				'key'           => 'field_storysplat_lazyload',
				'label'         => 'Lazy Load',
				'name'          => 'storysplat_lazyload',
				'type'          => 'true_false',
				'instructions'  => 'Show thumbnail first, load full viewer on click. Improves page load performance.',
				'required'      => 0,
				'default_value' => 0,
				'ui'            => 1,
			),
			array(
				'key'           => 'field_storysplat_class',
				'label'         => 'Custom CSS Class',
				'name'          => 'storysplat_class',
				'type'          => 'text',
				'instructions'  => 'Optional: Add a custom CSS class for additional styling.',
				'required'      => 0,
				'default_value' => '',
				'placeholder'   => 'my-custom-class',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'template-storysplat.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => array(),
	) );
}
add_action( 'acf/init', 'imfktheme_register_storysplat_fields' );
