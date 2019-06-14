<?php
// Register Custom Post Type Press Mention
function create_pressmention_cpt() {

	$labels = array(
		'name' => _x( 'Press Mentions', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Press Mention', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Press Mentions', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Press Mention', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Press Mention Archives', 'textdomain' ),
		'attributes' => __( 'Press Mention Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Press Mention:', 'textdomain' ),
		'all_items' => __( 'All Press Mentions', 'textdomain' ),
		'add_new_item' => __( 'Add New Press Mention', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Press Mention', 'textdomain' ),
		'edit_item' => __( 'Edit Press Mention', 'textdomain' ),
		'update_item' => __( 'Update Press Mention', 'textdomain' ),
		'view_item' => __( 'View Press Mention', 'textdomain' ),
		'view_items' => __( 'View Press Mentions', 'textdomain' ),
		'search_items' => __( 'Search Press Mention', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Press Mention', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Press Mention', 'textdomain' ),
		'items_list' => __( 'Press Mentions list', 'textdomain' ),
		'items_list_navigation' => __( 'Press Mentions list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Press Mentions list', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'press',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Press Mention', 'textdomain' ),
		'description' => __( 'Probably Fake News', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks'),
		'taxonomies' => array(),
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
		'query_var' => 'press',
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'pressmention', $args );

}
add_action( 'init', 'create_pressmention_cpt', 0 );

?>
