<?php
/**
 * The template for displaying resource archive
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main>
	<!-- Hero Section -->
	<section class="hero">
		<div class="container">
			<h1 class="font-heading"><?php esc_html_e( 'Resources & Insights', 'ics-group' ); ?></h1>
			<p><?php esc_html_e( 'Expert knowledge and insights on OT/ICS cybersecurity', 'ics-group' ); ?></p>
		</div>
	</section>

	<!-- Filter & Search Section -->
	<section class="section-sm bg-gray-50" style="position: sticky; top: 64px; z-index: 40; border-bottom: 1px solid var(--color-gray-200); padding: 1.5rem 0;">
		<div class="container">
			<!-- Search Bar -->
			<div class="search-container">
				<input type="text" id="searchInput" class="search-input"
					placeholder="<?php esc_attr_e( 'Search resources by title or keyword...', 'ics-group' ); ?>">
				<svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
					<circle cx="11" cy="11" r="8"></circle>
					<path d="m21 21-4.35-4.35"></path>
				</svg>
			</div>

			<!-- Filter Buttons -->
			<div class="flex flex-wrap gap-4 justify-center" style="margin-top: 1.5rem;">
				<button class="filter-btn active" data-filter="all">
					<?php esc_html_e( 'All', 'ics-group' ); ?>
				</button>
				<?php
				$types = ics_group_get_resource_types();
				foreach ( $types as $type ) :
				?>
					<button class="filter-btn" data-filter="<?php echo esc_attr( $type->slug ); ?>">
						<?php echo esc_html( $type->name ); ?>
					</button>
				<?php endforeach; ?>
			</div>

			<!-- Results Count -->
			<div class="results-count" id="resultsCount">
				<?php
				global $wp_query;
				$total = $wp_query->found_posts;
				$paged = max( 1, get_query_var( 'paged' ) );
				$per_page = 20;
				$start = ( ( $paged - 1 ) * $per_page ) + 1;
				$end = min( $total, $paged * $per_page );

				printf(
					/* translators: %1$d: start number, %2$d: end number, %3$d: total number */
					esc_html__( 'Showing %1$d-%2$d of %3$d resources', 'ics-group' ),
					'<span id="showingStart">' . esc_html( $start ) . '</span>',
					'<span id="showingEnd">' . esc_html( $end ) . '</span>',
					'<span id="totalResults">' . esc_html( $total ) . '</span>'
				);
				?>
			</div>
		</div>
	</section>

	<!-- Resources Grid -->
	<section class="section bg-white">
		<div class="container">
			<!-- No Results Message -->
			<div id="noResults" class="no-results" style="display: none;">
				<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<circle cx="11" cy="11" r="8"></circle>
					<path d="m21 21-4.35-4.35"></path>
				</svg>
				<h3><?php esc_html_e( 'No resources found', 'ics-group' ); ?></h3>
				<p><?php esc_html_e( 'Try adjusting your search or filter to find what you\'re looking for.', 'ics-group' ); ?></p>
			</div>

			<div class="grid grid-cols-4" id="resourcesGrid">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'resource' );
					endwhile;
				else :
					?>
					<div class="no-results">
						<h3><?php esc_html_e( 'No resources found', 'ics-group' ); ?></h3>
						<p><?php esc_html_e( 'Check back soon for new content.', 'ics-group' ); ?></p>
					</div>
					<?php
				endif;
				?>
			</div>

			<!-- Pagination -->
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<?php ics_group_pagination(); ?>
			<?php endif; ?>
		</div>
	</section>

	<!-- Featured Resource -->
	<?php
	$featured = ics_group_get_featured_resource();
	if ( $featured ) :
		$featured_id = $featured->ID;
	?>
	<section class="section bg-gray-50">
		<div class="container">
			<div class="card shadow-xl" style="padding: 0; overflow: hidden;">
				<div class="grid grid-cols-2" style="gap: 0; min-height: 500px;">
					<div style="position: relative; overflow: hidden;">
						<?php if ( has_post_thumbnail( $featured_id ) ) : ?>
							<?php echo get_the_post_thumbnail( $featured_id, 'resource-featured', array(
								'style' => 'position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;',
								'alt'   => get_the_title( $featured_id ),
							) ); ?>
						<?php else : ?>
							<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/images/featured-resource.svg' ); ?>"
								alt="<?php echo esc_attr( get_the_title( $featured_id ) ); ?>"
								style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
						<?php endif; ?>
					</div>
					<div class="p-12 flex" style="flex-direction: column; justify-content: center;">
						<span class="resource-badge" style="width: fit-content; margin-bottom: 1rem; background: var(--color-purple-800); color: white; padding: 0.5rem 1rem; border-radius: var(--radius-md); font-weight: 600; font-size: 0.875rem;">
							<?php esc_html_e( 'Featured', 'ics-group' ); ?>
						</span>
						<h2 class="font-heading" style="margin-bottom: 1rem;">
							<?php echo esc_html( get_the_title( $featured_id ) ); ?>
						</h2>
						<p class="card-text" style="font-size: 1.25rem; margin-bottom: 1.5rem;">
							<?php echo esc_html( get_the_excerpt( $featured_id ) ); ?>
						</p>
						<a href="<?php echo esc_url( get_permalink( $featured_id ) ); ?>" class="btn btn-primary" style="width: fit-content;">
							<?php esc_html_e( 'Read Now', 'ics-group' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Newsletter Section -->
	<section style="background: linear-gradient(90deg, var(--color-purple-900) 0%, var(--color-purple-800) 100%); padding: 4rem 0;">
		<div class="container text-center">
			<h2 class="text-white font-heading"><?php esc_html_e( 'Stay Updated', 'ics-group' ); ?></h2>
			<p class="text-white" style="font-size: 1.25rem; margin-bottom: 2rem;">
				<?php esc_html_e( 'Subscribe to our newsletter for the latest insights on OT/ICS security', 'ics-group' ); ?>
			</p>
			<button class="btn btn-secondary"><?php esc_html_e( 'Subscribe', 'ics-group' ); ?></button>
		</div>
	</section>
</main>

<?php
get_footer();
