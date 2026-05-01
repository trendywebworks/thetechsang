<?php
/**
 * About page mission section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="about-mission" aria-labelledby="about-mission-title">
	<div class="about-mission__grid">
		<div class="about-mission__media">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about/about-main.webp' ); ?>"
				alt="<?php esc_attr_e( 'IT knowledge sharing session', 'thetcube' ); ?>"
				width="1500"
				height="1500"
				loading="lazy"
			>
		</div>

		<div class="about-mission__panel">
			<div class="about-mission__inner">
				<h2 id="about-mission-title" class="about-mission__label"><?php esc_html_e( 'Our Mission', 'thetcube' ); ?></h2>
				<p class="about-mission__text">
					<?php esc_html_e( 'Our mission is to make learning human, inspiring, and accessible - while building a', 'thetcube' ); ?>
					<span class="about-mission__highlight"><?php esc_html_e( 'community of IT professionals', 'thetcube' ); ?></span>
					<?php esc_html_e( 'who share knowledge out of passion, not just profit.', 'thetcube' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>
