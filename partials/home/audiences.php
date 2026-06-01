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
				<p><?php esc_html_e( 'Empower your workforce with practical, industry-focused training programs. We partner with IT companies and organizations to deliver engaging workshops, webinars, and upskilling sessions designed to enhance employee capabilities and drive business growth.', 'thetcube' ); ?></p>

				<p><?php esc_html_e( 'Invest in your team&quotes success today.', 'thetcube' ); ?></p>

				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-organizations/' ) ); ?>">
					<?php esc_html_e( 'Schedule a Training Consultation', 'thetcube' ); ?>
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
				<p><?php esc_html_e( 'Turn your expertise into impact by sharing your knowledge with others. We provide working professionals with opportunities to become trainers, conduct workshops, and inspire learners through practical, real-world insights. Join a community of experts and take the next step in your teaching and mentoring journey.', 'thetcube' ); ?></p>

				<p><?php esc_html_e( 'Start inspiring and shaping future talent today.', 'thetcube' ); ?></p>
				
				<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/for-working-professionals/' ) ); ?>">
					<?php esc_html_e( 'Start Your Training Journey', 'thetcube' ); ?>
				</a>
			</article>
		</div>
	</div>
</section>
