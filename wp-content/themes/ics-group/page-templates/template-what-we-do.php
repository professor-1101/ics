<?php
/**
 * Template Name: What We Do
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
			<h1 class="font-heading"><?php esc_html_e( 'What We Do', 'ics-group' ); ?></h1>
			<p><?php esc_html_e( 'Comprehensive OT/ICS cybersecurity services tailored to protect critical infrastructure', 'ics-group' ); ?></p>
		</div>
	</section>

	<!-- Our Services Section -->
	<section class="section bg-white">
		<div class="container">
			<div class="text-center mb-16">
				<h2 class="font-heading"><?php esc_html_e( 'Our Services', 'ics-group' ); ?></h2>
				<p class="card-text" style="max-width: 48rem; margin: 0 auto;">
					<?php esc_html_e( 'We provide specialized security solutions designed specifically for operational technology and industrial control systems', 'ics-group' ); ?>
				</p>
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
		</div>
	</section>

	<!-- Detailed Services Section -->
	<section class="section bg-gray-50">
		<div class="container">
			<!-- Security Assessment -->
			<div class="grid grid-cols-2 mb-16" style="align-items: center;">
				<div>
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/images/security-assessment.jpg' ); ?>" alt="<?php esc_attr_e( 'Security Assessment', 'ics-group' ); ?>"
						 style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-lg);">
				</div>
				<div>
					<h3 class="font-heading" style="font-size: 2.25rem;"><?php esc_html_e( 'Security Assessment', 'ics-group' ); ?></h3>
					<p class="card-text" style="font-size: 1.25rem; margin-bottom: 1.5rem;">
						<?php esc_html_e( 'Our comprehensive security assessments identify vulnerabilities in your OT/ICS environment before they can be exploited. We use industry-standard methodologies and frameworks to ensure thorough coverage.', 'ics-group' ); ?>
					</p>
					<ul style="list-style: none; padding: 0;">
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Network architecture review', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Asset inventory and classification', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Risk analysis and prioritization', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Compliance gap analysis', 'ics-group' ); ?></span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Incident Response -->
			<div class="grid grid-cols-2 mb-16" style="align-items: center;">
				<div style="order: 2;">
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/images/incident-response.jpg' ); ?>" alt="<?php esc_attr_e( 'Incident Response', 'ics-group' ); ?>"
						 style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-lg);">
				</div>
				<div style="order: 1;">
					<h3 class="font-heading" style="font-size: 2.25rem;"><?php esc_html_e( 'Incident Response', 'ics-group' ); ?></h3>
					<p class="card-text" style="font-size: 1.25rem; margin-bottom: 1.5rem;">
						<?php esc_html_e( 'When security incidents occur, rapid response is critical. Our team provides 24/7 incident response services to minimize impact and restore operations quickly.', 'ics-group' ); ?>
					</p>
					<ul style="list-style: none; padding: 0;">
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( '24/7 emergency response', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Forensic analysis', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Recovery and remediation', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Post-incident reporting', 'ics-group' ); ?></span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Training & Awareness -->
			<div class="grid grid-cols-2" style="align-items: center;">
				<div>
					<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/images/training-awareness.jpg' ); ?>" alt="<?php esc_attr_e( 'Training & Awareness', 'ics-group' ); ?>"
						 style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-lg);">
				</div>
				<div>
					<h3 class="font-heading" style="font-size: 2.25rem;"><?php esc_html_e( 'Training & Awareness', 'ics-group' ); ?></h3>
					<p class="card-text" style="font-size: 1.25rem; margin-bottom: 1.5rem;">
						<?php esc_html_e( 'Empower your team with the knowledge and skills needed to maintain a secure OT/ICS environment. Our training programs are tailored to your specific operational needs.', 'ics-group' ); ?>
					</p>
					<ul style="list-style: none; padding: 0;">
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Security awareness training', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Technical skills development', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Tabletop exercises', 'ics-group' ); ?></span>
						</li>
						<li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
							<span style="color: var(--color-purple-800); font-size: 1.5rem; margin-right: 0.75rem;">•</span>
							<span class="card-text"><?php esc_html_e( 'Certification preparation', 'ics-group' ); ?></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Methodologies Section -->
	<section class="section bg-white">
		<div class="container">
			<div class="text-center mb-16">
				<h2 class="font-heading"><?php esc_html_e( 'Our Methodologies', 'ics-group' ); ?></h2>
				<p class="card-text" style="max-width: 48rem; margin: 0 auto;">
					<?php esc_html_e( 'Industry-standard frameworks and best practices', 'ics-group' ); ?>
				</p>
			</div>
			<div class="grid grid-cols-4">
				<div class="card" style="text-align: center;">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/certificate.svg' ); ?>" alt="<?php esc_attr_e( 'IEC 62443', 'ics-group' ); ?>">
					</div>
					<h3 class="font-heading" style="font-size: 1.25rem;"><?php esc_html_e( 'IEC 62443', 'ics-group' ); ?></h3>
					<p class="card-text"><?php esc_html_e( 'Industrial automation security', 'ics-group' ); ?></p>
				</div>
				<div class="card" style="text-align: center;">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/certificate.svg' ); ?>" alt="<?php esc_attr_e( 'NIST 800-82', 'ics-group' ); ?>">
					</div>
					<h3 class="font-heading" style="font-size: 1.25rem;"><?php esc_html_e( 'NIST 800-82', 'ics-group' ); ?></h3>
					<p class="card-text"><?php esc_html_e( 'ICS security guidelines', 'ics-group' ); ?></p>
				</div>
				<div class="card" style="text-align: center;">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/certificate.svg' ); ?>" alt="<?php esc_attr_e( 'NERC CIP', 'ics-group' ); ?>">
					</div>
					<h3 class="font-heading" style="font-size: 1.25rem;"><?php esc_html_e( 'NERC CIP', 'ics-group' ); ?></h3>
					<p class="card-text"><?php esc_html_e( 'Critical infrastructure protection', 'ics-group' ); ?></p>
				</div>
				<div class="card" style="text-align: center;">
					<div class="card-icon">
						<img src="<?php echo esc_url( ICS_GROUP_THEME_URI . '/assets/icons/certificate.svg' ); ?>" alt="<?php esc_attr_e( 'ISO 27001', 'ics-group' ); ?>">
					</div>
					<h3 class="font-heading" style="font-size: 1.25rem;"><?php esc_html_e( 'ISO 27001', 'ics-group' ); ?></h3>
					<p class="card-text"><?php esc_html_e( 'Information security management', 'ics-group' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section style="background: linear-gradient(90deg, var(--color-purple-900) 0%, var(--color-purple-800) 100%); padding: 4rem 0;">
		<div class="container text-center">
			<h2 class="text-white font-heading"><?php esc_html_e( 'Ready to Secure Your Infrastructure?', 'ics-group' ); ?></h2>
			<p class="text-white" style="font-size: 1.25rem; margin-bottom: 2rem;">
				<?php esc_html_e( 'Contact us today to discuss your OT/ICS security needs', 'ics-group' ); ?>
			</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-lg"><?php esc_html_e( 'Get Started', 'ics-group' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
