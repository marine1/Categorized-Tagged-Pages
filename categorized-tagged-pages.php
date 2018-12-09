<?php
/* Plugin info
Plugin Name: Categorized & Tagged Pages 
Description: "Categorized & Tagged Pages" plugin allows you to quickly add Categories and Tags to your Wordpress Pages. 
Tags: page, category, category in page, tag in page, categories in page, tags in page, page archive, pages 
Version: 1.0
Author: Marine Gasparyan
Requires at least: 3.3
Tested up to: 5
Requires PHP: 5.6
Stable tag: 1.0
License: GPL2
License: URL: https://www.gnu.org/licenses/gpl-3-0.html
Plugin URL:  

== Description ==
This plugin adds separated Categories and Tags Texonomies for pages. 

== Installation ==
Upload “Categorized & Tagged Pages” folder to the “/wp-content/plugins/” directory
Just activate the plugin through the “Plugins” menu in WordPress and it will add category and tag support to Wordpress Pages

== Frequently Asked Questions ==
Upload “Categorized & Tagged Pages” folder to the “/wp-content/plugins/” directory
Just activate the plugin through the “Plugins” menu in WordPress and it will add category and tag support to Wordpress Pages


== Screenshots ==
1. #
2. #
3. #
*/ 
// Register Custom Taxonomy
function pages_categories() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'page_categories' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'page_categories' ),
		'menu_name'                  => __( 'Categories', 'page_categories' ),
		'all_items'                  => __( 'All Categories', 'page_categories' ),
		'parent_item'                => __( 'Parent Categories', 'page_categories' ),
		'parent_item_colon'          => __( 'Parent Categories:', 'page_categories' ),
		'new_item_name'              => __( 'New Category', 'page_categories' ),
		'add_new_item'               => __( 'Add New Category', 'page_categories' ),
		'edit_item'                  => __( 'Edit Category', 'page_categories' ),
		'update_item'                => __( 'Update Category', 'page_categories' ),
		'view_item'                  => __( 'View Category', 'page_categories' ),
		'separate_items_with_commas' => __( 'Separate Category with commas', 'page_categories' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'page_categories' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'page_categories' ),
		'popular_items'              => __( 'Popular Categories', 'page_categories' ),
		'search_items'               => __( 'Search Categories', 'page_categories' ),
		'not_found'                  => __( 'Not Found', 'Categories' ),
		'no_terms'                   => __( 'No Categories', 'page_categories' ),
		'items_list'                 => __( 'Categories list', 'page_categories' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'page_categories' ),
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
	);
	register_taxonomy( 'pages_categories', array( 'page' ), $args );

}
add_action( 'init', 'pages_categories', 0 );

// Register Custom Taxonomy
function page_tags() {

	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'page_tags' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'page_tags' ),
		'menu_name'                  => __( 'Tags', 'page_tags' ),
		'all_items'                  => __( 'All Tags', 'page_tags' ),
		'parent_item'                => __( 'Parent Tags', 'page_tags' ),
		'parent_item_colon'          => __( 'Parent Tags:', 'page_tags' ),
		'new_item_name'              => __( 'New Tag', 'page_tags' ),
		'add_new_item'               => __( 'Add New Tag', 'page_tags' ),
		'edit_item'                  => __( 'Edit Tag', 'page_tags' ),
		'update_item'                => __( 'Update Tag', 'page_tags' ),
		'view_item'                  => __( 'View Tag', 'page_tags' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'page_tags' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'page_tags' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'page_tags' ),
		'popular_items'              => __( 'Popular Tags', 'page_tags' ),
		'search_items'               => __( 'Search Tags', 'page_tags' ),
		'not_found'                  => __( 'Not Found', 'page_tags' ),
		'no_terms'                   => __( 'No Tags', 'page_tags' ),
		'items_list'                 => __( 'Tags list', 'page_tags' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'page_tags' ),
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
	);
	register_taxonomy( 'page_tags', array( 'page' ), $args );

}
add_action( 'init', 'page_tags', 0 );