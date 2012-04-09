<?php
/**
 * The main template
 *
 * This is used to display a page when nothing else matches. It is also 
 * currently used as the homepage.
 *
 */

get_header(); ?>

<?php include(TEMPLATEPATH . '/slideshow.php'); ?>

<div class="container">
	<div id="about">
		<h3>About</h3>
		<hr>
		<p>
			Bristol Interaction and Graphics is united by a common interest in
			creative interdisciplinarity. We act as a hub for collaboration 
			between social scientists, artists, scientists and engineers to 
			combine efficient and aesthetic design. We are particularly 
			interested in areas which couple the design of devices with 
			deployment and evaluation in public settings. Members of the group 
			have expertise in research areas spanning human-computer 
			interaction, visual and tactile perception, imaging, visualisation 
			and computer-supported collaboration.
		</p>
	</div><!-- #about -->

	<?php include(TEMPLATEPATH . '/followus.php'); ?>
</div><!-- .container -->

<div id="recent-news" class="container">
	<h3>Recent News</h3>
	<hr>

	<div id="news-feed">
		<?php get_template_part( 'loop', 'index' ); ?>
	</div>

</div><!-- #recent-news -->

<?php get_footer(); ?>

