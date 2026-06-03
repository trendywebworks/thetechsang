<?php
/**
 * Homepage hero section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_slide = array(
	'title'  => array(
		__( 'NOT JUST TECH,', 'thetcube' ),
		__( 'A SANG OF MINDS.', 'thetcube' ),
	),
	'copy'   => array(
		sprintf(
			/* translators: %s: highlighted word TECH. */
			__( '%s is beyond technology - it represents knowledge, skills, and expertise across industries.', 'thetcube' ),
			'<span class="blue">&lsquo;TECH&rsquo;</span>'
		),
		sprintf(
			/* translators: %s: highlighted word SANG. */
			__( '%s is about coming together - a space to connect, share ideas, and grow.', 'thetcube' ),
			'<span class="pink">&lsquo;SANG&rsquo;</span>'
		),
		__( 'TECH SANG bridges organizations and experts - connecting real learning needs with real-world experience.', 'thetcube' ),
		'<strong>' . __( 'TECH SANG', 'thetcube' ) . ' &mdash; ' . __( 'connecting experience with learning.', 'thetcube' ) . '</strong>',
	),
	'image'  => get_template_directory_uri() . '/assets/images/home/hero-main.webp',
	'alt'    => __( 'Tech Sang training collaboration', 'thetcube' ),
);

$hero_slides = array_fill( 0, 3, $hero_slide );
?>
<section class="home-hero" aria-label="<?php esc_attr_e( 'Homepage hero', 'thetcube' ); ?>" data-home-hero-slider>
	<div class="home-hero__viewport">
		<div class="home-hero__track">
			<?php foreach ( $hero_slides as $index => $slide ) : ?>
				<article class="home-hero__slide<?php echo 0 === $index ? ' is-active' : ''; ?>" aria-hidden="<?php echo 0 === $index ? 'false' : 'true'; ?>">
					<div class="tcube-container home-hero__inner">
						<div class="home-hero__content">
							<h1 class="home-hero__title">
								<?php foreach ( $slide['title'] as $title_line ) : ?>
									<span class="home-hero__title-line"><?php echo esc_html( $title_line ); ?></span>
								<?php endforeach; ?>
							</h1>

							<?php foreach ( $slide['copy'] as $paragraph ) : ?>
								<p><?php echo wp_kses_post( $paragraph ); ?></p>
							<?php endforeach; ?>
						</div>

						<div class="home-hero__media">
							<img
								src="<?php echo esc_url( $slide['image'] ); ?>"
								alt="<?php echo esc_attr( $slide['alt'] ); ?>"
								width="928"
								height="1000"
								loading="<?php echo 0 === $index ? 'eager' : 'lazy'; ?>"
							>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="home-hero__controls" aria-label="<?php esc_attr_e( 'Hero slider controls', 'thetcube' ); ?>">
		<button class="home-hero__arrow home-hero__arrow--prev" type="button" aria-label="<?php esc_attr_e( 'Show previous slide', 'thetcube' ); ?>" data-home-hero-prev>
			<span aria-hidden="true">&lsaquo;</span>
		</button>

		<div class="home-hero__dots" role="tablist" aria-label="<?php esc_attr_e( 'Choose hero slide', 'thetcube' ); ?>">
			<?php foreach ( $hero_slides as $index => $slide ) : ?>
				<button
					class="home-hero__dot<?php echo 0 === $index ? ' is-active' : ''; ?>"
					type="button"
					role="tab"
					aria-label="<?php echo esc_attr( sprintf( __( 'Show slide %d', 'thetcube' ), $index + 1 ) ); ?>"
					aria-selected="<?php echo 0 === $index ? 'true' : 'false'; ?>"
					data-home-hero-dot="<?php echo esc_attr( $index ); ?>"
				></button>
			<?php endforeach; ?>
		</div>

		<button class="home-hero__arrow home-hero__arrow--next" type="button" aria-label="<?php esc_attr_e( 'Show next slide', 'thetcube' ); ?>" data-home-hero-next>
			<span aria-hidden="true">&rsaquo;</span>
		</button>
	</div>
</section>
