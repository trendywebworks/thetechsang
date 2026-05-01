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
				<span class="home-hero__title-line">NOT JUST TECH.</span>
				<span class="home-hero__title-line">A SANG OF MINDS</span>
			</h1>
			<p>
				&lsquo;TECH&rsquo; is beyond technology - it represents knowledge, skills, and expertise across
				industries.
			</p>
			<p>
				&lsquo;SANG&rsquo; is about coming together - a space to connect, share ideas, and grow.
			</p>
			<p>
				TECHSANG bridges organizations and experts - connecting real learning needs with real-world
				experience.
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
