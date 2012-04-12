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

				<?php
					if (!empty($person_personalsite1) || !empty($person_personalsite2) 
						|| !empty($person_personalsite3) || !empty($person_personalblog1)
						|| !empty($person_personalblog2) || !empty($person_personalblog3)
						|| !empty($person_twitter) || !empty($person_facebook)
						|| !empty($person_googleplus) || !empty($person_youtube)
						|| !empty($person_linkedin) || !empty($person_github)) :
				?>

				<h3>On the Web</h3>
				<hr />
				<ul class="sidebar-list">
					<?php if (!empty($person_personalsite1)) : ?>
					<li>
						<a href="<?php echo $person_personalsite1; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-site-icon.png" />
								Personal Website
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_personalsite2)) : ?>
					<li>
						<a href="<?php echo $person_personalsite2; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-site-icon.png" />
								Other Personal Website
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_personalsite3)) : ?>
					<li>
						<a href="<?php echo $person_personalsite3; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-site-icon.png" />
								Other Personal Website
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_personalblog1)) : ?>
					<li>
						<a href="<?php echo $person_personalblog1; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-blog-icon.png" />
								Personal Blog
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_personalblog2)) : ?>
					<li>
						<a href="<?php echo $person_personalblog2; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-blog-icon.png" />
								Personal Blog
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_personalblog3)) : ?>
					<li>
						<a href="<?php echo $person_personalblog3; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-blog-icon.png" />
								Personal Blog
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_twitter)) : ?>
					<li>
						<a href="http://www.twitter.com/<?php echo $person_twitter; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" />
								Twitter
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_facebook)) : ?>
					<li>
						<a href="http://www.facebook.com/<?php echo $person_facebook; ?>">
							<div class="sidebar-item people">
							<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" />
								Facebook
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_googleplus)) : ?>
					<li>
						<a href="<?php echo $person_googleplus; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/gplus-icon.png" />
								Google+
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_youtube)) : ?>
					<li>
						<a href="http://www.youtube.com/<?php echo $person_youtube; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/youtube-icon.png" />
								Youtube
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_linkedin)) : ?>
					<li>
						<a href="http://www.linkedin.com/in/<?php echo $person_linkedin; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-icon.png" />
								Linkedin
							</div>
						</a>
					</li>
					<?php endif ?>
					<?php if (!empty($person_github)) : ?>
					<li>
						<a href="http://www.github.com/<?php echo $person_github; ?>">
							<div class="sidebar-item people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/github-icon.png" />
								Github
							</div>
						</a>
					</li>
					<?php endif ?>
				</ul>
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
					<?php
						$projects = new Pod('projects');
						$params = array();
						$params['orderby'] = 'name ASC';
						$params['limit'] = -1;
						$projects->findRecords($params);
						$total_projects = $projects->getTotalRows();
					?>
					<?php if ($total_projects > 0) : ?>
						<?php while ($projects->fetchRecord()) : ?>
							<?php
								$project_member1 = $projects->get_field('member1');
								$project_member1 = $project_member1[0]['permalink'];
								$project_member2 = $projects->get_field('member2');
								$project_member2 = $project_member2[0]['permalink'];
								$project_member3 = $projects->get_field('member3');
								$project_member3 = $project_member3[0]['permalink'];
								$project_member4 = $projects->get_field('member4');
								$project_member4 = $project_member4[0]['permalink'];
								$project_member5 = $projects->get_field('member5');
								$project_member5 = $project_member5[0]['permalink'];
							?>
							<?php if (
								$project_member1 == $person_slug ||
								$project_member2 == $person_slug ||
								$project_member3 == $person_slug ||
								$project_member4 == $person_slug ||
								$project_member5 == $person_slug
							) : ?>
							<?php
								$project_name  = $projects->get_field('name');
								$project_photo = $projects->get_field('photo');
								$project_photo = $project_photo[0]['guid'];
								$project_slug  = $projects->get_field('permalink');
							?>
				<div class="profile-projects-project">
					<div class="projects-photo">
						<a href="/projects/<?php echo $project_slug; ?>">
							<?php if (!empty($project_photo)) : ?>
								<img class="profile-projects-photo" src="<?php echo $project_photo; ?>" alt="<?php echo $project_name ?>" />
							<?php else : ?>
								<img class="profile-projects-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-project-image.png" />
							<?php endif ?>
							<div class="profile-projects-name">
								<p><?php echo $project_name; ?></p>
							</div>
						</a>
					</div><!-- .projects-photo -->
				</div>
							<?php endif ?>
						<?php endwhile ?>
					<?php endif ?>
				</div><!-- #profile-projects -->

				<?php /* TODO: put publications here */ ?>

			</div><!-- #profile-right -->
		</div><!-- #profile-info -->


	<?php else: ?>

	<?php endif ?>

<?php get_footer(); ?>

