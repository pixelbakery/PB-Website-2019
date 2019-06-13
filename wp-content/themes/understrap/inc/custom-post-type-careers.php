<?php
if ( ! function_exists('create_futurebakers_cpt') ) {

// Register Custom Post Type
// Register Custom Post Type Future Bakers
function create_futurebakers_cpt() {

	$labels = array(
		'name' => _x( 'Future Bakers', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Future Bakers', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Future Bakers', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Future Bakers', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Future Bakers Archives', 'textdomain' ),
		'attributes' => __( 'Future Bakers Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Future Bakers:', 'textdomain' ),
		'all_items' => __( 'All Future Bakers', 'textdomain' ),
		'add_new_item' => __( 'Add New Future Bakers', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Future Bakers', 'textdomain' ),
		'edit_item' => __( 'Edit Future Bakers', 'textdomain' ),
		'update_item' => __( 'Update Future Bakers', 'textdomain' ),
		'view_item' => __( 'View Future Bakers', 'textdomain' ),
		'view_items' => __( 'View Future Bakers', 'textdomain' ),
		'search_items' => __( 'Search Future Bakers', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Future Bakers', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Future Bakers', 'textdomain' ),
		'items_list' => __( 'Future Bakers list', 'textdomain' ),
		'items_list_navigation' => __( 'Future Bakers list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Future Bakers list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Future Bakers', 'textdomain' ),
		'description' => __( 'Open and Closed Positions at PB', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'revisions'),
		'taxonomies' => array('careers_position_type', 'careers_filled', 'careers_time', 'careers_position_level'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'cpt_careers', $args );

}
add_action( 'init', 'create_futurebakers_cpt', 0 );
}
// Register Taxonomy Position Type
function create_positiontype_tax() {

	$labels = array(
		'name'              => _x( 'Position Types', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Position Type', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Position Types', 'textdomain' ),
		'all_items'         => __( 'All Position Types', 'textdomain' ),
		'parent_item'       => __( 'Parent Position Type', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Position Type:', 'textdomain' ),
		'edit_item'         => __( 'Edit Position Type', 'textdomain' ),
		'update_item'       => __( 'Update Position Type', 'textdomain' ),
		'add_new_item'      => __( 'Add New Position Type', 'textdomain' ),
		'new_item_name'     => __( 'New Position Type Name', 'textdomain' ),
		'menu_name'         => __( 'Position Types', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '(designer, account executive, etc)', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'careers_position_type', array('cpt_careers'), $args );

}
add_action( 'init', 'create_positiontype_tax' );
