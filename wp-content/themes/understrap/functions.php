<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/custom-post-type-awards.php',					// Load PB's award custom post types
	'/custom-post-type-careers.php',				// Load PB's Future Bakers custom post types
	'/custom-post-type-portfolio.php',			// Load PB's portfolio custom post types
	'/custom-post-type-team.php',						// Load PB's team custom post types
	'/custom-post-type-client-roster.php',	// Load PB's client roster custom post types
	'/custom-post-type-press-mentions.php',	// Load PB's press mentions custom post types
	'/custom-post-type-education.php',	// Load PB's press mentions custom post types
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

// Rename "posts" to "Mom's Recipes"
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Mom\'s Recipes';
    $submenu['edit.php'][5][0] = 'Mom\'s Recipes';
    $submenu['edit.php'][10][0] = 'Add New Recipe';
    $submenu['edit.php'][16][0] = 'Recipe Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Mom\'s Recipes';
    $labels->singular_name = 'Recipe';
    $labels->add_new = 'Add A Recipe';
    $labels->add_new_item = 'Add Recipe';
    $labels->edit_item = 'Edit Recipe';
    $labels->new_item = 'Recipe';
    $labels->view_item = 'View Recipe';
    $labels->search_items = 'Search Mom\'s Recipes';
    $labels->not_found = 'No Recipes Found';
    $labels->not_found_in_trash = 'No Recipes found in Trash';
    $labels->all_items = 'All Recipes';
    $labels->menu_name = 'Mom\'s Recipes';
    $labels->name_admin_bar = 'Mom\'s Recipes';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );// Rename "posts" to "Mom's Recipes"'


//Remove WordPress bullshit from admin bar
function admin_bar_remove_bullshit() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
		$wp_admin_bar->remove_menu( 'comments' );
}
add_action( 'wp_before_admin_bar_render', 'admin_bar_remove_bullshit', 0 );
