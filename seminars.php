<?php
/**
 * Seminars Page Template
 *
 * This is used to display the list of all seminars, past and present
 *
Template Name: Seminars
 */

get_header(); ?>

<?php
	$now = date();
	$seminars = new Pod('seminars');
	$future_seminars = $seminars;
	$past_seminars = $seminars;
?>

<?php
	$params = array();
	$params['orderby'] = 'date ASC';
	$params['where'] = 't.date > NOW()';
	$params['limit'] = -1;
	$future_seminars->findRecords($params);
	$total_seminars = $future_seminars->getTotalRows();
	if ($total_seminars > 0) :
?>
<div class="container">
	<h3>Future Seminars</h3>
	<hr />
	<?php while ($future_seminars->fetchRecord()) :
		$seminar_title = $future_seminars->get_field('name');
		$seminar_slug = $future_seminars->get_field('slug');
		$seminar_date = $future_seminars->get_field('date');
		$seminar_location = $future_seminars->get_field('location');
		$seminar_speaker = $future_seminars->get_field('speaker');
		$seminar_website = $future_seminars->get_field('website');
		$seminar_abstract = $future_seminars->get_field('abstract');
		$seminar_abstract = wpautop( $seminar_abstract);
		$seminar_about = $future_seminars->get_field('about');
		$seminar_about = wpautop( $seminar_about);
	?>
	<div class="seminar">
		<div class="sidebar-left">
			<div class="post-date-container">
				<?php $day = date('j', strtotime($seminar_date)); ?>
				<?php $monthYear = date('F Y', strtotime($seminar_date)); ?>
				<span class="day">
					<?php echo $day; ?>
				</span>
				<span class="monthYear">
					<?php echo $monthYear; ?>
				</span>
			</div>
			<ul class="sidebar-list">
			<?php if (!empty($seminar_speaker)) : ?>
					<li>
						<?php if (!empty($seminar_website)) : ?>
						<a href="<?php echo $seminar_website; ?>">
						<?php endif ?>
						<div class="sidebar-item seminar">
							<img src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
							<?php echo $seminar_speaker; ?>
						</div>
						<?php if (!empty($seminar_website)) : ?>
						</a>
						<?php endif ?>
					</li>
			<?php endif ?>
				<li>
					<a href="http://www.bristol.ac.uk/conferences-hospitality/conferences/precinct/merchant/">
					<div class="sidebar-item seminar">
						<img src="<?php echo get_template_directory_uri(); ?>/img/location-icon.png" />
						<?php echo $seminar_location; ?>
					</div>
					</a>
				</li>
				<li>
					<div class="sidebar-item seminar">
						<img src="<?php echo get_template_directory_uri(); ?>/img/time-icon.png" />
						<?php
							$seminar_time = date('g:i a', strtotime($seminar_date));
							echo $seminar_time;
						?>
					</div>
				</li>
			</ul>
		</div>
		<div class="content-right">
			<h3>
				<a href="<?php echo $seminar_slug; ?>"><?php echo $seminar_title; ?></a>
			</h3>
			<?php echo $seminar_abstract; ?>
			<a href="<?php echo $seminar_slug; ?>">(more...)</a>
		</div>
	</div>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php
	$params = array();
	$params['orderby'] = 'date DESC';
	$params['where'] = 't.date < NOW()';
	$params['limit'] = 5;
	$past_seminars->findRecords($params);
	$total_seminars = $future_seminars->getTotalRows();
	if ($total_seminars > 0) :
?>
<div class="container">
	<h3>Recent Seminars</h3>
	<hr />
	<?php while ($past_seminars->fetchRecord()) :
		$seminar_title = $past_seminars->get_field('name');
		$seminar_slug = $past_seminars->get_field('slug');
		$seminar_date = $past_seminars->get_field('date');
		$seminar_location = $past_seminars->get_field('location');
		$seminar_speaker = $past_seminars->get_field('speaker');
		$seminar_website = $past_seminars->get_field('website');
		$seminar_abstract = $past_seminars->get_field('abstract');
		$seminar_abstract = wpautop( $seminar_abstract);
		$seminar_about = $past_seminars->get_field('about');
		$seminar_about = wpautop( $seminar_about);
	?>
	<div class="seminar">
		<div class="sidebar-left">
			<div class="post-date-container">
				<?php $day = date('j', strtotime($seminar_date)); ?>
				<?php $monthYear = date('F Y', strtotime($seminar_date)); ?>
				<span class="day">
					<?php echo $day; ?>
				</span>
				<span class="monthYear">
					<?php echo $monthYear; ?>
				</span>
			</div>
			<ul class="sidebar-list">
			<?php if (!empty($seminar_speaker)) : ?>
					<li>
						<?php if (!empty($seminar_website)) : ?>
						<a href="<?php echo $seminar_website; ?>">
						<?php endif ?>
						<div class="sidebar-item seminar">
							<img src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
							<?php echo $seminar_speaker; ?>
						</div>
						<?php if (!empty($seminar_website)) : ?>
						</a>
						<?php endif ?>
					</li>
			<?php endif ?>
				<li>
					<a href="http://www.bristol.ac.uk/conferences-hospitality/conferences/precinct/merchant/">
					<div class="sidebar-item seminar">
						<img src="<?php echo get_template_directory_uri(); ?>/img/location-icon.png" />
						<?php echo $seminar_location; ?>
					</div>
					</a>
				</li>
				<li>
					<div class="sidebar-item seminar">
						<img src="<?php echo get_template_directory_uri(); ?>/img/time-icon.png" />
						<?php
							$seminar_time = date('g a', strtotime($seminar_date));
							echo $seminar_time;
						?>
					</div>
				</li>
			</ul>
		</div>
		<div class="content-right">
			<h3>
				<a href="<?php echo $seminar_slug; ?>"><?php echo $seminar_title; ?></a>
			</h3>
			<?php echo $seminar_abstract; ?>
			<a href="<?php echo $seminar_slug; ?>">(more...)</a>
		</div>
	</div>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer(); ?>

