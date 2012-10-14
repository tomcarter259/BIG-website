<?php
/**
 * Profile Page Template
 *
 * This is used to display the profiles
 *
Template Name: Profile
 */

get_header(); ?>

<!-- Get person's details -->
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
		$person_publications  = $person->get_field('publications');

		$person_bio           = wpautop( $person_bio);
		$person_publications  = wpautop( $person_publications);
		$person_photo         = $person_photo[0]['guid'];
	}
?>

<?php if ($found_person) : ?>

	<div id="profile-info" class="container">

		<!-- Left column -->
		<div id="profile-left">

			<!-- Profile photo -->
			<?php if (!empty($person_photo)) : ?>
				<img class="profile-photo" src="<?php echo $person_photo; ?>"
						alt="<?php echo $person_forename . " " .
								$person_surname ?>" />
			<?php else : ?>
				<?php $default_img = get_template_directory_uri() .
						"/img/default-profile-image.png"; ?>
				<img class="profile-photo"
						src="<?php echo $default_img; ?>" />
			<?php endif ?>

			<!-- Contact button -->
			<?php if (!empty($person_email)) : ?>
				<a href="#contact" class="profile-contact-link">
					<div id="profile-contact">
						Send <?php echo $person_forename; ?> an email
					</div>
				</a>
			<?php endif ?>

			<!-- On the Web buttons -->
			<?php include(TEMPLATEPATH . '/onTheWeb.php'); ?>

			<!-- Share buttons -->
			<h3>Share</h3>
			<hr />
			<?php include(TEMPLATEPATH . '/socialLarge.php'); ?>

		</div><!-- #profile-left -->


		<!-- Right column -->
		<div id="profile-right">

			<!-- Header -->
			<div id="profile-name">
				<h2><?php echo $person_forename;
					if (!empty($person_initial)) echo " " . $person_initial . ".";
					echo " " . $person_surname; ?></h2>
				<h5><?php echo $person_jobtitle; ?></h5>
			</div><!-- #profile-name -->


			<!-- Bioggraphy -->
			<?php if (!empty($person_bio)) : ?>
				<div id="profile-introduction">
					<h3>Introduction</h3>
					<hr />
					<?php echo $person_bio ?>
				</div><!-- #profile-introduction -->
			<?php endif ?>

			<!-- Projects -->
			<?php include(TEMPLATEPATH . '/profileProjects.php'); ?>

			<!-- Publications -->
			<?php if (!empty($person_publications)) : ?>
				<div>
					<h3>Publications</h3>
					<hr />
					<?php echo $person_publications; ?>
				</div>
			<?php endif ?>

			<!-- Contact form -->
			<?php if (!empty($person_email)) : ?>
				<a name="contact"></a>
				<div>
					<h3>Send <?php echo $person_forename; ?> an Email</h3>
					<hr />
					<?php include(TEMPLATEPATH . '/contact.php'); ?>
				</div>
			<?php endif ?>

		</div><!-- #profile-right -->
	</div><!-- #profile-info -->


<?php else: ?>

<?php endif ?>

<?php get_footer(); ?>

