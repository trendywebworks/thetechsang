<?php
/**
 * About page offerings section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="about-offerings" id="about-what-we-do" aria-labelledby="about-offerings-title">
	<div class="tcube-container about-offerings__layout">
		<div class="about-offerings__content">
			<p class="about-section-eyebrow"><?php esc_html_e( 'What We Do', 'thetcube' ); ?></p>
			<h2 id="about-offerings-title" class="about-section-title">
				<?php esc_html_e( 'We connect learning requirements with the right expertise.', 'thetcube' ); ?>
			</h2>
			<p>
				<?php esc_html_e( 'TECH SANG connects organizations looking for training with professionals who can deliver it.', 'thetcube' ); ?>
			</p>
			<p>
				<?php esc_html_e( 'We understand the requirement, identify the right expertise, coordinate the engagement, and ensure the training is delivered effectively.', 'thetcube' ); ?>
			</p>
			<p>
				<?php esc_html_e( 'From initial discussion to final session delivery - TS manages the complete process.', 'thetcube' ); ?>
			</p>
			<div class="about-offerings__notes">
				<p>
					<?php esc_html_e( 'Within each industry, we focus on domain-specific, role-based, and niche topics tailored to business needs - not generic content.', 'thetcube' ); ?>
				</p>
				<p class="about-offerings__notes-strong">
					<?php esc_html_e( 'We do not automate learning - we enable it, curate it, and deliver it with intent.', 'thetcube' ); ?>
				</p>
			</div>
		</div>

		<figure class="about-visual about-offerings__media">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about/about-us-3.webp' ); ?>"
				alt="<?php esc_attr_e( 'Placeholder visual for training delivery and coordination', 'thetcube' ); ?>"
				width="1500"
				height="1500"
				loading="lazy"
			>
		</figure>
	</div>

	<div class="tcube-container about-offerings__cards">
		<article class="about-info-card">
			<h3><?php esc_html_e( 'What We Offer', 'thetcube' ); ?></h3>
			<ul class="about-feature-list">
				<li><?php esc_html_e( 'Training Sessions', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Workshops (Hands-on / Practical)', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Seminars & Knowledge Talks', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Customized Learning Programs', 'thetcube' ); ?></li>
			</ul>
		</article>

		<article class="about-info-card">
			<h3><?php esc_html_e( 'Industries We Cater To', 'thetcube' ); ?></h3>
			<ul class="about-feature-list">
				<li><?php esc_html_e( 'IT & Technology', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Life Sciences & Healthcare', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'FMCG', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Infrastructure & Engineering', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Entertainment & Media', 'thetcube' ); ?></li>
				<li><?php esc_html_e( 'Finance & Banking', 'thetcube' ); ?></li>
			</ul>
		</article>
	</div>
</section>
