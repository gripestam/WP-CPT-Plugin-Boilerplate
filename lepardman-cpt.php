<?php
/*
Plugin Name: lepardman Custom post types
Plugin URI: http://gripestam.se
Description: Registers Custom Post Types plugin
Version: 1.0.0
Author: Erik & Michael
Author URI: http://gripestam.se

See readme.txt for explanations
*/

load_plugin_textdomain('lepardman-CPT', false, basename( dirname( __FILE__ ) ) . '/languages' );

if (!class_exists('CPTbook')) {

	class CPTbook {
	
		// Init
		public function __construct() {
			add_action( 'init', array($this, 'register_custom_post') );		
		}
		
		function register_custom_post() {
		
			$labels = array( 
		        'name' => __('Books', 'lepardman-CPT'),
		        'singular_name' => __('Book', 'lepardman-CPT'),
		        'add_new' => __('Add new', 'lepardman-CPT'),
		        'add_new_item' => __('Add new book', 'lepardman-CPT'),
		        'edit_item' => __('Edit book', 'lepardman-CPT'),
		        'new_item' => __('New book', 'lepardman-CPT'),
		        'view_item' => __('Show book', 'lepardman-CPT'),
		        'search_items' => __('Search books', 'lepardman-CPT'),
		        'not_found' => __('No books found', 'lepardman-CPT'),
		        'not_found_in_trash' => __('No books found in trash', 'lepardman-CPT'),
		        'parent_item_colon' => __('Parent book:', 'lepardman-CPT'),
		        'menu_name' => __('Books', 'lepardman-CPT')
		    );
		
		    $args = array( 
		        'labels' => $labels,
		        'description' => __('Book example post type', 'lepardman-CPT'),
		        'public' => true,
		        'exclude_from_search' => false,
		        'publicly_queryable' => true,
		        'show_ui' => true,
		        'show_in_nav_menus' => true,
		        'show_in_menu' => true,
		        'show_in_admin_bar' => true,
		        'menu_position' => 20,
		        'menu_icon' => 'dashicons-format-chat',
		        'capability_type' => 'post',
		        'hierarchical' => false,
		        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		        'has_archive' => true,
		        'rewrite' => array('slug' => 'book', 'with_front' => false),
		        'query_var' => true,
		        'can_export' => true
		    );
			
		    register_post_type( 'book', $args );
		}
	}	

	$_CPTbook = new CPTbook();
}