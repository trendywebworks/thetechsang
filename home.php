<?php
/* Template Name: Homepage */
/**
 * @package thetcube
 */
get_header();
?>
<div class="tcube-page tcube-page--home">
	<?php get_template_part( 'partials/home/hero' ); ?>
	<?php get_template_part( 'partials/home/audiences' ); ?>
	<?php get_template_part( 'partials/home/learning-pillars' ); ?>
</div>
<?php
get_footer();
