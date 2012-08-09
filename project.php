<?php
/**
 * Project Page Template
 *
 * This is used to display the individual project pages
 *
Template Name: Project
 */

get_header(); ?>

	<?php
		$found_project = false;

		global $pods;
		$project_slug = pods_url_variable(-1);
		$project = new Pod('projects', $project_slug);
		$people = new Pod('people');

		if( !empty($project->data))
		{
			$found_project = true;

			$project_name       = $project->get_field('name');
			$project_subtitle   = $project->get_field('subtitle');
			$project_flickr_tag = $project->get_field('flickrTag');
			$project_abstract   = $project->get_field('abstract');
			$project_abstract   = wpautop ($project_abstract);
			$project_slug         = $project->get_field('permalink');
			$project_gallery = $project->get_field('photos');
			$project_members = $project->get_field('members');
			$project_video1 = $project->get_field('video1');
			$project_video2 = $project->get_field('video2');
			$project_video3 = $project->get_field('video3');
			$project_video4 = $project->get_field('video4');
			$project_details = $project->get_field('details');
			$project_member1 = $project->get_field('member1');
			$project_member2 = $project->get_field('member2');
			$project_member3 = $project->get_field('member3');
			$project_member4 = $project->get_field('member4');
			$project_member5 = $project->get_field('member5');
			$project_member6 = $project->get_field('member6');
			$project_member7 = $project->get_field('member7');
		}
	?>

	<?php if ($found_project) : ?>

		<div id="profile-info" class="container">
			<div id="profile-left">

				<?php if (!empty($project_photo)) : ?>
					<img class="project-photo" src="<?php echo $project_photo; ?>" alt="<?php echo $project_name ?>" />
				<?php else : ?>
					<img class="project-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-project-image.png" />
				<?php endif ?>

				<h3>Members</h3>
				<hr />
				<ul class="sidebar-list">

				<?php if (!empty($project_member1)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member1[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member1_photo = $person->get_field('photo');
						$project_member1_photo = $project_member1_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member1[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member1_photo)) : ?>
									<img src="<?php echo $project_member1_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member1[0]['forename'];
										if (!empty($project_member1[0]['middleinitial'])) echo " " . $project_member1[0]['middleinitial'] . ".";
										echo " " . $project_member1[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				<?php if (!empty($project_member2)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member2[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member2_photo = $person->get_field('photo');
						$project_member2_photo = $project_member2_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member2[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member2_photo)) : ?>
									<img src="<?php echo $project_member2_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member2[0]['forename'];
										if (!empty($project_member2[0]['middleinitial'])) echo " " . $project_member2[0]['middleinitial'] . ".";
										echo " " . $project_member2[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				<?php if (!empty($project_member3)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member3[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member3_photo = $person->get_field('photo');
						$project_member3_photo = $project_member3_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member3[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member3_photo)) : ?>
									<img src="<?php echo $project_member3_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member3[0]['forename'];
										if (!empty($project_member3[0]['middleinitial'])) echo " " . $project_member3[0]['middleinitial'] . ".";
										echo " " . $project_member3[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				<?php if (!empty($project_member4)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member4[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member4_photo = $person->get_field('photo');
						$project_member4_photo = $project_member4_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member4[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member4_photo)) : ?>
									<img src="<?php echo $project_member4_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member4[0]['forename'];
										if (!empty($project_member4[0]['middleinitial'])) echo " " . $project_member4[0]['middleinitial'] . ".";
										echo " " . $project_member4[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				<?php if (!empty($project_member5)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member5[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member5_photo = $person->get_field('photo');
						$project_member5_photo = $project_member5_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member5[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member5_photo)) : ?>
									<img src="<?php echo $project_member5_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member5[0]['forename'];
										if (!empty($project_member5[0]['middleinitial'])) echo " " . $project_member5[0]['middleinitial'] . ".";
										echo " " . $project_member5[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				<?php if (!empty($project_member6)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member6[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member6_photo = $person->get_field('photo');
						$project_member6_photo = $project_member6_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member6[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member6_photo)) : ?>
									<img src="<?php echo $project_member6_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member6[0]['forename'];
										if (!empty($project_member6[0]['middleinitial'])) echo " " . $project_member6[0]['middleinitial'] . ".";
										echo " " . $project_member6[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				<?php if (!empty($project_member7)) : ?>
					<?php
						$params = array();
						$params['where'] = 'permalink ="' . $project_member7[0]['permalink'] . '"';
						$params['limit'] = 1;
						$person = $people;
						$person->findRecords($params);
						$person->fetchRecord();
						$project_member7_photo = $person->get_field('photo');
						$project_member7_photo = $project_member7_photo[0]['guid'];
					?>
						<li>
							<a href="/people/<?php echo $project_member7[0]['permalink']; ?>">
								<div class="sidebar-item projects">
								<?php if (!empty($project_member7_photo)) : ?>
									<img src="<?php echo $project_member7_photo; ?>" />
								<?php else : ?>
									<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
								<?php endif ?>
									<?php
										echo $project_member7[0]['forename'];
										if (!empty($project_member7[0]['middleinitial'])) echo " " . $project_member7[0]['middleinitial'] . ".";
										echo " " . $project_member7[0]['name'];
									?>
								</div>
							</a>
						</li>
				<?php endif ?>

				</ul>

				<?php /* TODO Display sponsors here */ ?>

				<h3>Share</h3>
				<hr />
				<?php include(TEMPLATEPATH . '/socialLarge.php'); ?>

			</div><!-- #profile-left -->
			<div id="profile-right">

				<div id="profile-name">
					<h2><?php echo $project_name; ?></h2>
					<h5><?php echo $project_subtitle; ?></h5>
				</div><!-- #profile-name -->

				<?php if (!empty($project_abstract)) : ?>
					<div id="project-abstract">
						<h3>Abstract</h3>
						<hr />
						<?php echo $project_abstract ?>
					</div><!-- #project-abstract -->
				<?php endif ?>

				<?php if (!empty($project_video1) || !empty($project_video2) || !empty($project_video3) || !empty($project_video4)) : ?>
					<div id="project-videos">
						<h3>Videos</h3>
						<hr />
						<?php if (!empty($project_video1)) : ?>
							<?php $video_link = explode("/", $project_video1); ?>
							<iframe width="739" height="416" src="http://www.youtube.com/embed/<?php echo $video_link[3]; ?>" frameborder="0" allowfullscreen></iframe>
						<?php endif ?>
						<?php if (!empty($project_video2)) : ?>
							<?php $video_link = explode("/", $project_video2); ?>
							<iframe width="739" height="416" src="http://www.youtube.com/embed/<?php echo $video_link[3]; ?>" frameborder="0" allowfullscreen></iframe>
						<?php endif ?>
						<?php if (!empty($project_video3)) : ?>
							<?php $video_link = explode("/", $project_video3); ?>
							<iframe width="739" height="416" src="http://www.youtube.com/embed/<?php echo $video_link[3]; ?>" frameborder="0" allowfullscreen></iframe>
						<?php endif ?>
						<?php if (!empty($project_video4)) : ?>
							<?php $video_link = explode("/", $project_video4); ?>
							<iframe width="739" height="416" src="http://www.youtube.com/embed/<?php echo $video_link[3]; ?>" frameborder="0" allowfullscreen></iframe>
						<?php endif ?>
					</div><!-- #project-videos -->
				<?php endif ?>

				<?php if (!empty($project_flickr_tag)) : ?>
					<div id="project-photos">
						<h3>Photos</h3>
						<hr />

						<object width="740" height="555">
							<param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fgroups%2F2000562%40N25%2Fpool%2Ftags%2F<? echo $project_flickr_tag; ?>%2Fshow%2F&page_show_back_url=%2Fgroups%2F2000562%40N25%2Fpool%2Ftags%2F<? echo $project_flickr_tag; ?>%2F&group_id=2000562@N25&tags=<? echo $project_flickr_tag; ?>&jump_to=&start_index="></param>
							<param name="movie" value="http://www.flickr.com/apps/slideshow/show.swf?v=109615"></param>
							<param name="allowFullScreen" value="true"></param>
							<embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/slideshow/show.swf?v=109615" allowFullScreen="true" flashvars="offsite=true&lang=en-us&page_show_url=%2Fgroups%2F2000562%40N25%2Fpool%2Ftags%2F<? echo $project_flickr_tag; ?>%2Fshow%2F&page_show_back_url=%2Fgroups%2F2000562%40N25%2Fpool%2Ftags%2F<? echo $project_flickr_tag; ?>%2F&group_id=2000562@N25&tags=<? echo $project_flickr_tag; ?>&jump_to=&start_index=" width="740" height="555"></embed>
						</object>


					</div><!-- #project-photos -->
				<?php endif ?>

<?php /* TODO publications go here */ ?>

				<?php if (!empty($project_details)) : ?>
					<div id="project-details">
						<h3>Details</h3>
						<hr />
						<?php echo $project_details; ?>
					</div><!-- #project-details -->
				<?php endif ?>

			</div><!-- #profile-right -->
		</div><!-- #profile-info -->

	<?php else: ?>

	<?php endif ?>

<?php get_footer(); ?>

