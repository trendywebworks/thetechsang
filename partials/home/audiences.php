<?php
/**
 * Homepage audiences section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="home-audiences" aria-labelledby="home-audiences-title">
	<div class="tcube-container">
		<h2 id="home-audiences-title" class="home-section-title screen-reader-text">
			<?php esc_html_e( 'Who We Serve', 'thetcube' ); ?>
		</h2>

		<div class="home-audiences__grid">
			<article class="home-audience-card">
				<h3 class="home-audience-card__title"><?php esc_html_e( 'For Organizations', 'thetcube' ); ?></h3>
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home/for-it-companies.webp' ); ?>"
					alt="<?php esc_attr_e( 'Corporate IT training sessions', 'thetcube' ); ?>"
					width="1000"
					height="545"
					loading="lazy"
				>
				<p>
					For IT companies, we provide engaging training, workshops, and webinars to help employees
					upskill.
				</p>
				<p><?php esc_html_e( 'Upskill your team today.', 'thetcube' ); ?></p>
				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-organizations/' ) ); ?>">
					<?php esc_html_e( 'Book your first session', 'thetcube' ); ?>
				</a>
			</article>

			<article class="home-audience-card">
				<h3 class="home-audience-card__title"><?php esc_html_e( 'For Working Professionals', 'thetcube' ); ?></h3>
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home/for-working-professionals.webp' ); ?>"
					alt="<?php esc_attr_e( 'IT professional sharing knowledge', 'thetcube' ); ?>"
					width="1000"
					height="545"
					loading="lazy"
				>
				<p>
					For working professionals, we offer the opportunity to fulfill their dream of teaching and
					inspiring others.
				</p>
				<p><?php esc_html_e( 'Upskill your team today.', 'thetcube' ); ?></p>
				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-working-professionals/' ) ); ?>">
					<?php esc_html_e( 'Explore our training catalog', 'thetcube' ); ?>
				</a>
			</article>
		</div>
	</div>
</section>
