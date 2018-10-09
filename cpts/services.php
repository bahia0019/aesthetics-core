<?php
/**
 * Services Post Type
 *
 * @package    Aesthetics_Core
 * @subpackage Aesthetics_Core/cpts
 */

register_post_type( 'services',
	array(
		'labels'              => array(
			'name'               => __( 'Services', 'aescore' ),
			'singular_name'      => __( 'Service', 'aescore' ),
			'all_items'          => __( 'All Custom Services', 'aescore' ),
			'add_new'            => __( 'Add New', 'aescore' ),
			'add_new_item'       => __( 'Add New Service', 'aescore' ),
			'edit'               => __( 'Edit', 'aescore' ),
			'edit_item'          => __( 'Edit Service', 'aescore' ),
			'new_item'           => __( 'New Service', 'aescore' ),
			'view_item'          => __( 'View Service', 'aescore' ),
			'search_items'       => __( 'Search Services', 'aescore' ),
			'not_found'          => __( 'Nothing found in the Database.', 'aescore' ),
			'not_found_in_trash' => __( 'Nothing found in Trash', 'aescore' ),
			'parent_item_colon'  => '',
		),
		'description'         => __( 'This is the example Service', 'aescore' ),
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'menu_position'       => 21,
		'menu_icon'           => 'dashicons-format-gallery',
		'rewrite'             => array(
			'slug'       => 'services',
			'with_front' => true,
		),
		'has_archive'         => false,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'revisions' ),
		'show_in_rest'        => true,
	)
);

register_taxonomy_for_object_type( 'category', 'services' );
