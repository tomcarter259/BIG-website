<?php
/**
 * Sponsors Page Template
 *
 * This is used to display the group's sponsors
 *
Template Name: Sponsors
 */

get_header(); ?>

<div class="container">

<?php
	$sponsors = new Pod('sponsors');
	$params = array();
	$params['orderby'] = 'name ASC';
	$params['limit'] = -1;
	$sponsors->findRecords($params);
	$total_sponsors = $sponsors->getTotalRows();

	if ($total_sponsors > 0) {
		while ($sponsors->fetchRecord()) {
			$sponsor_name = $sponsors->get_field('name');
			$sponsor_url  = $sponsors->get_field('url');
			$sponsor_logo = $sponsors->get_field('logo');
			$sponsor_logo = $sponsor_logo[0]['guid'];
?>

	<div class="sponsors-sponsor">
		<div class="sponsors-logo">
			<a href="<?php echo $sponsor_url; ?>">
				<?php if (!empty($sponsor_logo)) : ?>
					<img class="sponsors-logo" src="<?php echo $sponsor_logo; ?>" alt="<?php echo $sponsor_name ?>" />
				<?php else : ?>
					<img class="sponsors-logo" src="<?php echo get_template_directory_uri(); ?>/img/default-sponsor-image.png" />
				<?php endif ?>
				<div class="sponsors-name">
					<p><?php echo $sponsor_name; ?></p>
				</div>
			</a>
		</div>
	</div>
	
<?php
		}
	}
?>

</div>

<?php get_footer(); ?>

