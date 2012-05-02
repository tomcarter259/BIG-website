<?php
/**
 * Closes the <div id="main"> and displays the <footer> section
 */
?>

</div><!-- #main -->

<footer class="container">
	<div id="footer-title">
		<a href="/"><h1>BIG</h1></a>
		<?php include(TEMPLATEPATH . '/searchform.php'); ?>
	</div><!-- #footer-title -->
	<div id="contact">
		<h5>Contact Us</h5>
		<p>To get in touch, speak to <a href="/people/subramanian">Sri</a> or <a href="/people/fraser">Mike</a> or use the <a href="/people/">People</a> page to find the person you are looking for.</p>
	</div><!-- #contact -->
	<ul>
		<lh><h5>Here</h5></lh>
		<li>
		<a href="/people/">People</a>
		</li>
		<li>
		<a href="/publications/">Publications</a>
		</li>
		<li>
		<a href="/projects/">Projects</a>
		</li>
		<li>
		<a href="/sponsors/">Sponsors</a>
		</li>
		<li>
		<a href="/seminars/">Seminars</a>
		</li>
<!--
		<li>
		<a href="/news/">News</a>
		</li>
-->
	</ul>
	<ul>
		<lh><h5>Elsewhere</h5></lh>
		<li>
		<a href="http://www.twitter.com/BristolIG">Twitter</a>
		</li>
		<li>
		<a href="http://www.facebook.com/BristolIG">Facebook</a>
		</li>
		<li>
		<a href="http://www.youtube.com/BristolIG">Youtube</a>
		</li>
		<li>
		<a href="http://plus.google.com/b/112225757256503249354/">Google+</a>
		</li>
		<li>
		<a href="#">RSS Feed</a>
		</li>
	</ul>
	<div id="footer-uob-logo">
		<a href="http://www.bris.ac.uk/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-uob.png" /></a>
		<p>&copy; <?php the_time( 'Y' ); ?> University of Bristol</p>
	</div>
</footer>
</body>
</html>
