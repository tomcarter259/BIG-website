<?php
/**
 * People Page Template
 *
 * This is used to display the gallery of people
 *
Template Name: People
 */

get_header(); ?>

	<?php
		$positions = new Pod('positions');
		$people = new Pod('people');
	?>

	<?php
		$positions->findRecords('order ASC');
		$total_positions = $positions->getTotalRows();
	?>

	<?php if ($total_positions > 0) :?>
		<?php while ($positions->fetchRecord()) : ?>

			<?php $position_name = $positions->get_field('name'); ?>

			<?php if ($position_name != "External") : ?>

			<div class="people-position container">

				<div class="people-header">
					<h3><?php echo $position_name; ?></h3>
				</div><!-- .people-header -->

				<div class="people-gallery">

				<?php
					$params = array();
					$params['orderby'] = 'name ASC';
					$params['where'] = 'position.name = "' . $position_name . '"';
					$params['limit'] = -1;
					$people->findRecords($params);
					$total_people = $people->getTotalRows();
				?>

				<?php if ($total_people>0) : ?>
					<?php while ($people->fetchRecord()) : ?>

						<?php
							$person_surname  = $people->get_field('name');
							$person_initial  = $people->get_field('middleinitial');
							$person_forename = $people->get_field('forename');
							$person_slug     = $people->get_field('permalink');
							$person_photo    = $people->get_field('photo');
							$person_photo    = $person_photo[0]['guid'];
						?>

						<div class="people-person">
							<div class="people-photo">
							<a href="<?php echo get_permalink(); ?><?php echo $person_slug; ?>">
									<?php if (!empty($person_photo)) : ?>
										<img src="<?php echo $person_photo; ?>" alt="<?php echo $person_forename . " " . $person_surname ?>" />
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
									<?php endif ?>

									<div class="people-name">
										<p><?php 
											echo $person_forename;
											if (!empty($person_initial)) echo " " . $person_initial . ".";
											echo " " . $person_surname;
										?></p>
									</div><!-- .people-name -->
								</a>
							</div><!-- .people-photo -->
						</div><!-- .people-person -->

					<?php endwhile ?>
				<?php endif ?>

				</div><!-- .people-gallery -->
			</div><!-- .people-position -->

			<?php endif ?>
		<?php endwhile ?>
	<?php endif ?>

<?php get_footer(); ?>

