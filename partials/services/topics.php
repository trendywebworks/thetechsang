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
				<p class="services-topics__lead txt-white">At TECH SANG, we believe impactful learning comes from relevance, depth, and practical application. Our platform focuses on carefully curated training and workshop themes that create real professional and business value.</p>

				<p class="services-topics__lead txt-white">Rather than covering every subject, we prioritize niche, high-impact, and future-relevant topics that matter across industries.</p>

				<p class="services-topics__lead txt-white">What You Can Expect</p>

				<p class="services-topics__lead txt-white">Our learning themes are designed to be:</p>
				<ul class="services-topics__list">
					<li>High-impact and business-relevant</li>
					<li>Future-focused and practical</li>
					<li>Actionable and value-driven</li>
					<li>Aligned with industry and workplace needs</li>
					<li>Broad Areas of Focus</li>
				</ul>

				<p class="services-topics__lead txt-white">Our workshops may cover areas related to innovation, business transformation, strategic thinking, and workplace effectiveness.</p>

				<p class="services-topics__lead txt-white">We also recognize the importance of people-focused development, including:</p>
				<ul class="services-topics__list">
					<li>Leadership and management</li>
					<li>Soft skills and communication</li>
					<li>Decision-making and business thinking</li>
					<li>Team collaboration and productivity</li>
					<li>A Focused Platform. Meaningful Learning.</li>
				</ul>

				<p class="services-topics__lead txt-white">TECH SANG is built to create purposeful and impactful knowledge sharing.</p>

				<p class="services-topics__lead txt-white">Whether you want to become a trainer or seek quality learning, we bring together expertise through carefully selected topics that truly matter.</p>

			</div>
		</div>
	</div>
</section>
