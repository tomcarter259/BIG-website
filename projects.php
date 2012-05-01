<?php
/**
 * Projects Page Template
 *
 * This is used to display the gallery of projects
 *
Template Name: Projects
 */

get_header(); ?>

<?php include(TEMPLATEPATH . '/slideshow.php'); ?>

<?php
	$projects = new Pod('projects');
?>

<?php /* Display current projects */ ?>
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
	<div class="projects-year container projects-current">
		<div class="projects-date">
			<h3>Current Projects</h3>
		</div>
		<div class="projects-gallery">
			<?php while ($projects_current->fetchRecord()) : ?>
				<?php
					$project_name     = $projects_current->get_field('name');
					$project_photo    = $projects_current->get_field('photo');
					$project_photo    = $project_photo[0]['guid'];
					$project_slug     = $projects_current->get_field('permalink');
				?>
				<div class="projects-project">
					<div class="projects-photo">
						<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
							<?php if (!empty($project_photo)) : ?>
								<img class="projects-photo" src="<?php echo $project_photo; ?>" alt="<?php echo $project_name ?>" />
							<?php else : ?>
								<img class="projects-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-project-image.png" />
							<?php endif ?>
							<div class="projects-name">
								<p><?php echo $project_name; ?></p>
							</div>
						</a>
					</div><!-- .projects-photo -->
				</div>
			<?php endwhile ?>
		</div>
	</div>
<?php endif ?>

<?php /* Display completed projects */ ?>
<?php
	$current_year = 0;
	$open = false;
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
		$project_photo    = $projects_current->get_field('photo');
		$project_photo    = $project_photo[0]['guid'];
		$project_slug     = $projects_current->get_field('permalink');
	?>
	<?php if ($current_year != $project_year) : ?>
		<?php if ($open == true) : ?>
				</div><!-- .projects-gallery -->
			</div><!-- .projects-year .container -->
			<?php $open = false; ?>
		<?php endif ?>
		<?php $current_year = $project_year; ?>
		<div class="projects-year container">
			<div class="projects-date">
				<h3><?php echo number_format($current_year,0,'.',''); ?></h3>
			</div>
			<div class="projects-gallery">
			<?php $open = true; ?>
	<?php endif ?>
				<div class="projects-project">
					<div class="projects-photo">
						<a href="<?php echo get_permalink(); ?><?php echo $project_slug; ?>">
							<?php if (!empty($project_photo)) : ?>
								<img class="projects-photo" src="<?php echo $project_photo; ?>" alt="<?php echo $project_name ?>" />
							<?php else : ?>
								<img class="projects-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-project-image.png" />
							<?php endif ?>
							<div class="projects-name">
								<p><?php echo $project_name; ?></p>
							</div>
						</a>
					</div><!-- .projects-photo -->
				</div>
	<?php endwhile ?>
<?php endif ?>
			</div><!-- .projects-gallery -->
		</div><!-- .projects-year .container -->

<?php get_footer(); ?>

