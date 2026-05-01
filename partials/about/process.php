<?php
/**
 * About page process section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="about-process" id="about-how-it-works" aria-labelledby="about-process-title">
	<div class="tcube-container about-process__header">
		<p class="about-section-eyebrow about-section-eyebrow--light"><?php esc_html_e( 'How It Works', 'thetcube' ); ?></p>
		<h2 id="about-process-title" class="about-section-title about-section-title--light">
			<?php esc_html_e( 'A clear path from training need to real delivery.', 'thetcube' ); ?>
		</h2>
	</div>

	<div class="tcube-container about-process__grid">
		<figure class="about-visual about-process__media">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home/for-working-professionals.webp' ); ?>"
				alt="<?php esc_attr_e( 'Placeholder visual for the TECH SANG process', 'thetcube' ); ?>"
				width="1500"
				height="1500"
				loading="lazy"
			>
		</figure>

		<ol class="about-process__steps">
			<li class="about-process__step">
				<span class="about-process__step-number">01</span>
				<p><?php esc_html_e( 'Organizations connect with TECH SANG with their training or workshop requirements - specific topics, domains, or skill areas.', 'thetcube' ); ?></p>
			</li>
			<li class="about-process__step">
				<span class="about-process__step-number">02</span>
				<p><?php esc_html_e( 'Based on the need, TS identifies and aligns the most suitable trainers from its network of experienced professionals.', 'thetcube' ); ?></p>
			</li>
			<li class="about-process__step">
				<span class="about-process__step-number">03</span>
				<p><?php esc_html_e( 'A structured plan is then shared, including training modules, session flow, timelines, and commercials.', 'thetcube' ); ?></p>
			</li>
			<li class="about-process__step">
				<span class="about-process__step-number">04</span>
				<p><?php esc_html_e( 'Once aligned and approved, the engagement moves into execution.', 'thetcube' ); ?></p>
			</li>
			<li class="about-process__step">
				<span class="about-process__step-number">05</span>
				<p><?php esc_html_e( 'Training sessions and workshops are delivered in-person or virtually, based on requirement and convenience.', 'thetcube' ); ?></p>
			</li>
		</ol>
	</div>

	<div class="tcube-container">
		<div class="about-process__outcome">
			<p>
				<?php esc_html_e( 'Every engagement is designed to ensure relevance, clarity, and real learning outcomes.', 'thetcube' ); ?>
			</p>
		</div>
	</div>
</section>
