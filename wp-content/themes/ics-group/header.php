<?php
/**
 * The header template
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header>
	<div class="container">
		<?php ics_group_custom_logo(); ?>

		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => 'nav',
			'menu_class'     => '',
			'fallback_cb'    => 'ics_group_fallback_menu',
		) );
		?>

		<button class="hamburger" aria-label="<?php esc_attr_e( 'Toggle menu', 'ics-group' ); ?>">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</header>

<!-- Mobile Menu -->
<div class="menu-overlay"></div>
<div class="mobile-menu">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container'      => 'nav',
		'menu_class'     => '',
		'fallback_cb'    => 'ics_group_fallback_menu',
	) );
	?>
</div>

<?php
/**
 * Fallback menu when no menu is assigned
 */
function ics_group_fallback_menu() {
	?>
	<nav>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">
			<?php esc_html_e( 'Home', 'ics-group' ); ?>
		</a>
		<?php
		// List pages
		$pages = get_pages( array(
			'sort_column' => 'menu_order',
			'number'      => 4,
		) );

		foreach ( $pages as $page ) {
			$active = is_page( $page->ID ) ? ' class="active"' : '';
			printf(
				'<a href="%s"%s>%s</a>',
				esc_url( get_permalink( $page->ID ) ),
				$active,
				esc_html( $page->post_title )
			);
		}

		// Resources archive
		$resources_archive = get_post_type_archive_link( 'resource' );
		if ( $resources_archive ) {
			$active = is_post_type_archive( 'resource' ) || is_singular( 'resource' ) ? ' class="active"' : '';
			printf(
				'<a href="%s"%s>%s</a>',
				esc_url( $resources_archive ),
				$active,
				esc_html__( 'Resources', 'ics-group' )
			);
		}
		?>
	</nav>
	<?php
}
