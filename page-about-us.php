<?php
/* Template Name: About Us */
/**
 * About Us page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--about">
	<?php get_template_part( 'partials/about/hero' ); ?>
	<?php get_template_part( 'partials/about/story' ); ?>
	<?php get_template_part( 'partials/about/offerings' ); ?>
	<?php get_template_part( 'partials/about/process' ); ?>
</div>
<?php
get_footer();
