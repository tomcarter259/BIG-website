<?php if (!empty($person_personalsite1) || !empty($person_personalsite2) 
	|| !empty($person_personalsite3) || !empty($person_personalblog1)
	|| !empty($person_personalblog2) || !empty($person_personalblog3)
	|| !empty($person_twitter) || !empty($person_facebook)
	|| !empty($person_googleplus) || !empty($person_youtube)
	|| !empty($person_linkedin) || !empty($person_github)) : ?>

	<h3>On the Web</h3>
	<hr />
	<ul class="sidebar-list">
		<?php if (!empty($person_personalsite1)) : ?>
			<li>
				<a href="<?php echo $person_personalsite1; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/personal-site-icon.png" />
							Personal Website
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_personalsite2)) : ?>
			<li>
				<a href="<?php echo $person_personalsite2; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/personal-site-icon.png" />
						Other Personal Website
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_personalsite3)) : ?>
			<li>
				<a href="<?php echo $person_personalsite3; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/personal-site-icon.png" />
						Other Personal Website
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_personalblog1)) : ?>
			<li>
				<a href="<?php echo $person_personalblog1; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/personal-blog-icon.png" />
						Personal Blog
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_personalblog2)) : ?>
			<li>
				<a href="<?php echo $person_personalblog2; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/personal-blog-icon.png" />
						Personal Blog
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_personalblog3)) : ?>
			<li>
				<a href="<?php echo $person_personalblog3; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/personal-blog-icon.png" />
						Personal Blog
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_twitter)) : ?>
			<li>
				<a href="http://www.twitter.com/<?php echo $person_twitter; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/twitter-icon.png" />
						Twitter
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_facebook)) : ?>
			<li>
				<a href="http://www.facebook.com/<?php echo $person_facebook; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/facebook-icon.png" />
						Facebook
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_googleplus)) : ?>
			<li>
				<a href="<?php echo $person_googleplus; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/gplus-icon.png" />
						Google+
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_youtube)) : ?>
			<li>
				<a href="http://www.youtube.com/<?php echo $person_youtube; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/youtube-icon.png" />
						Youtube
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_linkedin)) : ?>
			<li>
				<a href="http://www.linkedin.com/in/<?php echo $person_linkedin; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/linkedin-icon.png" />
						Linkedin
					</div>
				</a>
			</li>
		<?php endif ?>

		<?php if (!empty($person_github)) : ?>
			<li>
				<a href="http://www.github.com/<?php echo $person_github; ?>">
					<div class="sidebar-item people">
						<img src="<?php echo get_template_directory_uri(); ?>
								/img/github-icon.png" />
						Github
					</div>
				</a>
			</li>
		<?php endif ?>
	</ul>

<?php endif ?>
