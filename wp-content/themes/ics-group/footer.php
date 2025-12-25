<?php
/**
 * The footer template
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="grid grid-cols-4 mb-8">
				<div>
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/images/logo.png' ); ?>"
							alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo mb-4">
					<?php endif; ?>
					<p><?php bloginfo( 'description' ); ?></p>
				</div>
				<div>
					<h3><?php esc_html_e( 'Services', 'ics-group' ); ?></h3>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/what-we-do' ) ); ?>"><?php esc_html_e( 'Audit & Compliance', 'ics-group' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/what-we-do' ) ); ?>"><?php esc_html_e( 'VA & Pen-Testing', 'ics-group' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/what-we-do' ) ); ?>"><?php esc_html_e( 'Managed Services', 'ics-group' ); ?></a></li>
					</ul>
				</div>
				<div>
					<h3><?php esc_html_e( 'Resources', 'ics-group' ); ?></h3>
					<ul>
						<?php
						$types = ics_group_get_resource_types();
						$resources_url = get_post_type_archive_link( 'resource' );
						if ( ! empty( $types ) && $resources_url ) :
							foreach ( array_slice( $types, 0, 3 ) as $type ) :
						?>
							<li>
								<a href="<?php echo esc_url( get_term_link( $type ) ); ?>">
									<?php echo esc_html( $type->name ); ?>
								</a>
							</li>
						<?php
							endforeach;
						else :
						?>
							<li><a href="<?php echo esc_url( $resources_url ? $resources_url : '#' ); ?>"><?php esc_html_e( 'All Resources', 'ics-group' ); ?></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div>
					<h3><?php esc_html_e( 'Connect', 'ics-group' ); ?></h3>
					<div class="social-links">
						<?php
						// You can make these dynamic through the customizer
						$linkedin_url = get_theme_mod( 'ics_group_linkedin_url', '#' );
						$github_url   = get_theme_mod( 'ics_group_github_url', '#' );
						?>
						<a href="<?php echo esc_url( $linkedin_url ); ?>" aria-label="<?php esc_attr_e( 'LinkedIn', 'ics-group' ); ?>" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/linkedin.svg' ); ?>"
								alt="<?php esc_attr_e( 'LinkedIn', 'ics-group' ); ?>" class="social-icon">
						</a>
						<a href="<?php echo esc_url( $github_url ); ?>" aria-label="<?php esc_attr_e( 'GitHub', 'ics-group' ); ?>" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/github.svg' ); ?>"
								alt="<?php esc_attr_e( 'GitHub', 'ics-group' ); ?>" class="social-icon">
						</a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<p>
					<?php
					printf(
						/* translators: %1$s: current year, %2$s: site name */
						esc_html__( '© %1$s %2$s. All Rights Reserved.', 'ics-group' ),
						esc_html( gmdate( 'Y' ) ),
						esc_html( get_bloginfo( 'name' ) )
					);
					?>
				</p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
