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
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'pages_category' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'pages_category' ),
		'menu_name'                  => __( 'Categories', 'pages_category' ),
		'all_items'                  => __( 'All Categories', 'pages_category' ),
		'parent_item'                => __( 'Parent Categories', 'pages_category' ),
		'parent_item_colon'          => __( 'Parent Categories:', 'pages_category' ),
		'new_item_name'              => __( 'New Category', 'pages_category' ),
		'add_new_item'               => __( 'Add New Category', 'pages_category' ),
		'edit_item'                  => __( 'Edit Category', 'pages_category' ),
		'update_item'                => __( 'Update Category', 'pages_category' ),
		'view_item'                  => __( 'View Category', 'pages_category' ),
		'separate_items_with_commas' => __( 'Separate Category with commas', 'pages_category' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'pages_category' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'pages_category' ),
		'popular_items'              => __( 'Popular Categories', 'pages_category' ),
		'search_items'               => __( 'Search Categories', 'pages_category' ),
		'not_found'                  => __( 'Not Found', 'Categories' ),
		'no_terms'                   => __( 'No Categories', 'pages_category' ),
		'items_list'                 => __( 'Categories list', 'pages_category' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'pages_category' ),
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
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'page_tag' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'page_tag' ),
		'menu_name'                  => __( 'Tags', 'page_tag' ),
		'all_items'                  => __( 'All Tags', 'page_tag' ),
		'parent_item'                => __( 'Parent Tags', 'page_tag' ),
		'parent_item_colon'          => __( 'Parent Tags:', 'page_tag' ),
		'new_item_name'              => __( 'New Tag', 'page_tag' ),
		'add_new_item'               => __( 'Add New Tag', 'page_tag' ),
		'edit_item'                  => __( 'Edit Tag', 'page_tag' ),
		'update_item'                => __( 'Update Tag', 'page_tag' ),
		'view_item'                  => __( 'View Tag', 'page_tag' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'page_tag' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'page_tag' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'page_tag' ),
		'popular_items'              => __( 'Popular Tags', 'page_tag' ),
		'search_items'               => __( 'Search Tags', 'page_tag' ),
		'not_found'                  => __( 'Not Found', 'page_tag' ),
		'no_terms'                   => __( 'No Tags', 'page_tag' ),
		'items_list'                 => __( 'Tags list', 'page_tag' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'page_tag' ),
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
