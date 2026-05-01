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
	<?php get_template_part( 'partials/about/intro' ); ?>
	<?php get_template_part( 'partials/about/mission' ); ?>
</div>
<?php
get_footer();
