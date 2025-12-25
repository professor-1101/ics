<?php
/**
 * AJAX Handlers
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * AJAX handler for resource filtering
 */
function ics_group_filter_resources() {
	// Verify nonce
	check_ajax_referer( 'ics-group-nonce', 'nonce' );

	// Get parameters
	$search = isset( $_POST['search'] ) ? sanitize_text_field( wp_unslash( $_POST['search'] ) ) : '';
	$type   = isset( $_POST['type'] ) ? sanitize_text_field( wp_unslash( $_POST['type'] ) ) : 'all';
	$paged  = isset( $_POST['paged'] ) ? absint( $_POST['paged'] ) : 1;

	// Setup query arguments
	$args = array(
		'post_type'      => 'resource',
		'posts_per_page' => 20,
		'paged'          => $paged,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	// Add search parameter
	if ( ! empty( $search ) ) {
		$args['s'] = $search;
	}

	// Add taxonomy filter
	if ( $type !== 'all' && $type !== 'All' ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'resource_type',
				'field'    => 'slug',
				'terms'    => $type,
			),
		);
	}

	// Execute query
	$query = new WP_Query( $args );

	// Prepare response
	$response = array(
		'found_posts' => $query->found_posts,
		'max_pages'   => $query->max_num_pages,
		'current_page' => $paged,
		'html'        => '',
	);

	// Generate HTML
	if ( $query->have_posts() ) {
		ob_start();
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'template-parts/content', 'resource' );
		}
		$response['html'] = ob_get_clean();
		wp_reset_postdata();
	} else {
		$response['html'] = '<div class="no-results"><h3>' . esc_html__( 'No resources found', 'ics-group' ) . '</h3><p>' . esc_html__( 'Try adjusting your search or filter to find what you\'re looking for.', 'ics-group' ) . '</p></div>';
	}

	wp_send_json_success( $response );
}
add_action( 'wp_ajax_filter_resources', 'ics_group_filter_resources' );
add_action( 'wp_ajax_nopriv_filter_resources', 'ics_group_filter_resources' );

/**
 * AJAX handler for contact form
 * Note: This is a basic implementation. Consider using Contact Form 7 or similar plugin for production.
 */
function ics_group_submit_contact_form() {
	// Verify nonce
	check_ajax_referer( 'ics-group-nonce', 'nonce' );

	// Sanitize inputs
	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	// Validate
	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( array(
			'message' => __( 'Please fill in all required fields.', 'ics-group' ),
		) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array(
			'message' => __( 'Please enter a valid email address.', 'ics-group' ),
		) );
	}

	// Prepare email
	$to      = get_option( 'admin_email' ); // Send to site admin email
	$subject = sprintf( __( 'Contact Form Submission from %s', 'ics-group' ), $name );
	$body    = sprintf(
		"Name: %s\nEmail: %s\nPhone: %s\nCompany: %s\n\nMessage:\n%s",
		$name,
		$email,
		$phone,
		$company,
		$message
	);
	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );

	// Send email
	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array(
			'message' => __( 'Thank you for your message. We will get back to you soon!', 'ics-group' ),
		) );
	} else {
		wp_send_json_error( array(
			'message' => __( 'Sorry, there was an error sending your message. Please try again later.', 'ics-group' ),
		) );
	}
}
add_action( 'wp_ajax_submit_contact_form', 'ics_group_submit_contact_form' );
add_action( 'wp_ajax_nopriv_submit_contact_form', 'ics_group_submit_contact_form' );
