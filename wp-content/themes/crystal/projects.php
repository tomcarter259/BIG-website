<?php
/**
 * Projects Page Template
 *
 * This is used to display the gallery of projects
 *
Template Name: Projects
 */

get_header(); ?>

	<?php
		$projects = new Pod('projects');
		$current_year = date(Y);
		$current_header_done = false;
	?>

	<?php /* Display current projects and ones completed this year */ ?>
			<?php /* Current projects (ones without a completion date) */ ?>

			<?php
				$params = array();
				$params['orderby'] = 'name ASC';
				$params['where'] = 't.year < 1';
				$params['limit'] = -1;
				$projects_current = $projects;
				$projects_current->findRecords($params);
				$total_current = $projects_current->getTotalRows();
			?>

			<?php if ($total_current > 0) : ?>

	<div class="projects-year container">

		<div class="projects-date">
			<h3><?php echo $current_year; ?></h3>
		</div><!-- .projects-date -->

		<div class="projects-gallery">

		<?php $current_header_done = true; ?>

				<?php while ($projects_current->fetchRecord()) : ?>

					<?php
						$project_name     = $projects_current->get_field('name');
						$project_subtitle = $projects_current->get_field('subtitle');
						$project_photo    = $projects_current->get_field('photo');
						$project_photo    = $project_photo[0]['guid'];
						$project_abstract = $projects_current->get_field('abstract');
						$project_abstract = wpautop ($project_abstract);
						$project_slug     = $projects_current->get_field('permalink');
					?>

					<div class="projects-project">
						<div class="projects-photo">
							<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
								<?php if (!empty($project_photo)) : ?>
									<img class="project-photo" src="<?php echo $project_photo; ?>" alt="<?php echo $project_name ?>" />
								<?php else : ?>
									<img class="project-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-project-image.png" />
								<?php endif ?>
							</a>
						</div><!-- .projects-photo -->

						<div class="projects-summary">
							<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
								<h4><?php echo $project_name; ?></h4>
							</a>
							<h5><?php echo $project_subtitle; ?></h5>
							<hr />
							<div class="projects-abstract">
								<?php echo $project_abstract ?>
								<p>
									<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
										Read More >>
									</a>
								</p>
							</div><!-- .projects-abstract -->
						</div><!-- .projects-summary -->

					</div><!-- .projects-project -->

				<?php endwhile ?>
			<?php endif ?>

			<?php /* Projects completed in the current year */ ?>


	<?php /* Projects completed in previous years */ ?>

	<?php
		$params = array();
		$params['orderby'] = 'year DESC';
		$params['where'] = 't.year > 1';
		$params['limit'] = -1;
		$projects_past = $projects;
		$projects_past->findRecords($params);
		$total_past = $projects_past->getTotalRows();
	?>

	<?php if ($total_past > 0) : ?>
		<?php while ($projects_past->fetchRecord()) : ?>

			<?php
				$project_name     = $projects_past->get_field('name');
				$project_year     = $projects_past->get_field('year');
				$project_subtitle = $projects_current->get_field('subtitle');
				$project_photo    = $projects_current->get_field('photo');
				$project_photo    = $project_photo[0]['guid'];
				$project_abstract = $projects_current->get_field('abstract');
				$project_abstract = wpautop ($project_abstract);
				$project_slug     = $projects_current->get_field('permalink');
			?>

			<?php if ($current_year != $project_year) : ?>

					</div><!-- .projects-gallery -->
				</div><!-- .projects-year .container -->

				<?php $current_year = $project_year; ?>

				<div class="projects-year container">

					<div class="projects-date">
						<h3><?php echo number_format($current_year,0,'.',''); ?></h3>
					</div><!-- .projects-date -->

					<div class="projects-gallery">

					<?php $current_header_done = true; ?>

			<?php endif ?>

<?php if (!($current_header_done)) : ?>
	
	<div class="projects-year container">

		<div class="projects-date">
			<h3><?php echo $current_year; ?></h3>
		</div><!-- .projects-date -->

		<div class="projects-gallery">

		<?php $current_header_done = true; ?>
<?php endif ?>

					<div class="projects-project">
						<div class="projects-photo">
							<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
								<?php if (!empty($project_photo)) : ?>
									<img class="project-photo" src="<?php echo $project_photo; ?>" alt="<?php echo $project_name ?>" />
								<?php else : ?>
									<img class="project-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-project-image.png" />
								<?php endif ?>
							</a>
						</div><!-- .projects-photo -->

						<div class="projects-summary">
							<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
								<h4><?php echo $project_name; ?></h4>
							</a>
							<h5><?php echo $project_subtitle; ?></h5>
							<hr />
							<div class="projects-abstract">
								<?php echo $project_abstract ?>
								<p>
									<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
										Read More >>
									</a>
								</p>
							</div><!-- .projects-abstract -->
						</div><!-- .projects-summary -->

					</div><!-- .projects-project -->



		<?php endwhile ?>
	<?php endif ?>

		</div><!-- .projects-gallery -->

	</div><!-- .projects-year .container -->

<?php get_footer(); ?>

