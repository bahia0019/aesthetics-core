<?php
/**
 * Case Study Post Type
 *
 * @package    Aesthetics_Core
 * @subpackage Aesthetics_Core/cpts
 */

register_post_type( 'case-study',
	array(
		'labels'              => array(
			'name'               => __( 'Case Study', 'aescore' ),
			'singular_name'      => __( 'Case Study', 'aescore' ),
			'all_items'          => __( 'All Case Studies', 'aescore' ),
			'add_new'            => __( 'Add New', 'aescore' ),
			'add_new_item'       => __( 'Add New Case Study', 'aescore' ),
			'edit'               => __( 'Edit', 'aescore' ),
			'edit_item'          => __( 'Edit Case Study', 'aescore' ),
			'new_item'           => __( 'New Case Study', 'aescore' ),
			'view_item'          => __( 'View Case Study', 'aescore' ),
			'search_items'       => __( 'Search Case Study', 'aescore' ),
			'not_found'          => __( 'Nothing found in the Database.', 'aescore' ),
			'not_found_in_trash' => __( 'Nothing found in Trash', 'aescore' ),
			'parent_item_colon'  => '',
		),
		'description'         => __( 'This is the example Case Study', 'aescore' ),
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'menu_position'       => 22,
		'menu_icon'           => 'dashicons-analytics',
		'rewrite'             => array(
			'slug'       => 'case-study',
			'with_front' => true,
		),
		'has_archive'         => false,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'revisions' ),
		'show_in_rest'        => true,
	)
);

register_taxonomy_for_object_type( 'category', 'case-study' );
