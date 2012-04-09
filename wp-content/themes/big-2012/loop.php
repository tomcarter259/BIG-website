<?php if( have_posts() ): ?>
	<?php while( have_posts() ):the_post(); ?>
		<?php //use unique id to style individual posts ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
			<p class="post-date"><strong>Posted on:</strong> <?php the_date(); ?></p>
			<div class="post-entry">
				<?php the_content(); ?>
				<div class="post-data">
					<p>
						<span class="post-tags"><?php the_tags('Tags: ', ' ', ''); ?></span>
						<span class="post-admin-links"><?php edit_post_link('Edit', ' &#124; ', ''); ?></span>
					</p>
				</div>
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
