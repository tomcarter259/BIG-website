<?php
/**
 * Publicaions Page Template
 *
 * This is used to display the list of all publications
 *
Template Name: Publications
 */

get_header(); ?>

<div id="publications" class="container">

<?php
$_GET['bib']='wp-content/themes/BIG-website/bibliography.bib';
$_GET['all']=1;
include( 'bibtexbrowser.php' );
?>	

</div>

<?php get_footer(); ?>

