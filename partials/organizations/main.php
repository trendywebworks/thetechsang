<?php
/**
 * For Organizations page main section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="organizations-main" aria-labelledby="organizations-main-title">
	<div class="tcube-container">
		<div class="organizations-main__grid">
			<div class="organizations-main__content">
				<h1 id="organizations-main-title" class="organizations-main__title">
					<?php esc_html_e( 'For Organizations', 'thetcube' ); ?>
				</h1>

				<p class="organizations-main__lead">
					<?php esc_html_e( 'Looking for a professional trainer for your team?', 'thetcube' ); ?>
				</p>

				<p class="organizations-main__intro">
					<?php esc_html_e( "If you're an IT professional under 50 who enjoys sharing knowledge, conducting sessions, and mentoring others - Tech Sang is your platform.", 'thetcube' ); ?>
				</p>

				<h2 class="organizations-main__subtitle">
					<?php esc_html_e( 'We welcome professionals who:', 'thetcube' ); ?>
				</h2>

				<ul class="organizations-main__list">
					<li><?php esc_html_e( 'Affordable and practical training sessions', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Trainers with real-time IT experience.', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Employees gain relevant, applicable skills.', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Ongoing weekly formats for continuous growth.', 'thetcube' ); ?></li>
				</ul>

				<p class="organizations-main__closing">
					<?php esc_html_e( "This isn't about money - it's about passion, purpose, and people.", 'thetcube' ); ?>
				</p>
			</div>

			<div class="organizations-main__form-panel">
				<h2 class="organizations-main__form-title"><?php esc_html_e( 'Hire a Tech Sang Trainer', 'thetcube' ); ?></h2>

				<div class="organizations-main__form-wrap">
					<?php
					if ( shortcode_exists( 'contact-form-7' ) ) {
						echo do_shortcode( '[contact-form-7 id="19679"]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					} else {
						?>
						<p class="organizations-main__form-note">
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
