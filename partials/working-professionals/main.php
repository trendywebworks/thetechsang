<?php
/**
 * For Working Professionals page main section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="professionals-main" id="professionals-overview" aria-labelledby="professionals-main-title">
	<div class="tcube-container">
		<div class="professionals-main__grid">
			<div class="professionals-main__content">
				<h2 id="professionals-main-title" class="professionals-main__title">
					<?php esc_html_e( 'For Professionals Who Love to Teach', 'thetcube' ); ?>
				</h2>

				<p class="professionals-main__intro">
					<?php esc_html_e( 'If you have ever felt the urge to explain, guide, or share what you know - TECH SANG gives that passion a platform.', 'thetcube' ); ?>
				</p>

				<p class="professionals-main__intro">
					<?php esc_html_e( 'We are building a network of working professionals (10+ years experience) who genuinely enjoy teaching, mentoring, and conducting sessions.', 'thetcube' ); ?>
				</p>

				<p class="professionals-main__intro">
					<?php esc_html_e( 'This is not just about training - it is about bringing your passion for teaching into action.', 'thetcube' ); ?>
				</p>

				<h2 class="professionals-main__subtitle">
					<?php esc_html_e( 'Who Should Join:', 'thetcube' ); ?>
				</h2>

				<ul class="professionals-main__list">
					<li><?php esc_html_e( 'Professionals with 10+ years of experience', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Strong knowledge in any domain / industry', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Passion for teaching, mentoring, and sharing knowledge', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Comfortable engaging with groups and conducting sessions', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Preferably under 50 years, energetic and expressive', 'thetcube' ); ?></li>
				</ul>

				<h2 class="professionals-main__subtitle">
					<?php esc_html_e( 'What You Get:', 'thetcube' ); ?>
				</h2>

				<ul class="professionals-main__list">
					<li><?php esc_html_e( 'Opportunities to conduct workshops, seminars, and training sessions', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'A platform to express your passion for teaching', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Flexible engagement - weekends / part-time / selective sessions', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'A chance to contribute to real learning and real impact', 'thetcube' ); ?></li>
				</ul>

				<p class="professionals-main__closing">
					<?php esc_html_e( 'This is a curated network.', 'thetcube' ); ?>
				</p>

				<p class="professionals-main__closing-note">
					<?php esc_html_e( 'We onboard professionals who bring not just experience, but also energy, clarity, and passion for teaching.', 'thetcube' ); ?>
				</p>
			</div>

			<div class="professionals-main__form-panel" id="professionals-form">
				<h2 class="professionals-main__form-title"><?php esc_html_e( 'Become a Tech Sang Trainer', 'thetcube' ); ?></h2>

				<div class="professionals-main__form-wrap">
					<?php
					if ( shortcode_exists( 'contact-form-7' ) ) {
						echo do_shortcode( '[contact-form-7 id="19068"]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					} else {
						?>
						<p class="professionals-main__form-note">
							<?php esc_html_e( 'Activate Contact Form 7 to display the form shortcode here.', 'thetcube' ); ?>
						</p>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
