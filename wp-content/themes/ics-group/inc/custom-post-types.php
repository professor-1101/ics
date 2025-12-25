<?php
/**
 * Custom Post Types
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Register Resources Custom Post Type
 */
function ics_group_register_resources() {
	$labels = array(
		'name'                  => _x( 'Resources', 'Post type general name', 'ics-group' ),
		'singular_name'         => _x( 'Resource', 'Post type singular name', 'ics-group' ),
		'menu_name'             => _x( 'Resources', 'Admin Menu text', 'ics-group' ),
		'name_admin_bar'        => _x( 'Resource', 'Add New on Toolbar', 'ics-group' ),
		'add_new'               => __( 'Add New', 'ics-group' ),
		'add_new_item'          => __( 'Add New Resource', 'ics-group' ),
		'new_item'              => __( 'New Resource', 'ics-group' ),
		'edit_item'             => __( 'Edit Resource', 'ics-group' ),
		'view_item'             => __( 'View Resource', 'ics-group' ),
		'all_items'             => __( 'All Resources', 'ics-group' ),
		'search_items'          => __( 'Search Resources', 'ics-group' ),
		'parent_item_colon'     => __( 'Parent Resources:', 'ics-group' ),
		'not_found'             => __( 'No resources found.', 'ics-group' ),
		'not_found_in_trash'    => __( 'No resources found in Trash.', 'ics-group' ),
		'featured_image'        => _x( 'Resource Cover Image', 'Overrides the "Featured Image" phrase', 'ics-group' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the "Set featured image" phrase', 'ics-group' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the "Remove featured image" phrase', 'ics-group' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the "Use as featured image" phrase', 'ics-group' ),
		'archives'              => _x( 'Resource archives', 'The post type archive label', 'ics-group' ),
		'insert_into_item'      => _x( 'Insert into resource', 'Overrides the "Insert into post"', 'ics-group' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this resource', 'Overrides the "Uploaded to this post"', 'ics-group' ),
		'filter_items_list'     => _x( 'Filter resources list', 'Screen reader text', 'ics-group' ),
		'items_list_navigation' => _x( 'Resources list navigation', 'Screen reader text', 'ics-group' ),
		'items_list'            => _x( 'Resources list', 'Screen reader text', 'ics-group' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'resources' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-media-document',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
		'show_in_rest'       => true, // Enable Gutenberg editor
		'rest_base'          => 'resources',
		'taxonomies'         => array( 'resource_type' ),
	);

	register_post_type( 'resource', $args );
}
add_action( 'init', 'ics_group_register_resources' );

/**
 * Register Resource Type Taxonomy
 */
function ics_group_register_resource_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Resource Types', 'taxonomy general name', 'ics-group' ),
		'singular_name'              => _x( 'Resource Type', 'taxonomy singular name', 'ics-group' ),
		'search_items'               => __( 'Search Resource Types', 'ics-group' ),
		'popular_items'              => __( 'Popular Resource Types', 'ics-group' ),
		'all_items'                  => __( 'All Resource Types', 'ics-group' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Resource Type', 'ics-group' ),
		'update_item'                => __( 'Update Resource Type', 'ics-group' ),
		'add_new_item'               => __( 'Add New Resource Type', 'ics-group' ),
		'new_item_name'              => __( 'New Resource Type Name', 'ics-group' ),
		'separate_items_with_commas' => __( 'Separate resource types with commas', 'ics-group' ),
		'add_or_remove_items'        => __( 'Add or remove resource types', 'ics-group' ),
		'choose_from_most_used'      => __( 'Choose from the most used resource types', 'ics-group' ),
		'not_found'                  => __( 'No resource types found.', 'ics-group' ),
		'menu_name'                  => __( 'Resource Types', 'ics-group' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'resource-type' ),
		'show_in_rest'          => true,
		'rest_base'             => 'resource-types',
	);

	register_taxonomy( 'resource_type', array( 'resource' ), $args );
}
add_action( 'init', 'ics_group_register_resource_taxonomy' );

/**
 * Add default resource types on theme activation
 */
function ics_group_add_default_resource_types() {
	// Check if terms already exist
	if ( ! get_option( 'ics_group_default_terms_added' ) ) {
		$terms = array(
			'Blog'        => 'Insightful articles about OT/ICS security',
			'Whitepaper'  => 'In-depth technical documents and guides',
			'Case Study'  => 'Real-world security implementation examples',
			'Report'      => 'Industry reports and threat analyses',
		);

		foreach ( $terms as $term => $description ) {
			if ( ! term_exists( $term, 'resource_type' ) ) {
				wp_insert_term(
					$term,
					'resource_type',
					array(
						'description' => $description,
						'slug'        => sanitize_title( $term ),
					)
				);
			}
		}

		// Set option to prevent re-adding terms
		update_option( 'ics_group_default_terms_added', true );
	}
}
add_action( 'after_switch_theme', 'ics_group_add_default_resource_types' );

/**
 * Flush rewrite rules on theme activation
 */
function ics_group_rewrite_flush() {
	ics_group_register_resources();
	ics_group_register_resource_taxonomy();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'ics_group_rewrite_flush' );

/**
 * Set posts per page for resource archive
 */
function ics_group_posts_per_page( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'resource' ) ) {
		$query->set( 'posts_per_page', 20 );
	}
}
add_action( 'pre_get_posts', 'ics_group_posts_per_page' );
