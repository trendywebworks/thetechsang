<?php
/**
 * Shared page hero partial.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_args = wp_parse_args(
	isset( $args ) ? $args : array(),
	array(
		'id_suffix'       => 'page',
		'eyebrow'         => '',
		'title_lines'     => array(),
		'paragraphs'      => array(),
		'primary_label'   => '',
		'primary_href'    => '',
		'secondary_label' => '',
		'secondary_href'  => '',
		'image'           => '',
		'image_alt'       => '',
		'image_width'     => 928,
		'image_height'    => 1000,
		'image_loading'   => 'eager',
	)
);

$hero_title_id = 'tcube-page-hero-title-' . sanitize_html_class( $hero_args['id_suffix'] );
?>
<section class="tcube-page-hero" aria-labelledby="<?php echo esc_attr( $hero_title_id ); ?>">
	<div class="tcube-container tcube-page-hero__inner">
		<div class="tcube-page-hero__content">
			<?php if ( ! empty( $hero_args['eyebrow'] ) ) : ?>
				<p class="tcube-page-hero__eyebrow"><?php echo esc_html( $hero_args['eyebrow'] ); ?></p>
			<?php endif; ?>

			<h1 id="<?php echo esc_attr( $hero_title_id ); ?>" class="tcube-page-hero__title">
				<?php foreach ( $hero_args['title_lines'] as $title_line ) : ?>
					<span class="tcube-page-hero__title-line"><?php echo esc_html( $title_line ); ?></span>
				<?php endforeach; ?>
			</h1>

			<?php foreach ( $hero_args['paragraphs'] as $paragraph ) : ?>
				<p><?php echo esc_html( $paragraph ); ?></p>
			<?php endforeach; ?>

			<?php if ( ! empty( $hero_args['primary_label'] ) || ! empty( $hero_args['secondary_label'] ) ) : ?>
				<div class="tcube-page-hero__actions">
					<?php if ( ! empty( $hero_args['primary_label'] ) ) : ?>
						<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( $hero_args['primary_href'] ); ?>">
							<?php echo esc_html( $hero_args['primary_label'] ); ?>
						</a>
					<?php endif; ?>

					<?php if ( ! empty( $hero_args['secondary_label'] ) ) : ?>
						<a class="tcube-btn tcube-btn--secondary" href="<?php echo esc_url( $hero_args['secondary_href'] ); ?>">
							<?php echo esc_html( $hero_args['secondary_label'] ); ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if ( ! empty( $hero_args['image'] ) ) : ?>
			<div class="tcube-page-hero__media">
				<img
					src="<?php echo esc_url( $hero_args['image'] ); ?>"
					alt="<?php echo esc_attr( $hero_args['image_alt'] ); ?>"
					width="<?php echo esc_attr( (string) $hero_args['image_width'] ); ?>"
					height="<?php echo esc_attr( (string) $hero_args['image_height'] ); ?>"
					loading="<?php echo esc_attr( $hero_args['image_loading'] ); ?>"
				>
			</div>
		<?php endif; ?>
	</div>
</section>
