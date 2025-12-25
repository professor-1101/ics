<?php
/**
 * ICS Group Theme Functions
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' )) {
	exit; // Exit if accessed directly
}

/**
 * Define Constants
 */
define( 'ICS_GROUP_VERSION', '1.0.0' );
define( 'ICS_GROUP_THEME_DIR', get_template_directory() );
define( 'ICS_GROUP_THEME_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function ics_group_setup() {
	// Translation support
	load_theme_textdomain( 'ics-group', ICS_GROUP_THEME_DIR . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add image sizes
	add_image_size( 'resource-thumbnail', 400, 300, true );
	add_image_size( 'resource-featured', 800, 500, true );
	add_image_size( 'resource-detail', 1200, 600, true );

	// Register navigation menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'ics-group' ),
		'footer'  => esc_html__( 'Footer Menu', 'ics-group' ),
	) );

	// Switch default core markup to output valid HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Add theme support for selective refresh for widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Add support for responsive embeds
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/styles.css' );

	// Add support for wide and full alignments
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'ics_group_setup' );

/**
 * Set the content width in pixels
 */
function ics_group_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ics_group_content_width', 1280 );
}
add_action( 'after_setup_theme', 'ics_group_content_width', 0 );

/**
 * Enqueue scripts and styles
 */
function ics_group_enqueue_scripts() {
	// Google Fonts
	wp_enqueue_style(
		'ics-group-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Zen+Dots&display=swap',
		array(),
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'ics-group-styles',
		ICS_GROUP_THEME_URI . '/assets/css/styles.css',
		array(),
		ICS_GROUP_VERSION
	);

	// Main JavaScript
	wp_enqueue_script(
		'ics-group-script',
		ICS_GROUP_THEME_URI . '/assets/js/script.js',
		array(),
		ICS_GROUP_VERSION,
		true
	);

	// Localize script for AJAX
	wp_localize_script( 'ics-group-script', 'icsGroup', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'ics-group-nonce' ),
		'homeUrl' => esc_url( home_url( '/' ) ),
	) );

	// Comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ics_group_enqueue_scripts' );

/**
 * Include required files
 */
require_once ICS_GROUP_THEME_DIR . '/inc/custom-post-types.php';
require_once ICS_GROUP_THEME_DIR . '/inc/template-functions.php';
require_once ICS_GROUP_THEME_DIR . '/inc/ajax-handlers.php';

/**
 * Add custom body classes
 */
function ics_group_body_classes( $classes ) {
	// Add class of hfeed to non-singular pages
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class of no-sidebar when there is no sidebar
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'ics_group_body_classes' );

/**
 * Excerpt length
 */
function ics_group_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'ics_group_excerpt_length' );

/**
 * Excerpt more
 */
function ics_group_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'ics_group_excerpt_more' );

/**
 * Custom logo class
 */
function ics_group_custom_logo() {
	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {
		echo '<a href="' . esc_url( home_url( '/' ) ) . '">';
		echo '<img src="' . esc_url( ICS_GROUP_THEME_URI . '/assets/images/logo.png' ) . '" ';
		echo 'alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="logo">';
		echo '</a>';
	}
}

/**
 * Pagination
 */
function ics_group_pagination() {
	global $wp_query;

	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	// Add current page to the array
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	// Add the pages around the current page to the array
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination-container">' . "\n";

	// Previous Post Link
	if ( get_previous_posts_link() ) {
		printf( '<button class="pagination-btn">%s</button>' . "\n", get_previous_posts_link( '← ' . __( 'Previous', 'ics-group' ) ) );
	}

	echo '<div class="page-numbers">' . "\n";

	// Link to first page, plus ellipses if necessary
	if ( ! in_array( 1, $links, true ) ) {
		$class = 1 === $paged ? ' active' : '';
		printf( '<a class="page-number%s" href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links, true ) ) {
			echo '<span class="page-number">…</span>';
		}
	}

	// Link to current page, plus 2 pages in either direction if necessary
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged === $link ? ' active' : '';
		printf( '<a class="page-number%s" href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	// Link to last page, plus ellipses if necessary
	if ( ! in_array( $max, $links, true ) ) {
		if ( ! in_array( $max - 1, $links, true ) ) {
			echo '<span class="page-number">…</span>' . "\n";
		}

		$class = $paged === $max ? ' active' : '';
		printf( '<a class="page-number%s" href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	echo '</div>' . "\n";

	// Next Post Link
	if ( get_next_posts_link() ) {
		printf( '<button class="pagination-btn">%s</button>' . "\n", get_next_posts_link( __( 'Next', 'ics-group' ) . ' →' ) );
	}

	echo '</div>' . "\n";
}

/**
 * Add async/defer attributes to enqueued scripts
 */
function ics_group_script_loader_tag( $tag, $handle ) {
	// Add handles to this array for async loading
	$async_scripts = array(
		'ics-group-script',
	);

	if ( in_array( $handle, $async_scripts, true ) ) {
		return str_replace( ' src', ' defer src', $tag );
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'ics_group_script_loader_tag', 10, 2 );
