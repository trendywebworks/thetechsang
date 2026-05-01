<?php
/**
 * Homepage learning pillars section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="home-pillars" aria-labelledby="home-pillars-title">
	<div class="tcube-container">
		<h2 id="home-pillars-title" class="home-pillars__title">
			<?php esc_html_e( 'By bringing these two together, we create learning experiences that are:', 'thetcube' ); ?>
		</h2>

		<div class="home-pillars__grid">
			<article class="home-pillar-card">
				<h3><?php esc_html_e( 'Authentic', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'Delivered by people who genuinely love teaching.', 'thetcube' ); ?></p>
			</article>

			<article class="home-pillar-card">
				<h3><?php esc_html_e( 'Practical', 'thetcube' ); ?></h3>
				<p><?php esc_html_e( 'Built on real-world industry experience.', 'thetcube' ); ?></p>
			</article>

			<article class="home-pillar-card">
				<h3><?php esc_html_e( 'Energizing', 'thetcube' ); ?></h3>
				<p>
					<?php esc_html_e( 'Conducted by young and energetic professionals under 50, who communicate with clarity and enthusiasm.', 'thetcube' ); ?>
				</p>
			</article>
		</div>
	</div>
</section>
