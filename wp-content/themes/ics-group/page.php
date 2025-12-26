<?php
/**
 * The template for displaying all pages
 *
 * @package ICS_Group
 * @since 1.0.0
 */

// Auto-detect custom templates based on page slug
$page_slug = get_post_field( 'post_name', get_the_ID() );
$page_title = get_the_title();

// Map of page slugs/titles to their custom templates
$custom_templates = array(
	'contact'     => 'page-templates/template-contact.php',
	'contact-us'  => 'page-templates/template-contact.php',
	'what-we-do'  => 'page-templates/template-what-we-do.php',
	'whatwedo'    => 'page-templates/template-what-we-do.php',
	'services'    => 'page-templates/template-what-we-do.php',
);

// Check if a custom template exists for this page
$template_file = null;
if ( isset( $custom_templates[ $page_slug ] ) ) {
	$template_file = locate_template( $custom_templates[ $page_slug ] );
}

// If custom template exists, load it
if ( $template_file ) {
	include( $template_file );
	return;
}

// Otherwise, use default page template
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
