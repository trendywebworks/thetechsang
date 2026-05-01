<?php
/**
 * Main fallback template.
 *
 * @package thetcube
 */

get_header();
?>
<section class="tcube-page tcube-page--home">
	<div class="tcube-container">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		<?php else : ?>
			<p class="tcube-page__placeholder">Content coming soon.</p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
