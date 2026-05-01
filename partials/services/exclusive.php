<?php
/**
 * Services page exclusive section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="services-exclusive" aria-labelledby="services-exclusive-title">
	<div class="tcube-container">

		<div class="services-exclusive__grid">
			<article class="services-card">
				<h2><?php esc_html_e( 'Webinars', 'thetcube' ); ?></h2>
				<p class="services-card__desc"><?php esc_html_e( 'Quick, interactive knowledge-sharing sessions.', 'thetcube' ); ?></p>
			</article>

			<article class="services-card">
				<h2><?php esc_html_e( 'Seminars', 'thetcube' ); ?></h2>
				<p class="services-card__desc"><?php esc_html_e( 'Structured discussions on trending IT topics.', 'thetcube' ); ?></p>
			</article>

			<article class="services-card">
				<h2><?php esc_html_e( 'Workshops', 'thetcube' ); ?></h2>
				<p class="services-card__desc"><?php esc_html_e( 'Hands-on, practical sessions where employees practice and apply what they learn.', 'thetcube' ); ?></p>
			</article>

			<article class="services-card">
				<h2><?php esc_html_e( 'Delivery Models', 'thetcube' ); ?></h2>
				<ul class="services-card__list">
					<li><?php esc_html_e( 'On-site at your company', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Virtual, live sessions', 'thetcube' ); ?></li>
					<li><?php esc_html_e( 'Ongoing weekly learning programs', 'thetcube' ); ?></li>
				</ul>
			</article>
		</div>
	</div>
</section>
