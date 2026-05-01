<?php
/**
 * About page story section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="about-story" aria-labelledby="about-story-title">
	<div class="tcube-container about-story__grid">
		<div class="about-story__content">
			<p class="about-section-eyebrow"><?php esc_html_e( 'Our Belief', 'thetcube' ); ?></p>
			<h2 id="about-story-title" class="about-section-title">
				<?php esc_html_e( 'Learning starts with people who live the work every day.', 'thetcube' ); ?>
			</h2>
			<p>
				<?php esc_html_e( 'TECH SANG (TS) is a platform built on a simple belief - the best learning comes from people who live it every day.', 'thetcube' ); ?>
			</p>
			<p>
				<?php esc_html_e( 'Across industries, there are professionals with deep expertise, strong experience, and a genuine passion to teach. At the same time, organizations are constantly looking to upgrade their teams with relevant, practical knowledge.', 'thetcube' ); ?>
			</p>
			<p><?php esc_html_e( 'TECH SANG brings these two worlds together.', 'thetcube' ); ?></p>
			<p>
				<?php esc_html_e( 'We act as a bridge between organizations and experienced professionals, enabling meaningful training, workshops, and knowledge sessions across industries.', 'thetcube' ); ?>
			</p>
		</div>

		<div class="about-story__stack">
			<figure class="about-visual about-story__media">
				<span class="about-visual__badge"><?php esc_html_e( 'Dummy image', 'thetcube' ); ?></span>
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home/hero-main.webp' ); ?>"
					alt="<?php esc_attr_e( 'Placeholder visual of professionals collaborating', 'thetcube' ); ?>"
					width="928"
					height="1000"
					loading="lazy"
				>
			</figure>

			<div class="about-story__card">
				<p class="about-story__card-intro">
					<?php esc_html_e( 'At TS, learning is not about theory-heavy lectures or generic programs. It is about:', 'thetcube' ); ?>
				</p>
				<ul class="about-feature-list">
					<li><?php esc_html_e( 'Real conversations', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Practical insights', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Experience-led learning', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Interactive sessions that go beyond slides', 'thetcube' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="tcube-container">
		<div class="about-story__community">
			<p>
				<?php esc_html_e( 'We are building a community ("SANG") of professionals and organizations who believe in sharing knowledge, exchanging ideas, and growing together.', 'thetcube' ); ?>
			</p>
		</div>
	</div>
</section>
