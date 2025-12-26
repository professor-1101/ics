<?php
/**
 * Template Name: Contact
 * Template Post Type: page
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
			<h1 class="font-heading"><?php esc_html_e( 'Get In Touch', 'ics-group' ); ?></h1>
			<p><?php esc_html_e( 'Let\'s discuss how we can secure your critical infrastructure', 'ics-group' ); ?></p>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="section bg-white">
		<div class="container">
			<div class="grid grid-cols-2" style="gap: 3rem;">
				<div>
					<h2 class="font-heading"><?php esc_html_e( 'Contact Us', 'ics-group' ); ?></h2>
					<p class="card-text" style="font-size: 1.25rem; margin-bottom: 2rem;">
						<?php esc_html_e( 'Get in touch with our team to discuss your OT/ICS security needs. We\'re here to help protect your critical infrastructure.', 'ics-group' ); ?>
					</p>
					<div style="display: flex; flex-direction: column; gap: 1.5rem;">
						<div style="display: flex; align-items: flex-start;">
							<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/email.svg' ); ?>" alt="<?php esc_attr_e( 'Email', 'ics-group' ); ?>" style="width: 2.5rem; height: 2.5rem; margin-right: 1rem;">
							<div>
								<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;"><?php esc_html_e( 'Email', 'ics-group' ); ?></h3>
								<p class="card-text"><?php echo esc_html( get_theme_mod( 'ics_group_contact_email', 'contact@icsgroup.com' ) ); ?></p>
							</div>
						</div>
						<div style="display: flex; align-items: flex-start;">
							<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/phone.svg' ); ?>" alt="<?php esc_attr_e( 'Phone', 'ics-group' ); ?>" style="width: 2.5rem; height: 2.5rem; margin-right: 1rem;">
							<div>
								<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;"><?php esc_html_e( 'Phone', 'ics-group' ); ?></h3>
								<p class="card-text"><?php echo esc_html( get_theme_mod( 'ics_group_contact_phone', '+1 (555) 123-4567' ) ); ?></p>
							</div>
						</div>
						<div style="display: flex; align-items: flex-start;">
							<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/location.svg' ); ?>" alt="<?php esc_attr_e( 'Office', 'ics-group' ); ?>" style="width: 2.5rem; height: 2.5rem; margin-right: 1rem;">
							<div>
								<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;"><?php esc_html_e( 'Office', 'ics-group' ); ?></h3>
								<p class="card-text">
									<?php
									echo wp_kses_post( nl2br( get_theme_mod( 'ics_group_contact_address', "123 Security Boulevard\nCyber City, CC 12345" ) ) );
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-service p-8">
					<form id="contactForm" style="display: flex; flex-direction: column; gap: 1.5rem;">
						<div class="grid grid-cols-2">
							<div>
								<label for="firstName"><?php esc_html_e( 'First Name', 'ics-group' ); ?> *</label>
								<input type="text" id="firstName" name="firstName" placeholder="<?php esc_attr_e( 'First name', 'ics-group' ); ?>" required>
							</div>
							<div>
								<label for="lastName"><?php esc_html_e( 'Last Name', 'ics-group' ); ?> *</label>
								<input type="text" id="lastName" name="lastName" placeholder="<?php esc_attr_e( 'Last name', 'ics-group' ); ?>" required>
							</div>
						</div>
						<div class="grid grid-cols-2">
							<div>
								<label for="email"><?php esc_html_e( 'Email', 'ics-group' ); ?> *</label>
								<input type="email" id="email" name="email" placeholder="<?php esc_attr_e( 'Email address', 'ics-group' ); ?>" required>
							</div>
							<div>
								<label for="phone"><?php esc_html_e( 'Phone', 'ics-group' ); ?> *</label>
								<input type="tel" id="phone" name="phone" placeholder="<?php esc_attr_e( 'Phone number', 'ics-group' ); ?>" required>
							</div>
						</div>
						<div>
							<label for="company"><?php esc_html_e( 'Company', 'ics-group' ); ?></label>
							<input type="text" id="company" name="company" placeholder="<?php esc_attr_e( 'Company name', 'ics-group' ); ?>">
						</div>
						<div>
							<label for="message"><?php esc_html_e( 'Message', 'ics-group' ); ?> *</label>
							<textarea id="message" name="message" rows="5" placeholder="<?php esc_attr_e( 'Tell us about your security needs', 'ics-group' ); ?>" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary" style="width: 100%;"><?php esc_html_e( 'Send Message', 'ics-group' ); ?></button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ Section -->
	<section class="section bg-white">
		<div class="container" style="max-width: 56rem;">
			<h2 class="font-heading text-center mb-12"><?php esc_html_e( 'Frequently Asked Questions', 'ics-group' ); ?></h2>
			<div style="display: flex; flex-direction: column; gap: 1rem;">
				<div class="faq-card">
					<h3><?php esc_html_e( 'What industries do you serve?', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'We serve critical infrastructure sectors including energy, manufacturing, transportation, water utilities, and oil & gas.', 'ics-group' ); ?>
					</p>
				</div>
				<div class="faq-card">
					<h3><?php esc_html_e( 'How quickly can you respond to security incidents?', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'Our incident response team is available 24/7 and can typically respond within 2 hours of initial contact.', 'ics-group' ); ?>
					</p>
				</div>
				<div class="faq-card">
					<h3><?php esc_html_e( 'Do you offer on-site assessments?', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'Yes, we provide both on-site and remote assessment services depending on your specific requirements and preferences.', 'ics-group' ); ?>
					</p>
				</div>
				<div class="faq-card">
					<h3><?php esc_html_e( 'What compliance frameworks do you support?', 'ics-group' ); ?></h3>
					<p class="card-text">
						<?php esc_html_e( 'We support IEC 62443, NERC CIP, ISO 27001, NIST 800-82, and other industry-specific compliance frameworks.', 'ics-group' ); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section style="background: linear-gradient(90deg, var(--color-purple-900) 0%, var(--color-purple-800) 100%); padding: 4rem 0;">
		<div class="container text-center">
			<h2 class="text-white font-heading"><?php esc_html_e( 'Ready to Get Started?', 'ics-group' ); ?></h2>
			<p class="text-white" style="font-size: 1.25rem; margin-bottom: 2rem;">
				<?php esc_html_e( 'Schedule a consultation with our security experts today', 'ics-group' ); ?>
			</p>
			<button class="btn btn-secondary"><?php esc_html_e( 'Schedule Consultation', 'ics-group' ); ?></button>
		</div>
	</section>
</main>

<?php
get_footer();
