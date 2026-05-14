<?php
/**
 * Services page topics section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="services-topics" id="services-topics" aria-labelledby="services-topics-title">
	<div class="services-topics__grid">
		<div class="services-topics__media">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/services/topics-we-cover.webp' ); ?>"
				alt="<?php esc_attr_e( 'Professionals discussing topics covered in TECH SANG sessions', 'thetcube' ); ?>"
				width="1920"
				height="1281"
				loading="lazy"
			>
		</div>

		<div class="services-topics__panel">
			<div class="services-topics__inner">
				<h2 id="services-topics-title" class="services-topics__title"><?php esc_html_e( 'Topics We Cover', 'thetcube' ); ?></h2>
				<p class="services-topics__lead">
					<?php esc_html_e( 'We cover a wide spectrum of', 'thetcube' ); ?>
					<span><?php esc_html_e( 'IT and tech-related subjects', 'thetcube' ); ?></span>,
					<?php esc_html_e( 'delivered by professionals who use these tools daily:', 'thetcube' ); ?>
				</p>
				<ul class="services-topics__list">
					<li><?php esc_html_e( 'Power BI | Power Apps | SharePoint', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'AI Strategies | AI in Healthcare | Microsoft Copilot', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Power Automate | Microsoft 365 | Azure Cloud', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'BX/UI/UX', 'thetcube' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
