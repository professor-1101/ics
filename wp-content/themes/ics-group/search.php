<?php
/**
 * The template for displaying search results pages
 *
 * @package ICS_Group
 * @since 1.0.0
 */

get_header();
?>

<main>
	<section class="hero">
		<div class="container">
			<h1 class="font-heading">
				<?php
				printf(
					esc_html__( 'Search Results for: %s', 'ics-group' ),
					'<span style="color: var(--color-purple-700);">' . get_search_query() . '</span>'
				);
				?>
			</h1>
			<?php if ( have_posts() ) : ?>
				<p>
					<?php
					global $wp_query;
					printf(
						esc_html( _n( 'Found %s result', 'Found %s results', $wp_query->found_posts, 'ics-group' ) ),
						number_format_i18n( $wp_query->found_posts )
					);
					?>
				</p>
			<?php endif; ?>
		</div>
	</section>

	<section class="section bg-white">
		<div class="container">
			<?php if ( have_posts() ) : ?>

				<div class="grid grid-cols-3">
					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="card-image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'medium' ); ?>
									</a>
								</div>
							<?php endif; ?>

							<div class="p-6">
								<?php if ( 'resource' === get_post_type() ) : ?>
									<?php
									$terms = get_the_terms( get_the_ID(), 'resource_type' );
									if ( $terms && ! is_wp_error( $terms ) ) :
										$term = array_shift( $terms );
										?>
										<span class="resource-badge"><?php echo esc_html( $term->name ); ?></span>
									<?php endif; ?>
								<?php else : ?>
									<span class="resource-badge"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></span>
								<?php endif; ?>

								<h3 class="card-title font-heading">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

								<div class="card-text">
									<?php the_excerpt(); ?>
								</div>

								<p style="color: var(--color-gray-600); font-size: 0.875rem; margin-bottom: 1rem;">
									<?php echo esc_html( get_the_date() ); ?>
								</p>

								<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">
									<?php esc_html_e( 'Read More', 'ics-group' ); ?> →
								</a>
							</div>
						</article>
						<?php
					endwhile;
					?>
				</div>

				<?php ics_group_pagination(); ?>

			<?php else : ?>

				<div class="text-center" style="padding: 4rem 0;">
					<h2><?php esc_html_e( 'Nothing Found', 'ics-group' ); ?></h2>
					<p style="font-size: 1.25rem; margin: 2rem 0;">
						<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'ics-group' ); ?>
					</p>

					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="max-width: 32rem; margin: 2rem auto;">
						<div class="search-container">
							<input type="search"
								   class="search-input"
								   placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'ics-group' ); ?>"
								   value="<?php echo esc_attr( get_search_query() ); ?>"
								   name="s"
								   title="<?php echo esc_attr_x( 'Search for:', 'label', 'ics-group' ); ?>" />
						</div>
						<button type="submit" class="btn btn-primary" style="margin-top: 1rem;">
							<?php esc_html_e( 'Search Again', 'ics-group' ); ?>
						</button>
					</form>
				</div>

			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();
