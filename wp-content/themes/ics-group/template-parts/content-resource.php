<?php
/**
 * Template part for displaying resource cards
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$resource_type = ics_group_get_resource_type_slug();
?>

<div class="resource-card" data-type="<?php echo esc_attr( $resource_type ); ?>">
	<div class="resource-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'resource-thumbnail', array( 'alt' => get_the_title() ) ); ?>
			</a>
		<?php else : ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/images/resource-detail-1.svg' ); ?>"
					alt="<?php the_title_attribute(); ?>">
			</a>
		<?php endif; ?>
	</div>
	<div class="p-6">
		<?php ics_group_resource_badge(); ?>

		<h3 class="font-heading" style="font-size: 1.25rem; margin: 0.75rem 0;">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<p class="card-text" style="font-size: 0.875rem; margin-bottom: 0.75rem;">
			<?php echo esc_html( ics_group_custom_excerpt( 20 ) ); ?>
		</p>

		<p style="color: var(--color-gray-500); font-size: 0.75rem; margin-bottom: 1rem;">
			<?php echo esc_html( get_the_date() ); ?>
		</p>

		<a href="<?php the_permalink(); ?>" style="color: var(--color-purple-800); font-weight: 600;">
			<?php esc_html_e( 'Read More →', 'ics-group' ); ?>
		</a>
	</div>
</div>
