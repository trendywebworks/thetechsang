<?php
/* Template Name: Services */
/**
 * Services page template.
 *
 * @package thetcube
 */

get_header();
?>
<div class="tcube-page tcube-page--services">
	<?php get_template_part( 'partials/services/exclusive' ); ?>
	<?php get_template_part( 'partials/services/topics' ); ?>
</div>
<?php
get_footer();
