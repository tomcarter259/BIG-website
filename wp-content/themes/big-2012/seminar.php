<?php
/**
 * Seminar Page Template
 *
 * This is used to display details on a single seminar
 *
Template Name: Seminar
 */

get_header(); ?>

<?php
	global $pods;
	$seminar_slug = pods_url_variable(-1);
	$seminar = new Pod('seminars', $seminar_slug);

	if (!empty($seminar->data)) :
		$seminar_title = $seminar->get_field('name');
		$seminar_date = $seminar->get_field('date');
		$seminar_location = $seminar->get_field('location');
		$seminar_speaker = $seminar->get_field('speaker');
		$seminar_website = $seminar->get_field('website');
		$seminar_abstract = $seminar->get_field('abstract');
		$seminar_abstract = wpautop( $seminar_abstract);
		$seminar_about = $seminar->get_field('about');
		$seminar_about = wpautop( $seminar_about);
?>
<div class="container">
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
			<?php echo $seminar_about; ?>
		</div>
	</div>
</div>

<?php endif ?>

<?php get_footer(); ?>

