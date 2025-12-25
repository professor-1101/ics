<?php
/**
 * Template Functions
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Get resource type badge
 *
 * @param int $post_id Post ID.
 * @return string
 */
function ics_group_get_resource_badge( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$terms = get_the_terms( $post_id, 'resource_type' );

	if ( $terms && ! is_wp_error( $terms ) ) {
		$term = array_shift( $terms );
		return '<span class="resource-badge">' . esc_html( $term->name ) . '</span>';
	}

	return '';
}

/**
 * Display resource type badge
 *
 * @param int $post_id Post ID.
 */
function ics_group_resource_badge( $post_id = null ) {
	echo wp_kses_post( ics_group_get_resource_badge( $post_id ) );
}

/**
 * Get reading time estimate
 *
 * @param int $post_id Post ID.
 * @return string
 */
function ics_group_get_reading_time( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$content = get_post_field( 'post_content', $post_id );
	$word_count = str_word_count( strip_tags( $content ) );
	$reading_time = ceil( $word_count / 200 ); // Average reading speed: 200 words per minute

	if ( $reading_time < 1 ) {
		$reading_time = 1;
	}

	/* translators: %d: reading time in minutes */
	return sprintf( _n( '%d min read', '%d min read', $reading_time, 'ics-group' ), $reading_time );
}

/**
 * Display reading time
 *
 * @param int $post_id Post ID.
 */
function ics_group_reading_time( $post_id = null ) {
	echo esc_html( ics_group_get_reading_time( $post_id ) );
}

/**
 * Get resource type slug
 *
 * @param int $post_id Post ID.
 * @return string
 */
function ics_group_get_resource_type_slug( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$terms = get_the_terms( $post_id, 'resource_type' );

	if ( $terms && ! is_wp_error( $terms ) ) {
		$term = array_shift( $terms );
		return $term->slug;
	}

	return '';
}

/**
 * Get related resources
 *
 * @param int $post_id Post ID.
 * @param int $limit Number of posts to return.
 * @return WP_Query|false
 */
function ics_group_get_related_resources( $post_id = null, $limit = 3 ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$terms = get_the_terms( $post_id, 'resource_type' );

	if ( ! $terms || is_wp_error( $terms ) ) {
		return false;
	}

	$term_ids = wp_list_pluck( $terms, 'term_id' );

	$args = array(
		'post_type'      => 'resource',
		'posts_per_page' => $limit,
		'post__not_in'   => array( $post_id ),
		'tax_query'      => array(
			array(
				'taxonomy' => 'resource_type',
				'field'    => 'term_id',
				'terms'    => $term_ids,
			),
		),
		'orderby'        => 'rand',
	);

	return new WP_Query( $args );
}

/**
 * Get featured resource
 *
 * @return WP_Post|false
 */
function ics_group_get_featured_resource() {
	// You could add a custom field to mark a resource as featured
	// For now, just get the most recent resource
	$args = array(
		'post_type'      => 'resource',
		'posts_per_page' => 1,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		$query->the_post();
		$post = get_post();
		wp_reset_postdata();
		return $post;
	}

	return false;
}

/**
 * Get SVG icon
 *
 * @param string $icon Icon name.
 * @return string
 */
function ics_group_get_svg_icon( $icon ) {
	$icons = array(
		'search' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path></svg>',
		'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>',
		'arrow-left' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>',
	);

	return isset( $icons[ $icon ] ) ? $icons[ $icon ] : '';
}

/**
 * Display SVG icon
 *
 * @param string $icon Icon name.
 */
function ics_group_svg_icon( $icon ) {
	echo wp_kses( ics_group_get_svg_icon( $icon ), array(
		'svg' => array(
			'xmlns' => array(),
			'width' => array(),
			'height' => array(),
			'viewBox' => array(),
			'fill' => array(),
			'stroke' => array(),
			'stroke-width' => array(),
		),
		'circle' => array(
			'cx' => array(),
			'cy' => array(),
			'r' => array(),
		),
		'path' => array(
			'd' => array(),
		),
	) );
}

/**
 * Get all resource types for filter
 *
 * @return array
 */
function ics_group_get_resource_types() {
	$types = get_terms( array(
		'taxonomy'   => 'resource_type',
		'hide_empty' => true,
	) );

	if ( ! is_wp_error( $types ) && ! empty( $types ) ) {
		return $types;
	}

	return array();
}

/**
 * Custom excerpt with word limit
 *
 * @param int $limit Word limit.
 * @param int $post_id Post ID.
 * @return string
 */
function ics_group_custom_excerpt( $limit = 20, $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$excerpt = get_the_excerpt( $post_id );
	return wp_trim_words( $excerpt, $limit, '...' );
}
