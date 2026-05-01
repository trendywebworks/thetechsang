<?php
/* Template Name: For Organizations */
/**
 * For Organizations page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--organizations">
	<?php
	get_template_part(
		'partials/page-hero',
		null,
		array(
			'id_suffix'       => 'organizations',
			'eyebrow'         => __( 'For Organizations', 'thetcube' ),
			'title_lines'     => array(
				__( 'TRAINING', 'thetcube' ),
				__( 'THAT FITS REAL WORK', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'Build sharper teams with experienced professionals who bring practical knowledge and real-world insight into every session.', 'thetcube' ),
				__( 'From technical capability to domain expertise, TECH SANG helps you find the right trainer for your exact requirement.', 'thetcube' ),
			),
			'primary_label'   => __( 'Hire a Trainer', 'thetcube' ),
			'primary_href'    => '#organizations-form',
			'secondary_label' => __( 'Why TECH SANG', 'thetcube' ),
			'secondary_href'  => '#organizations-overview',
			'image'           => get_template_directory_uri() . '/assets/images/home/hero-main.webp',
			'image_alt'       => __( 'TECH SANG training collaboration', 'thetcube' ),
			'image_width'     => 928,
			'image_height'    => 1000,
		)
	);
	?>
	<?php get_template_part( 'partials/organizations/main' ); ?>
</div>
<?php
get_footer();
