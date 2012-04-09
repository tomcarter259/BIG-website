<?php
/**
 * Profile Page Template
 *
 * This is used to display the profiles
 *
Template Name: Profile
 */

get_header(); ?>

	<?php
		$found_person = false;

		global $pods;
		$person_slug = pods_url_variable(-1);
		$person = new Pod('people', $person_slug);

		if( !empty($person->data))
		{
			$found_person = true;

			$person_surname       = $person->get_field('name');
			$person_initial       = $person->get_field('middleinitial');
			$person_forename      = $person->get_field('forename');
			$person_position      = $person->get_field('position');
			$person_jobtitle      = $person->get_field('jobtitle');
			$person_photo         = $person->get_field('photo');
			$person_email         = $person->get_field('email');
			$person_bio           = $person->get_field('bio');
			$person_personalsite1 = $person->get_field('personalsite1');
			$person_personalsite2 = $person->get_field('personalsite2');
			$person_personalsite3 = $person->get_field('personalsite3');
			$person_personalblog1 = $person->get_field('personalblog1');
			$person_personalblog2 = $person->get_field('personalblog2');
			$person_personalblog3 = $person->get_field('personalblog3');
			$person_twitter       = $person->get_field('twitter');
			$person_facebook      = $person->get_field('facebook');
			$person_googleplus    = $person->get_field('googleplus');
			$person_youtube       = $person->get_field('youtube');
			$person_linkedin      = $person->get_field('linkedin');
			$person_github        = $person->get_field('github');

			$person_bio           = wpautop( $person_bio);
			$person_photo         = $person_photo[0]['guid'];
		}
	?>

	<?php if ($found_person) : ?>

		<div id="profile-info" class="container">
			<div id="profile-left">

				<?php if (!empty($person_photo)) : ?>
					<img class="profile-photo" src="<?php echo $person_photo; ?>" alt="<?php echo $person_forename . " " . $person_surname ?>" />
				<?php else : ?>
					<img class="profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
				<?php endif ?>

				<?php if (!empty($person_email)) : ?>
					<a href="#" class="profile-contact-link">
						<div id="profile-contact">
							Send <?php echo $person_forename; ?> an email
						</div><!-- #profile-contact -->
					</a>
				<?php endif ?>

				<h3>On the Web</h3>
				<hr />
				<?php $found_links = false; ?>
				<ul>
					<?php if (!empty($person_personalsite1)) : ?>
					<li>
						<a href="<?php echo $person_personalsite1; ?>">Personal Website</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_personalsite2)) : ?>
					<li>
						<a href="<?php echo $person_personalsite2; ?>">Other Personal Website</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_personalsite3)) : ?>
					<li>
						<a href="<?php echo $person_personalsite3; ?>">Other Personal Website</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_personalblog1)) : ?>
					<li>
						<a href="<?php echo $person_personalblog1; ?>">Personal Blog</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_personalblog2)) : ?>
					<li>
						<a href="<?php echo $person_personalblog2; ?>">Other Personal Blog</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_personalblog3)) : ?>
					<li>
						<a href="<?php echo $person_personalblog3; ?>">Other Personal Blog</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_twitter)) : ?>
					<li>
						<a href="http://www.twitter.com/<?php echo $person_twitter; ?>">Twitter</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_facebook)) : ?>
					<li>
						<a href="http://www.facebook.com/<?php echo $person_facebook; ?>">Facebook</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_googleplus)) : ?>
					<li>
						<a href="<?php echo $person_googleplus; ?>">Google+</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_youtube)) : ?>
					<li>
						<a href="http://www.youtube.com/<?php echo $person_youtube; ?>">Youtube</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_linkedin)) : ?>
					<li>
						<a href="http://www.linkedin.com/in/<?php echo $person_linkedin; ?>">Linkedin</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
					<?php if (!empty($person_github)) : ?>
					<li>
						<a href="http://www.github.com/<?php echo $person_github; ?>">Github</a>
					</li>
					<?php $found_links = true; ?>
					<?php endif ?>
				</ul>

				<?php if ($found_links == false) : ?>
					<p>No links found :(</p>
				<?php endif ?>

			</div><!-- #profile-left -->
			<div id="profile-right">

				<div id="profile-name">
					<h2><?php 
						echo $person_forename;
						if (!empty($person_initial)) echo " " . $person_initial . ".";
						echo " " . $person_surname; 
					?></h2>
					<h5><?php echo $person_jobtitle; ?></h5>
				</div><!-- #profile-name -->


				<?php if (!empty($person_bio)) : ?>
					<div id="profile-introduction">
						<h3>Introduction</h3>
						<hr />
						<?php echo $person_bio ?>
					</div><!-- #profile-introduction -->
				<?php endif ?>

				<div id="profile-projects">
					<h3>Projects</h3>
					<hr />
				</div><!-- #profile-projects -->

				<div id="profile-publications">
					<h3>Publications</h3>
					<hr />
				</div><!-- #profile-publications -->

			</div><!-- #profile-right -->
		</div><!-- #profile-info -->


	<?php else: ?>

	<?php endif ?>

<?php get_footer(); ?>

