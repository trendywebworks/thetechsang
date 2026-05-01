<?php
/* Template Name: Contact Us */
/**
 * Contact Us page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--contact">
	<?php
	get_template_part(
		'partials/page-hero',
		null,
		array(
			'id_suffix'       => 'contact',
			'eyebrow'         => __( 'Contact Us', 'thetcube' ),
			'title_lines'     => array(
				__( 'LET US', 'thetcube' ),
				__( 'CONNECT', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'Tell us what you need, what you are planning, or how we can help you move learning forward.', 'thetcube' ),
				__( 'Reach out for training requirements, collaboration, or general inquiries and we will get back to you directly.', 'thetcube' ),
			),
			'primary_label'   => __( 'Send a Message', 'thetcube' ),
			'primary_href'    => '#contact-form',
			'secondary_label' => __( 'View Details', 'thetcube' ),
			'secondary_href'  => '#contact-details',
			'image'           => get_template_directory_uri() . '/assets/images/home/hero-main.webp',
			'image_alt'       => __( 'TECH SANG training collaboration', 'thetcube' ),
			'image_width'     => 928,
			'image_height'    => 1000,
		)
	);
	?>
	<?php get_template_part( 'partials/contact/main' ); ?>
</div>
<?php
get_footer();
