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
			'title_lines'     => array(
				__( 'LOOKING TO', 'thetcube' ),
				__( 'UPSKILL YOUR TEAMS', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'Build sharper teams with experienced professionals who bring practical knowledge and real-world insight into every session.', 'thetcube' ),
				__( 'From technical capability to domain expertise, TECH SANG helps you find the right trainer for your exact requirement.', 'thetcube' ),
			),
			'image'           => get_template_directory_uri() . '/assets/images/organization/hero-organisation.jpg',
			'image_alt'       => __( 'Organization leaders in a TECH SANG training discussion', 'thetcube' ),
			'image_width'     => 1200,
			'image_height'    => 800,
		)
	);
	?>
	<?php get_template_part( 'partials/organizations/main' ); ?>
</div>
<?php
get_footer();
