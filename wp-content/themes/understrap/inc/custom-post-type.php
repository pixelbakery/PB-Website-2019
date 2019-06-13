<?php
if ( ! function_exists('cpt_awards') ) {

// Register Custom Post Type
function cpt_awards() {

	$labels = array(
		'name'                  => _x( 'Awards', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Award', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Awards', 'text_domain' ),
		'name_admin_bar'        => __( 'Awards', 'text_domain' ),
		'archives'              => __( 'awards', 'text_domain' ),
		'attributes'            => __( 'Award Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Award:', 'text_domain' ),
		'all_items'             => __( 'All Awards', 'text_domain' ),
		'add_new_item'          => __( 'Add New Award', 'text_domain' ),
		'add_new'               => __( 'Add New Award', 'text_domain' ),
		'new_item'              => __( 'New Award', 'text_domain' ),
		'edit_item'             => __( 'Edit Award', 'text_domain' ),
		'update_item'           => __( 'Update Award', 'text_domain' ),
		'view_item'             => __( 'View Award', 'text_domain' ),
		'view_items'            => __( 'View Award', 'text_domain' ),
		'search_items'          => __( 'Awards', 'text_domain' ),
		'not_found'             => __( 'Award Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this award', 'text_domain' ),
		'items_list'            => __( 'awards list', 'text_domain' ),
		'items_list_navigation' => __( 'awards list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter awards list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Award', 'text_domain' ),
		'description'           => __( 'Awards Won', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'awards_tax' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'            => array( 'slug' => 'award' ),
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'awards_', $args );

}
add_action( 'init', 'cpt_awards', 0 );

}
if ( ! function_exists( 'awards_tax_issuer' ) ) {

// Register Custom Taxonomy
function awards_tax_issuer() {

	$labels = array(
		'name'                       => 'Award Issuers',
		'singular_name'              => 'Award Issuer',
		'menu_name'                  => 'Award Issuer',
		'all_items'                  => 'All Issuers',
		'parent_item'                => 'Parent Issuer',
		'parent_item_colon'          => 'Parent Issuer:',
		'new_item_name'              => 'New Award Issuer',
		'add_new_item'               => 'Add New Award Issuer',
		'edit_item'                  => 'Edit Award Issuer',
		'update_item'                => 'Update Award Issuer',
		'view_item'                  => 'View Award Issuer',
		'separate_items_with_commas' => 'Separate Issuers with commas',
		'add_or_remove_items'        => 'Add or remove Issuers',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Issuers',
		'search_items'               => 'Search Terms',
		'not_found'                  => 'No Issuer Found',
		'no_terms'                   => 'No Issuers',
		'items_list'                 => 'Award Issuer List',
		'items_list_navigation'      => 'Award Issuer list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'awards_issuer', array( 'awards_' ), $args );

}
add_action( 'init', 'awards_tax_issuer', 0 );

}
