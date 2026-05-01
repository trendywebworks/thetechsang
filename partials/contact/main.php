<?php
/**
 * Contact page main section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="contact-main" aria-labelledby="contact-main-title">
	<div class="tcube-container">
		<div class="contact-main__layout">
			<div class="contact-main__heading-wrap">
				<h1 id="contact-main-title" class="contact-main__heading">
					<?php esc_html_e( 'We want to hear from you.', 'thetcube' ); ?>
				</h1>
			</div>

			<div class="contact-main__details">
				<h2 class="contact-main__lead">
					<?php esc_html_e( "let's us know how we can help!", 'thetcube' ); ?>
				</h2>
				<p class="contact-main__address">
					<?php esc_html_e( '2-4-770, Next to Vrindavan Complex, Nagole, Hyderabad - 35, INDIA', 'thetcube' ); ?>
				</p>
				<a class="contact-main__phone" href="tel:+918008001654">
					<?php esc_html_e( '+91 80080 01654', 'thetcube' ); ?>
				</a>
			</div>

			<div class="contact-main__form">
				<?php
				if ( shortcode_exists( 'contact-form-7' ) ) {
					echo do_shortcode( '[contact-form-7 id="43" title="Contact form"]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				} else {
					?>
					<p class="contact-main__form-note">
						<?php esc_html_e( 'Activate Contact Form 7 to display the contact form shortcode here.', 'thetcube' ); ?>
					</p>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
