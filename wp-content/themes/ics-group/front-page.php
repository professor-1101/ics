<?php
/**
 * The front page template file
 *
 * @package ICS_Group
 * @since 1.0.0
 */

get_header();
?>

<main>
	<!-- Hero Section -->
	<section class="hero">
		<div class="container">
			<h1 class="font-heading"><?php echo esc_html( get_theme_mod( 'hero_title', 'Safeguarding OT/ICS Infrastructures Against Digital Threats' ) ); ?></h1>
			<p><?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Comprehensive cybersecurity solutions for Critical Infrastructures' ) ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-lg"><?php esc_html_e( 'Contact Us', 'ics-group' ); ?></a>
		</div>
	</section>

	<!-- Trust Section -->
	<section class="section bg-gray-50">
		<div class="container">
			<div class="grid grid-cols-2">
				<div>
					<h2><?php esc_html_e( 'OT Cybersecurity You Can Trust', 'ics-group' ); ?></h2>
				</div>
				<div>
					<p class="card-text">
						<?php esc_html_e( 'We believe in a proactive approach to identifying and mitigating vulnerabilities before they can be exploited. Our services are tailored to meet the unique needs of each critical infrastructure and our clients, ensuring their data, systems, and reputation remain secure.', 'ics-group' ); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="section bg-white">
		<div class="container">
			<div class="text-center mb-16">
				<h2 class="font-heading"><?php esc_html_e( 'Our Services', 'ics-group' ); ?></h2>
			</div>
			<div class="grid grid-cols-3">
				<div class="card card-service">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/shield-check.svg' ); ?>" alt="<?php esc_attr_e( 'Audit & Compliance', 'ics-group' ); ?>">
					</div>
					<h3 class="card-title font-heading"><?php esc_html_e( 'Audit & Compliance', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'Comprehensive security audits, gap analysis, and regulatory compliance consulting for frameworks such as IEC 62443, NERC CIP, and ISO 27001.', 'ics-group' ); ?>
					</p>
				</div>
				<div class="card card-service">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/search-security.svg' ); ?>" alt="<?php esc_attr_e( 'VA & Pen-Testing', 'ics-group' ); ?>">
					</div>
					<h3 class="card-title font-heading"><?php esc_html_e( 'VA & Pen-Testing', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'In-depth vulnerability assessments using NIST 800-82 and MITRE ATT&CK for ICS methodologies, along with penetration testing tailored for SCADA, DCS, and other industrial control environments.', 'ics-group' ); ?>
					</p>
				</div>
				<div class="card card-service">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/monitor-security.svg' ); ?>" alt="<?php esc_attr_e( 'Managed Services', 'ics-group' ); ?>">
					</div>
					<h3 class="card-title font-heading"><?php esc_html_e( 'Managed Services', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'Robust protection for industrial operations by delivering continuous security monitoring and rapid incident response in OT/ICS environments, minimizing downtime critical processes.', 'ics-group' ); ?>
					</p>
				</div>
			</div>
			<div class="text-center mt-12">
				<a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>" class="btn btn-primary btn-lg"><?php esc_html_e( 'View All Services', 'ics-group' ); ?></a>
			</div>
		</div>
	</section>

	<!-- Resources Section -->
	<section class="section bg-gray-50">
		<div class="container">
			<div class="text-center mb-16">
				<h2 class="font-heading"><?php esc_html_e( 'Latest Resources & Blogs', 'ics-group' ); ?></h2>
				<p class="card-text" style="max-width: 48rem; margin: 0 auto;">
					<?php esc_html_e( 'Expert insights and knowledge on OT/ICS cybersecurity', 'ics-group' ); ?>
				</p>
			</div>
			<div class="grid grid-cols-4">
				<?php
				$resources = new WP_Query(
					array(
						'post_type'      => 'resource',
						'posts_per_page' => 4,
						'orderby'        => 'date',
						'order'          => 'DESC',
					)
				);

				if ( $resources->have_posts() ) :
					while ( $resources->have_posts() ) :
						$resources->the_post();
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
								$terms = get_the_terms( get_the_ID(), 'resource_type' );
								if ( $terms && ! is_wp_error( $terms ) ) :
									$term = array_shift( $terms );
									?>
									<span class="resource-badge"><?php echo esc_html( $term->name ); ?></span>
								<?php endif; ?>
								<h3 class="font-heading" style="font-size: 1.25rem; margin: 0.75rem 0;">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p style="color: var(--color-gray-600); font-size: 0.875rem;">
									<?php echo esc_html( get_the_date() ); ?>
								</p>
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

	<!-- Target Industries Section -->
	<section class="section bg-white">
		<div class="container">
			<div class="text-center mb-16">
				<h2 class="font-heading"><?php esc_html_e( 'Target Industries & Infrastructure', 'ics-group' ); ?></h2>
				<p class="card-text" style="max-width: 48rem; margin: 0 auto;">
					<?php esc_html_e( 'Specialized security solutions for critical infrastructure sectors', 'ics-group' ); ?>
				</p>
			</div>
			<div class="grid grid-cols-5">
				<div class="industry-card">
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/energy.svg' ); ?>" alt="<?php esc_attr_e( 'Energy & Utilities', 'ics-group' ); ?>">
					<div class="industry-name">
						<span class="font-heading"><?php esc_html_e( 'Energy & Utilities', 'ics-group' ); ?></span>
					</div>
				</div>
				<div class="industry-card">
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/factory.svg' ); ?>" alt="<?php esc_attr_e( 'Manufacturing', 'ics-group' ); ?>">
					<div class="industry-name">
						<span class="font-heading"><?php esc_html_e( 'Manufacturing', 'ics-group' ); ?></span>
					</div>
				</div>
				<div class="industry-card">
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/truck.svg' ); ?>" alt="<?php esc_attr_e( 'Transportation', 'ics-group' ); ?>">
					<div class="industry-name">
						<span class="font-heading"><?php esc_html_e( 'Transportation', 'ics-group' ); ?></span>
					</div>
				</div>
				<div class="industry-card">
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/droplet.svg' ); ?>" alt="<?php esc_attr_e( 'Water & Wastewater', 'ics-group' ); ?>">
					<div class="industry-name">
						<span class="font-heading"><?php esc_html_e( 'Water & Wastewater', 'ics-group' ); ?></span>
					</div>
				</div>
				<div class="industry-card">
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/oil-barrel.svg' ); ?>" alt="<?php esc_attr_e( 'Oil & Gas', 'ics-group' ); ?>">
					<div class="industry-name">
						<span class="font-heading"><?php esc_html_e( 'Oil & Gas', 'ics-group' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Newsletter Section -->
	<section style="background: linear-gradient(90deg, var(--color-purple-900) 0%, var(--color-purple-800) 100%); padding: 4rem 0;">
		<div class="container text-center">
			<h2 class="text-white" style="margin-bottom: 1rem;"><?php esc_html_e( 'Stay Updated', 'ics-group' ); ?></h2>
			<p class="text-white" style="font-size: 1.25rem; margin-bottom: 2rem;">
				<?php esc_html_e( 'Subscribe to our newsletter for the latest insights on OT/ICS security', 'ics-group' ); ?>
			</p>
			<button class="btn btn-secondary"><?php esc_html_e( 'Subscribe', 'ics-group' ); ?></button>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="section bg-gray-50">
		<div class="container">
			<div class="card shadow-xl" style="max-width: 64rem; margin: 0 auto; padding: 3rem;">
				<div class="text-center">
					<h2 class="font-heading"><?php esc_html_e( 'Ready to Secure Your Infrastructure?', 'ics-group' ); ?></h2>
					<p class="card-text" style="font-size: 1.25rem; max-width: 48rem; margin: 0 auto 2rem;">
						<?php esc_html_e( 'Get in touch with our team of OT/ICS security experts to discuss your critical infrastructure protection needs. We\'re here to help you build a robust defense against digital threats.', 'ics-group' ); ?>
					</p>
					<div class="flex flex-wrap gap-4 justify-center">
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg"><?php esc_html_e( 'Contact Our Team', 'ics-group' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>" class="btn btn-secondary btn-lg"><?php esc_html_e( 'Explore Our Services', 'ics-group' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
