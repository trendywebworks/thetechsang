<?php
/**
 * Homepage hero section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="home-hero" aria-labelledby="home-hero-title">
	<div class="tcube-container home-hero__inner">
		<div class="home-hero__content">
			<h1 id="home-hero-title" class="home-hero__title">
				<span class="home-hero__title-line">TECH.</span>
				<span class="home-hero__title-line">TRAIN.</span>
				<span class="home-hero__title-line">TRANSFORM.</span>
			</h1>
			<p>
				Tech Sang is an IT training collaboration platform designed to connect IT companies with skilled
				trainers and mentors. A platform connecting IT companies with professionals who love to teach,
				train, and inspire.
			</p>
			<p>
				At Tech Sang, we believe that real learning comes from people who are passionate about sharing
				knowledge. That is why we have built a unique platform.
			</p>

			<div class="home-hero__actions">
				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-organizations/' ) ); ?>">
					<?php esc_html_e( 'Hire a Trainer', 'thetcube' ); ?>
				</a>
				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-working-professionals/' ) ); ?>">
					<?php esc_html_e( 'Become a Trainer', 'thetcube' ); ?>
				</a>
			</div>
		</div>

		<div class="home-hero__media">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home/hero-main.webp' ); ?>"
				alt="<?php esc_attr_e( 'Tech Sang training collaboration', 'thetcube' ); ?>"
				width="928"
				height="1000"
				loading="eager"
			>
		</div>
	</div>
</section>
