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
				<p class="post-date"><strong>Posted on:</strong> <?php the_date(); ?></p>

				<?php if ($found_author) : ?>
					<ul class="sidebar-list">
						<li>
							<a href="/people/<?php echo $author_permalink; ?>">
								<div class="sidebar-item news">
									<img src="<?php echo $author_photo; ?>" />
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


				<?php $wpname = get_the_author(); echo $wpuID; ?>

				<span class="post-tags"><?php the_tags('Tags: ', ' ', ''); ?></span>
				<span class="post-admin-links"><?php edit_post_link('Edit', ' &#124; ', ''); ?></span>
			</div>
			<div class="content-right">
				<h4>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h4>
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
