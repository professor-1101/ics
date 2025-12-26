<?php
/**
 * The template for displaying all pages
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
			<?php if ( has_post_thumbnail() ) : ?>
				<section class="hero" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
					<div class="container">
						<h1 class="font-heading"><?php the_title(); ?></h1>
					</div>
				</section>
			<?php else : ?>
				<section class="hero">
					<div class="container">
						<h1 class="font-heading"><?php the_title(); ?></h1>
					</div>
				</section>
			<?php endif; ?>

			<section class="section bg-white">
				<div class="container">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</section>
		</article>

	<?php endwhile; ?>
</main>

<?php
get_footer();
