<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package ICS_Group
 * @since 1.0.0
 */

get_header();
?>

<main>
	<section class="hero">
		<div class="container text-center">
			<h1 class="font-heading" style="font-size: 6rem; margin-bottom: 1rem;">404</h1>
			<h2><?php esc_html_e( 'Page Not Found', 'ics-group' ); ?></h2>
			<p style="font-size: 1.25rem; margin: 2rem 0;">
				<?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'ics-group' ); ?>
			</p>
		</div>
	</section>

	<section class="section bg-white">
		<div class="container" style="max-width: 48rem;">
			<div class="text-center">
				<h3 class="font-heading"><?php esc_html_e( 'Try searching for what you need:', 'ics-group' ); ?></h3>
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="margin: 2rem 0;">
					<div class="search-container">
						<input type="search"
							   class="search-input"
							   placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'ics-group' ); ?>"
							   value="<?php echo esc_attr( get_search_query() ); ?>"
							   name="s"
							   title="<?php echo esc_attr_x( 'Search for:', 'label', 'ics-group' ); ?>" />
					</div>
					<button type="submit" class="btn btn-primary" style="margin-top: 1rem;">
						<?php esc_html_e( 'Search', 'ics-group' ); ?>
					</button>
				</form>
			</div>

			<div class="text-center" style="margin-top: 3rem;">
				<h3 class="font-heading"><?php esc_html_e( 'Or explore these pages:', 'ics-group' ); ?></h3>
				<div class="flex flex-wrap gap-4 justify-center" style="margin-top: 2rem;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
						<?php esc_html_e( 'Home', 'ics-group' ); ?>
					</a>
					<a href="<?php echo esc_url( get_post_type_archive_link( 'resource' ) ); ?>" class="btn btn-secondary">
						<?php esc_html_e( 'Resources', 'ics-group' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
						<?php esc_html_e( 'Contact Us', 'ics-group' ); ?>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
