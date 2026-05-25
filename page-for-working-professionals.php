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
			'title_lines'     => array(
				__( 'FOR PROFESSIONALS', 'thetcube' ),
				__( 'WHO LOVE TO TEACH', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'Turn your experience into meaningful learning for teams and professionals who want practical, real-world guidance.', 'thetcube' ),
				__( 'TECH SANG helps passionate working experts step into training, mentoring, and knowledge-sharing opportunities.', 'thetcube' ),
				__( 'If you have ever felt the urge to explain, guide, or share what you know - Tech Sang gives that passion a platform.', 'thetcube' ),
				__( 'We are building a network of working professionals (10+ years experience) who genuinely enjoy teaching, mentoring, and conducting sessions.', 'thetcube' ),
				__( 'This is not just about training - it is about bringing your passion for teaching into action.', 'thetcube' ),
			),
			'image'           => get_template_directory_uri() . '/assets/images/working-professionals/hero-working-professional.webp',
			'image_alt'       => __( 'Working professional sharing knowledge through TECH SANG', 'thetcube' ),
			'image_width'     => 1200,
			'image_height'    => 800,
		)
	);
	?>
	<?php get_template_part( 'partials/working-professionals/main' ); ?>
</div>
<?php
get_footer();
