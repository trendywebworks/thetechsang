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
					<?php esc_html_e( 'Looking to Upskill Your Teams', 'thetcube' ); ?>
				</p>

				<p class="organizations-main__intro">
					<?php esc_html_e( 'Your teams need to stay sharp. Your business needs people who can think, adapt, and perform.', 'thetcube' ); ?>
				</p>

				<p class="organizations-main__intro">
					<?php esc_html_e( 'TECH SANG helps you make that happen.', 'thetcube' ); ?>
				</p>

				<p class="organizations-main__intro">
					<?php esc_html_e( 'We connect you with experienced professionals who bring practical knowledge and real-world insights into every session. Whether it is technical skills, domain expertise, or workplace capabilities - we help you find the right trainer for your requirement.', 'thetcube' ); ?>
				</p>

				<h2 class="organizations-main__subtitle">
					<?php esc_html_e( 'Why Companies Choose TECH SANG:', 'thetcube' ); ?>
				</h2>

				<ol class="organizations-main__list">
					<li><?php esc_html_e( 'Access to experienced working professionals, not just full-time trainers', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Customized sessions based on your exact requirement', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Coverage across multiple industries and functions', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Focus on practical, applicable learning', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Flexible formats - workshops, seminars, ongoing sessions', 'thetcube' ); ?></li>
				</ol>

				<p class="organizations-main__closing">
					<?php esc_html_e( 'At TS, training is not a formality - it is a focused, outcome-driven experience.', 'thetcube' ); ?>
				</p>

				<p class="organizations-main__contact">
					<?php esc_html_e( 'Call us directly to discuss your requirement', 'thetcube' ); ?>
				</p>

				<p class="organizations-main__contact-note">
					<?php esc_html_e( '(No long forms. Just real conversations.)', 'thetcube' ); ?>
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
