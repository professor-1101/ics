<?php
/**
 * The template for displaying single resources
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

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-single' ); ?>>
			<!-- Article Header -->
			<div class="article-header">
				<div class="container" style="max-width: 56rem;">
					<a href="<?php echo esc_url( get_post_type_archive_link( 'resource' ) ); ?>" class="back-link">
						← <?php esc_html_e( 'Back to Resources', 'ics-group' ); ?>
					</a>
					<div class="article-meta">
						<?php
						$terms = get_the_terms( get_the_ID(), 'resource_type' );
						if ( $terms && ! is_wp_error( $terms ) ) :
							$term = array_shift( $terms );
							?>
							<span class="resource-badge"><?php echo esc_html( $term->name ); ?></span>
						<?php endif; ?>
						<span class="article-date"><?php echo esc_html( get_the_date() ); ?></span>
						<span class="article-read-time">
							<?php
							$word_count   = str_word_count( strip_tags( get_the_content() ) );
							$reading_time = ceil( $word_count / 200 );
							printf( esc_html__( '%d min read', 'ics-group' ), $reading_time );
							?>
						</span>
					</div>
					<h1 class="article-title"><?php the_title(); ?></h1>
					<?php if ( has_excerpt() ) : ?>
						<p class="article-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>
					<?php
					$author_name  = get_post_meta( get_the_ID(), 'author_name', true );
					$author_title = get_post_meta( get_the_ID(), 'author_title', true );
					if ( $author_name ) :
						$initials = '';
						$names    = explode( ' ', $author_name );
						foreach ( $names as $name ) {
							$initials .= strtoupper( substr( $name, 0, 1 ) );
						}
						?>
						<div class="article-author">
							<div class="author-info">
								<div class="author-avatar"><?php echo esc_html( $initials ); ?></div>
								<div>
									<div class="author-name"><?php echo esc_html( $author_name ); ?></div>
									<?php if ( $author_title ) : ?>
										<div class="author-title"><?php echo esc_html( $author_title ); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="article-featured-image">
					<?php the_post_thumbnail( 'resource-featured' ); ?>
				</div>
			<?php endif; ?>

			<!-- Article Content -->
			<div class="article-content">
				<div class="container" style="max-width: 48rem;">
					<?php the_content(); ?>

					<!-- Call to Action -->
					<div class="article-cta">
						<h3><?php esc_html_e( 'Need Help with OT Network Segmentation?', 'ics-group' ); ?></h3>
						<p><?php esc_html_e( 'Our experts are ready to assist you with assessment, design, and implementation.', 'ics-group' ); ?></p>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
							<?php esc_html_e( 'Schedule a Consultation', 'ics-group' ); ?>
						</a>
					</div>

					<!-- Tags -->
					<?php
					$tags = get_the_tags();
					if ( $tags ) :
						?>
						<div class="article-tags">
							<?php foreach ( $tags as $tag ) : ?>
								<span class="tag"><?php echo esc_html( $tag->name ); ?></span>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>

					<!-- Share -->
					<div class="article-share">
						<h4><?php esc_html_e( 'Share this article:', 'ics-group' ); ?></h4>
						<div class="share-buttons">
							<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo esc_url( get_permalink() ); ?>" class="share-btn" target="_blank" rel="noopener">
								<?php esc_html_e( 'LinkedIn', 'ics-group' ); ?>
							</a>
							<a href="https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php echo esc_attr( get_the_title() ); ?>" class="share-btn" target="_blank" rel="noopener">
								<?php esc_html_e( 'Twitter', 'ics-group' ); ?>
							</a>
							<a href="mailto:?subject=<?php echo esc_attr( get_the_title() ); ?>&body=<?php echo esc_url( get_permalink() ); ?>" class="share-btn">
								<?php esc_html_e( 'Email', 'ics-group' ); ?>
							</a>
						</div>
					</div>

					<!-- Related Articles -->
					<div class="related-articles">
						<h3><?php esc_html_e( 'Related Articles', 'ics-group' ); ?></h3>
						<div class="grid grid-cols-3">
							<?php
							$related = new WP_Query(
								array(
									'post_type'      => 'resource',
									'posts_per_page' => 3,
									'post__not_in'   => array( get_the_ID() ),
									'orderby'        => 'rand',
								)
							);

							if ( $related->have_posts() ) :
								while ( $related->have_posts() ) :
									$related->the_post();
									?>
									<div class="resource-card">
										<?php if ( has_post_thumbnail() ) : ?>
											<div class="resource-image">
												<a href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail( 'resource-thumbnail' ); ?>
												</a>
											</div>
										<?php endif; ?>
										<div class="p-6">
											<?php
											$rel_terms = get_the_terms( get_the_ID(), 'resource_type' );
											if ( $rel_terms && ! is_wp_error( $rel_terms ) ) :
												$rel_term = array_shift( $rel_terms );
												?>
												<span class="resource-badge"><?php echo esc_html( $rel_term->name ); ?></span>
											<?php endif; ?>
											<h3 class="font-heading" style="font-size: 1.25rem; margin: 0.75rem 0;">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h3>
											<p class="card-text" style="font-size: 0.875rem; margin-bottom: 0.75rem;">
												<?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?>
											</p>
											<p style="color: var(--color-gray-500); font-size: 0.75rem; margin-bottom: 1rem;">
												<?php echo esc_html( get_the_date() ); ?>
											</p>
											<a href="<?php the_permalink(); ?>" style="color: var(--color-purple-800); font-weight: 600;">
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

				</div>
			</div>
		</article>

	<?php endwhile; ?>
</main>

<?php
get_footer();
