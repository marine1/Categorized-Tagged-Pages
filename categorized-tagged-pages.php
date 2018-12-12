<?php
/* Plugin info
Plugin Name: Categorized & Tagged Pages 
Description: "Categorized & Tagged Pages" plugin allows you to quickly add Categories and Tags to your Wordpress Pages. 
Tags: page, category, category in page, tag in page, categories in page, tags in page, pages 
Version: 1.0
Author: Marine Gasparyan
Requires at least: 3.3
Tested up to: 5
Requires PHP: 5.6
Stable tag: 1.0
License: GPLv3
License: URL: https://www.gnu.org/licenses/gpl-3.0.en.html
Plugin URL:  

== Description ==
This plugin adds separated Categories and Tags Texonomies for pages. 

== Installation ==
Upload “Categorized & Tagged Pages” folder to the “/wp-content/plugins/” directory
Just activate the plugin through the “Plugins” menu in WordPress and it will add category and tag support to Wordpress Pages.

== Frequently Asked Questions ==
Upload “Categorized & Tagged Pages” folder to the “/wp-content/plugins/” directory
Just activate the plugin through the “Plugins” menu in WordPress and it will add category and tag support to Wordpress Pages.


== Screenshots ==
1. #
2. #
3. #
*/ 
if ( ! function_exists( 'my_ctp_categories' ) ) {

	// Register Custom Taxonomy
	function my_ctp_categories() {
	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Categories', 'text_domain' ),
		'all_items'                  => __( 'All Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Categories', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Categories:', 'text_domain' ),
		'new_item_name'              => __( 'New Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Category', 'text_domain' ),
		'update_item'                => __( 'Update Category', 'text_domain' ),
		'view_item'                  => __( 'View Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Category with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Categories', 'text_domain' ),
		'search_items'               => __( 'Search Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'Categories' ),
		'no_terms'                   => __( 'No Categories', 'text_domain' ),
		'items_list'                 => __( 'Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => true,
		'rewrite'                    => false,
		'show_in_rest'      		 => true,
	);
	register_taxonomy( 'myctp_categories', array( 'page' ), $args );

}
add_action( 'init', 'my_ctp_categories', 0 );

}
 
if ( ! function_exists( 'my_ctp_tags' ) ) {

	// Register Custom Taxonomy
function my_ctp_tags() {
 
	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tags', 'text_domain' ),
		'all_items'                  => __( 'All Tags', 'text_domain' ),
		'parent_item'                => __( 'Parent Tags', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Tags:', 'text_domain' ),
		'new_item_name'              => __( 'New Tag', 'text_domain' ),
		'add_new_item'               => __( 'Add New Tag', 'text_domain' ),
		'edit_item'                  => __( 'Edit Tag', 'text_domain' ),
		'update_item'                => __( 'Update Tag', 'text_domain' ),
		'view_item'                  => __( 'View Tag', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Tags', 'text_domain' ),
		'search_items'               => __( 'Search Tags', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Tags', 'text_domain' ),
		'items_list'                 => __( 'Tags list', 'text_domain' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => true,
		'rewrite'                    => false,
		'show_in_rest'      		 => true,
	);
	register_taxonomy( 'myctp_tags', array( 'page' ), $args );

}
add_action( 'init', 'my_ctp_tags', 0 );
}
