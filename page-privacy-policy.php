<?php
/* Template Name: Privacy Policy */
/**
 * Privacy Policy page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--privacy-policy">
	<?php
	get_template_part(
		'partials/page-hero',
		null,
		array(
			'id_suffix'   => 'privacy-policy',
			'title_lines' => array(
				__( 'PRIVACY POLICY', 'thetcube' ),
			),
		)
	);
	?>

	<section class="privacy-policy-content" aria-labelledby="privacy-policy-content-title">
		<div class="tcube-container">
			<div class="privacy-policy-content__inner">
				<h2 id="privacy-policy-content-title" class="screen-reader-text"><?php esc_html_e( 'Privacy Policy Details', 'thetcube' ); ?></h2>

				<p><?php esc_html_e( 'At TECH SANG, we value your privacy and are committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, store, and protect information when you visit our website, engage with our services, register for training programs, or interact with us in any manner.', 'thetcube' ); ?></p>

				<h3><?php esc_html_e( 'Information We Collect', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'We may collect information such as:', 'thetcube' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Name, email address, phone number, and company details', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Professional information shared through registration forms', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Information submitted by trainers, facilitators, and training participants', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Website usage data, including browser type, device information, IP address, and pages visited', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Any information voluntarily shared through contact forms, inquiries, surveys, or event registrations', 'thetcube' ); ?></li>
				</ul>

				<h3><?php esc_html_e( 'How We Use Your Information', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'The information collected may be used to:', 'thetcube' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Respond to inquiries and service requests', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Deliver training programs, workshops, webinars, and learning initiatives', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Connect organizations with suitable trainers and learning professionals', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Improve our services, website experience, and communication', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Share relevant updates, announcements, newsletters, and event information', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Meet legal, regulatory, and business requirements', 'thetcube' ); ?></li>
				</ul>

				<h3><?php esc_html_e( 'Information Sharing', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'TECH SANG does not sell, rent, or trade your personal information to third parties.', 'thetcube' ); ?></p>
				<p><?php esc_html_e( 'Information may be shared only with:', 'thetcube' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Authorized team members and service partners involved in delivering our services', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Trainers, facilitators, or organizations where necessary for program execution', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Government authorities or regulatory bodies when required by law', 'thetcube' ); ?></li>
				</ul>

				<h3><?php esc_html_e( 'Data Security', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'We implement reasonable administrative, technical, and operational measures to safeguard personal information from unauthorized access, misuse, alteration, or disclosure. While we strive to protect your data, no online platform can guarantee absolute security.', 'thetcube' ); ?></p>

				<h3><?php esc_html_e( 'Cookies and Website Analytics', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'Our website may use cookies and similar technologies to improve user experience, analyze website performance, and understand visitor preferences. You may choose to disable cookies through your browser settings.', 'thetcube' ); ?></p>

				<h3><?php esc_html_e( 'Third-Party Links', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'Our website may contain links to external websites. TECH SANG is not responsible for the privacy practices, content, or policies of third-party websites.', 'thetcube' ); ?></p>

				<h3><?php esc_html_e( 'Your Rights', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'You may contact us at any time to:', 'thetcube' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Access or update your personal information', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Request correction of inaccurate information', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Opt out of marketing communications', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Seek clarification regarding our privacy practices', 'thetcube' ); ?></li>
				</ul>

				<h3><?php esc_html_e( 'Changes to This Policy', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'TECH SANG may update this Privacy Policy from time to time. Any changes will be posted on this page and will become effective upon publication.', 'thetcube' ); ?></p>

				<h3><?php esc_html_e( 'Contact Us', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'For any questions regarding this Privacy Policy or the handling of your information, please contact:', 'thetcube' ); ?></p>
				<address>
					<strong><?php esc_html_e( 'TECH SANG', 'thetcube' ); ?></strong><br>
					<?php esc_html_e( 'Website:', 'thetcube' ); ?> <a href="https://thetechsang.com/">https://thetechsang.com/</a><br>
					<?php esc_html_e( 'Email:', 'thetcube' ); ?> <a href="mailto:thetechsang@gmail.com">thetechsang@gmail.com</a><br>
					<?php esc_html_e( 'Phone:', 'thetcube' ); ?> <a href="tel:+918008001654">+91 8008001654</a>
				</address>
			</div>
		</div>
	</section>
</div>
<?php
get_footer();
