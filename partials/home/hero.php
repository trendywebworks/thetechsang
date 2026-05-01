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
				<span class="blue">&lsquo;TECH&rsquo;</span> is beyond technology - it represents knowledge, skills, and expertise across
				industries.
			</p>
			<p>
				<span class="pink">&lsquo;SANG&rsquo;</span> is about coming together - a space to connect, share ideas, and grow.
			</p>
			<p>
				TECHSANG bridges organizations and experts - connecting real learning needs with real-world
				experience.
			</p>

			<p><strong>TECH SANG — connecting experience with learning.</strong></p>
			
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
