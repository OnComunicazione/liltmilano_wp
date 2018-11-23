<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.

 */

get_header(); ?>

<?php
// Il Loop
while ( have_posts() ) :
	the_post();
  $id_spazio = get_field('spazio_lilt')->ID;
	// PC::debug($id_spazio);
?>

<div class="container-fluid">

<?php get_template_part('templates/spazio-description'); ?>
<?php if (get_field('video')) get_template_part('templates/video'); ?>
<?php get_template_part('templates/news-orari'); ?>
<?php get_template_part('templates/raggiungerci-photo'); ?>


<?php
get_footer();

endwhile;
?>
