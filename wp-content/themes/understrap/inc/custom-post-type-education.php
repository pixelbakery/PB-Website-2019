<?php // Register Custom Post Type Education
function create_education_cpt() {

	$labels = array(
		'name' => _x( 'Education', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Education', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Education', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Education', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Education Archives', 'textdomain' ),
		'attributes' => __( 'Education Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Education:', 'textdomain' ),
		'all_items' => __( 'All Education', 'textdomain' ),
		'add_new_item' => __( 'Add New Education', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Education', 'textdomain' ),
		'edit_item' => __( 'Edit Education', 'textdomain' ),
		'update_item' => __( 'Update Education', 'textdomain' ),
		'view_item' => __( 'View Education', 'textdomain' ),
		'view_items' => __( 'View Education', 'textdomain' ),
		'search_items' => __( 'Search Education', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Education', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Education', 'textdomain' ),
		'items_list' => __( 'Education list', 'textdomain' ),
		'items_list_navigation' => __( 'Education list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Education list', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'education',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Education', 'textdomain' ),
		'description' => __( 'Tutorials and Classes ', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book-alt',
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
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'query_var' => 'education',
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'education', $args );

}
add_action( 'init', 'create_education_cpt', 0 );
?>
