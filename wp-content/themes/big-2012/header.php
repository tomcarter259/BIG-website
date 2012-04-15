<?php
/**
 * Displays the <head> section and the top of the page, up until <div id="main">
 */?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>


<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>

		<script type="text/javascript">
		$(document).ready(function() {
				$('#slideshow').cycle({
					fx: 'fade',
					speed: 2500,
					timeout: 9000,
					random: 1,
					before: onBefore,
					after: onAfter
				});
		});

		function onBefore() {
			$('.slide-text').html("");
		}

		function onAfter() {
			$('.slide-text').html("<h2>" + this.id + "</h2><p>" + this.title + "</p>");
		}

		</script>

<?php
	/* This must remain immediately before the </head> tag for the Wordpress
	 * admin bar.
	 */
	//wp_head();
?>
</head>

<body <?php body_class(); ?>>

<?php /* Facebook like button script */ ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=271386762883442";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php /* Google +1 button script */ ?>
<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<?php /* Twitter tweet button script */ ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


	<header class="container">
		<div id="title">
			<a href="/"><h2>BIG</h2></a>
			<h4>Bristol Interaction and Graphics</h4>
		</div>

		<div id="nav">
			<ul>
				<li>
				<a href="/people/" id="people-link">People</a>
				</li>
				<li>
				<a href="/publications/" id="publications-link">Publications</a>
				</li>
				<li>
				<a href="/projects/" id="projects-link">Projects</a>
				</li>
				<li>
				<a href="/sponsors/" id="sponsors-link">Sponsors</a>
				</li>
				<li>
				<a href="/seminars/" id="seminars-link">Seminars</a>
				</li>
			</ul>
		</div><!-- #nav -->

	</header><!-- header -->

	<div id="main">

