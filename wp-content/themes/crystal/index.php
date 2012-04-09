<?php
/**
 * The main template
 *
 * This is used to display a page when nothing else matches. It is also 
 * currently used as the homepage.
 *
 */

get_header(); ?>


	<div class="container">
		<?php get_template_part( 'loop', 'index' ); ?>
	</div>

<?php get_footer(); ?>

