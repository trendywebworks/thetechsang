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
<section class="professionals-main" aria-labelledby="professionals-main-title">
	<div class="tcube-container">
		<div class="professionals-main__grid">
			<div class="professionals-main__content">
				<h1 id="professionals-main-title" class="professionals-main__title">
					<?php esc_html_e( 'For Working Professionals', 'thetcube' ); ?>
				</h1>

				<p class="professionals-main__lead">
					<?php esc_html_e( 'Do you love teaching?', 'thetcube' ); ?>
				</p>

				<p class="professionals-main__intro">
					<?php esc_html_e( "If you're an IT professional under 50 who enjoys sharing knowledge, conducting sessions, and mentoring others - Tech Sang is your platform.", 'thetcube' ); ?>
				</p>

				<h2 class="professionals-main__subtitle">
					<?php esc_html_e( 'We welcome professionals who:', 'thetcube' ); ?>
				</h2>

				<ul class="professionals-main__list">
					<li><?php esc_html_e( 'Want to balance their corporate career with teaching.', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Enjoy conducting training sessions and speaking to groups.', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Believe in making a difference by sharing knowledge.', 'thetcube' ); ?></li>
				</ul>

				<p class="professionals-main__closing">
					<?php esc_html_e( "This isn't about money - it's about passion, purpose, and people.", 'thetcube' ); ?>
				</p>
			</div>

			<div class="professionals-main__form-panel">
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
