<?php
/**
 * The template for displaying archive pages
 *
 * @package ICS_Group
 * @since 1.0.0
 */

get_header();
?>

<main>
	<?php if ( have_posts() ) : ?>

		<section class="hero">
			<div class="container">
				<h1 class="font-heading">
					<?php
					the_archive_title();
					?>
				</h1>
				<?php
				the_archive_description( '<p class="card-text">', '</p>' );
				?>
			</div>
		</section>

		<section class="section bg-white">
			<div class="container">
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
								<span class="resource-badge">
									<?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?>
								</span>

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
			</div>
		</section>

	<?php else : ?>

		<section class="section bg-white">
			<div class="container text-center">
				<h2><?php esc_html_e( 'Nothing Found', 'ics-group' ); ?></h2>
				<p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'ics-group' ); ?></p>
			</div>
		</section>

	<?php endif; ?>
</main>

<?php
get_footer();
