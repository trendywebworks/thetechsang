<?php
/* Template Name: Services */
/**
 * Services page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--services">
	<?php
	get_template_part(
		'partials/page-hero',
		null,
		array(
			'id_suffix'       => 'services',
			'eyebrow'         => __( 'Services', 'thetcube' ),
			'title_lines'     => array(
				__( 'LEARNING', 'thetcube' ),
				__( 'THAT MOVES WORK', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'From webinars and seminars to hands-on workshops, TECH SANG creates practical learning experiences built around real business needs.', 'thetcube' ),
				__( 'We bring experienced professionals, flexible delivery formats, and industry-relevant topics together in one place.', 'thetcube' ),
			),
			'primary_label'   => __( 'Explore Formats', 'thetcube' ),
			'primary_href'    => '#services-offerings',
			'secondary_label' => __( 'Topics We Cover', 'thetcube' ),
			'secondary_href'  => '#services-topics',
			'image'           => get_template_directory_uri() . '/assets/images/services/topics-main.webp',
			'image_alt'       => __( 'TECH SANG service offerings', 'thetcube' ),
			'image_width'     => 1500,
			'image_height'    => 1500,
		)
	);
	?>
	<?php get_template_part( 'partials/services/exclusive' ); ?>
	<?php get_template_part( 'partials/services/topics' ); ?>
</div>
<?php
get_footer();
