<?php
/**
 * The template for displaying all single posts
 *
 * @package ICS_Group
 * @since 1.0.0
 */

get_header();
?>

<main>
	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="hero">
				<div class="container">
					<h1 class="font-heading"><?php the_title(); ?></h1>
					<p><?php echo esc_html( get_the_date() ); ?> • <?php the_category( ', ' ); ?></p>
				</div>
			</section>

			<?php if ( has_post_thumbnail() ) : ?>
				<section class="section-sm bg-white">
					<div class="container">
						<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
					</div>
				</section>
			<?php endif; ?>

			<section class="section bg-white">
				<div class="container" style="max-width: 56rem;">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</section>

			<?php
			$tags = get_the_tags();
			if ( $tags ) :
				?>
				<section class="section-sm bg-gray-50">
					<div class="container" style="max-width: 56rem;">
						<div class="flex flex-wrap gap-2">
							<?php foreach ( $tags as $tag ) : ?>
								<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="resource-badge">
									<?php echo esc_html( $tag->name ); ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<section class="section bg-white">
				<div class="container">
					<h2 class="font-heading text-center mb-12"><?php esc_html_e( 'Related Articles', 'ics-group' ); ?></h2>
					<div class="grid grid-cols-3">
						<?php
						$related = new WP_Query(
							array(
								'post_type'      => 'post',
								'posts_per_page' => 3,
								'post__not_in'   => array( get_the_ID() ),
								'orderby'        => 'rand',
							)
						);

						if ( $related->have_posts() ) :
							while ( $related->have_posts() ) :
								$related->the_post();
								?>
								<div class="card">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="card-image">
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail( 'medium' ); ?>
											</a>
										</div>
									<?php endif; ?>
									<div class="p-6">
										<h3 class="card-title font-heading">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<p class="card-text"><?php echo esc_html( get_the_excerpt() ); ?></p>
										<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">
											<?php esc_html_e( 'Read More', 'ics-group' ); ?> →
										</a>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			</section>
		</article>

	<?php endwhile; ?>
</main>

<?php
get_footer();
