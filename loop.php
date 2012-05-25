<?php if( have_posts() ): ?>
	<?php while( have_posts() ):the_post(); ?>
		<?php
			$found_author = false;

			$uID = get_the_author_meta('ID');
			$wpu = get_user_by('id', $uID);

			$people = new Pod('people');

			$params = array();
			$params['orderby'] = 'name ASC';
			$params['where'] = 'wpusername.ID = "' . $wpu->ID . '"';
			$params['limit'] = -1;

			$people->findRecords($params);

			if ($people->getTotalRows() == 1) {
				$people->fetchRecord();

				$author_surname   = $people->get_field('name');
				$author_initial   = $people->get_field('middleinitial');
				$author_forename  = $people->get_field('forename');
				$author_photo     = $people->get_field('photo');
				$author_permalink = $people->get_field('permalink');

				$author_photo     = $author_photo[0]['guid'];

				$found_author = true;
			}
		?>

		<?php //use unique id to style individual posts ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="sidebar-left">
				<div class="post-date-container">
					<?php $day = get_the_date('j'); ?>
					<?php $monthYear = get_the_date('F Y'); ?>
					<span class="day">
						<?php echo $day; ?>
					</span>
					<span class="monthYear">
						<?php echo $monthYear; ?>
					</span>
				</div>

				<?php if ($found_author) : ?>
					<ul class="sidebar-list">
						<li>
							<a href="/people/<?php echo $author_permalink; ?>">
								<div class="sidebar-item news">
									<?php if (!empty($author_photo)) : ?>
										<img src="<?php echo $author_photo; ?>" />
									<?php else : ?>
										<img class="project-profile-photo" src="<?php echo get_template_directory_uri(); ?>/img/default-profile-image.png" />
									<?php endif ?>
									<?php
										echo $author_forename;
										if (!empty($author_initial)) echo " " . $author_initial . ".";
										echo " " . $author_surname;
									?>
								</div>
							</a>
						</li>
					</ul>
				<?php endif ?>

				<span class="post-admin-links"><?php edit_post_link('Edit', '  ', ''); ?></span>

			</div>
			<div class="content-right">
				<h3>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<?php the_content(); ?>
			</div>
		</div>


	<?php endwhile; ?>
	<div class="page-navigation">
		<span class="older"><?php next_posts_link('<< Older', 0); ?></span>
		<span class="newer"><?php previous_posts_link('Newer >>', 0); ?></span>
	</div>
	<?php else : ?>
		<div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
<?php endif; ?>
