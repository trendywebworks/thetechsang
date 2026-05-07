<?php
/**
 * About page hero section.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php
get_template_part(
	'partials/page-hero',
	null,
	array(
		'id_suffix'       => 'about',
		'eyebrow'         => __( 'About Us', 'thetcube' ),
		'title_lines'     => array(
			__( 'ABOUT', 'thetcube' ),
			__( 'TECH SANG', 'thetcube' ),
		),
		'paragraphs'      => array(
			__( 'TECH SANG is where experienced professionals and organizations come together to create practical, real-world learning across industries.', 'thetcube' ),
			__( 'We build meaningful training, workshops, and knowledge sessions that turn expertise into shared growth.', 'thetcube' ),
		),
		'primary_label'   => __( 'What We Do', 'thetcube' ),
		'primary_href'    => '#about-what-we-do',
		'secondary_label' => __( 'How It Works', 'thetcube' ),
		'secondary_href'  => '#about-how-it-works',
		'image'           => get_template_directory_uri() . '/assets/images/home/about-us-1.webp',
		'image_alt'       => __( 'TECH SANG training collaboration', 'thetcube' ),
		'image_width'     => 928,
		'image_height'    => 1000,
		'image_loading'   => 'eager',
	)
);
?>
