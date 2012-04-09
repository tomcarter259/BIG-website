<?php
/**
 * The main template
 *
 * This is used to display a page when nothing else matches. It is also 
 * currently used as the homepage.
 *
 */

get_header(); ?>


<div id="recent-news" class="container">
	<h3>Recent News</h3>
	<hr>

	<div id="news-feed">
		<?php get_template_part( 'loop', 'index' ); ?>
	</div>

</div><!-- #recent-news -->

<?php get_footer(); ?>

