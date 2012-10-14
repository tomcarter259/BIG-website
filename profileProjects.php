<?php
	$projects = new Pod('projects');
	$params = array();
	$params['orderby'] = 'name ASC';
	$params['limit'] = -1;
	$projects->findRecords($params);
	$total_projects = $projects->getTotalRows();
?>

<?php if ($total_projects > 0) : ?>
	<div id="profile-projects">
		<h3>Projects</h3>
		<hr />

		<?php while ($projects->fetchRecord()) : ?>
			<!-- Get members on current project -->
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

			<!-- Check if this person was on the current project -->
			<?php if (
					$project_member1 == $person_slug ||
					$project_member2 == $person_slug ||
					$project_member3 == $person_slug ||
					$project_member4 == $person_slug ||
					$project_member5 == $person_slug
					) : ?>

				<!-- Get current project info -->
				<?php
					$project_name  = $projects->get_field('name');
					$project_photo = $projects->get_field('photo');
					$project_photo = $project_photo[0]['guid'];
					$project_slug  = $projects->get_field('permalink');
				?>

				<!-- Display project -->
				<div class="profile-projects-project">
					<div class="projects-photo">
						<a href="/projects/<?php echo $project_slug; ?>">
							<?php if (!empty($project_photo)) : ?>
								<img class="profile-projects-photo"
										src="<?php echo $project_photo; ?>"
										alt="<?php echo $project_name ?>" />
							<?php else : ?>
								<img class="profile-projects-photo"
										src="<?php echo get_template_directory_uri(); ?>
												/img/default-project-image.png" />
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
