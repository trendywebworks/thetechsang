<?php
/**
 * About page hero section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="about-hero" aria-labelledby="about-hero-title">
	<div class="tcube-container about-hero__inner">
		<div class="about-hero__content">
			<p class="about-section-eyebrow"><?php esc_html_e( 'About Us', 'thetcube' ); ?></p>
			<h1 id="about-hero-title" class="about-hero__title">
				<span class="about-hero__title-line"><?php esc_html_e( 'ABOUT', 'thetcube' ); ?></span>
				<span class="about-hero__title-line"><?php esc_html_e( 'TECH SANG', 'thetcube' ); ?></span>
			</h1>
			<p>
				<?php esc_html_e( 'TECH SANG is where experienced professionals and organizations come together to create practical, real-world learning across industries.', 'thetcube' ); ?>
			</p>
			<p>
				<?php esc_html_e( 'We build meaningful training, workshops, and knowledge sessions that turn expertise into shared growth.', 'thetcube' ); ?>
			</p>

			<div class="about-hero__actions">
				<a class="tcube-btn tcube-btn--gradient" href="#about-what-we-do">
					<?php esc_html_e( 'What We Do', 'thetcube' ); ?>
				</a>
				<a class="tcube-btn about-btn--secondary" href="#about-how-it-works">
					<?php esc_html_e( 'How It Works', 'thetcube' ); ?>
				</a>
			</div>
		</div>

		<figure class="about-visual about-hero__media">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about/about-main.webp' ); ?>"
				alt="<?php esc_attr_e( 'Placeholder visual for the TECH SANG community', 'thetcube' ); ?>"
				width="1500"
				height="1500"
				loading="eager"
			>
		</figure>
	</div>
</section>
