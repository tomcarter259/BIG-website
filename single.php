<?php
/**
 * Single Page Template
 *
 * This is used to display individual posts
 */

get_header(); ?>

	<div class="container">
		<?php get_template_part( 'loop', 'index' ); ?>
	</div>

<?php get_footer(); ?>

