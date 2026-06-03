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
				<p><?php esc_html_e( 'Empower your workforce with practical, industry-focused training programs. We partner with companies and organizations to deliver engaging workshops, webinars, and upskilling sessions designed to enhance employee capabilities and drive business growth.', 'thetcube' ); ?></p>

				<p><?php esc_html_e( "Invest in your team's success today.", 'thetcube' ); ?></p>

				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-organizations/' ) ); ?>">
					<?php esc_html_e( 'Book your Training Session', 'thetcube' ); ?>
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
				<p><?php esc_html_e( 'Turn your expertise into impact with practical, experience-led training opportunities. We connect working professionals with learners and organizations to conduct workshops, webinars, and mentoring sessions designed to inspire talent and grow teaching confidence.', 'thetcube' ); ?></p>

				<p><?php esc_html_e( 'Start shaping future talent today.', 'thetcube' ); ?></p>
				
				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-working-professionals/' ) ); ?>">
					<?php esc_html_e( 'Become a Trainer', 'thetcube' ); ?>
				</a>
			</article>
		</div>
	</div>
</section>
