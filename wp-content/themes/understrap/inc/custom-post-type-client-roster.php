<?php // Register Custom Post Type Client Roster
function create_clientroster_cpt() {

	$labels = array(
		'name' => _x( 'Client Roster', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Client Roster', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Client Roster', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Client Roster', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Client Roster Archives', 'textdomain' ),
		'attributes' => __( 'Client Roster Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Client Roster:', 'textdomain' ),
		'all_items' => __( 'All Client Roster', 'textdomain' ),
		'add_new_item' => __( 'Add New Client Roster', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Client Roster', 'textdomain' ),
		'edit_item' => __( 'Edit Client Roster', 'textdomain' ),
		'update_item' => __( 'Update Client Roster', 'textdomain' ),
		'view_item' => __( 'View Client Roster', 'textdomain' ),
		'view_items' => __( 'View Client Roster', 'textdomain' ),
		'search_items' => __( 'Search Client Roster', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Client Roster', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Client Roster', 'textdomain' ),
		'items_list' => __( 'Client Roster list', 'textdomain' ),
		'items_list_navigation' => __( 'Client Roster list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Client Roster list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Client Roster', 'textdomain' ),
		'description' => __( 'A list of PBs clients', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-store',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => false,
	);
	register_post_type( 'clientroster', $args );

}
add_action( 'init', 'create_clientroster_cpt', 0 );
