<?php
/* Template Name: For Working Professionals */
/**
 * For Working Professionals page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--professionals">
	<?php
	get_template_part(
		'partials/page-hero',
		null,
		array(
			'id_suffix'       => 'professionals',
			'eyebrow'         => __( 'For Working Professionals', 'thetcube' ),
			'title_lines'     => array(
				__( 'SHARE WHAT', 'thetcube' ),
				__( 'YOU KNOW', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'Turn your experience into meaningful learning for teams and professionals who want practical, real-world guidance.', 'thetcube' ),
				__( 'TECH SANG helps passionate working experts step into training, mentoring, and knowledge-sharing opportunities.', 'thetcube' ),
			),
			'primary_label'   => __( 'Become a Trainer', 'thetcube' ),
			'primary_href'    => '#professionals-form',
			'secondary_label' => __( 'See Who We Welcome', 'thetcube' ),
			'secondary_href'  => '#professionals-overview',
			'image'           => get_template_directory_uri() . '/assets/images/home/hero-main.webp',
			'image_alt'       => __( 'TECH SANG training collaboration', 'thetcube' ),
			'image_width'     => 928,
			'image_height'    => 1000,
		)
	);
	?>
	<?php get_template_part( 'partials/working-professionals/main' ); ?>
</div>
<?php
get_footer();
