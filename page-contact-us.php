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
			'title_lines'     => array(
				__( 'LET&#39;S', 'thetcube' ),
				__( 'CONNECT', 'thetcube' ),
			),
			'paragraphs'      => array(
				__( 'Hello Working Professionals / Trainers:', 'thetcube' ),
				__( 'Passionate about teaching, training, and sharing knowledge? Reach out to TECH SANG and explore opportunities to become a trainer and conduct impactful workshops.', 'thetcube' ),
				__( 'Hello Organizations / Companies:', 'thetcube' ),
				__( 'Looking for experienced trainers for employee learning, upskilling, or workshops? Connect with TECH SANG for practical training solutions across industries and domains.', 'thetcube' ),
			),
			'phone_html'      => '<a class="contact-main__phone" href="tel:+918008001654">+91 80080 01654</a>',
			'image'           => get_template_directory_uri() . '/assets/images/contact/hero-contact.webp',
			'image_alt'       => __( 'TECH SANG training collaboration', 'thetcube' ),
			'image_width'     => 928,
			'image_height'    => 1000,
		)
	);
	?>
	<?php //get_template_part( 'partials/contact/main' ); ?>
</div>
<?php
get_footer();
