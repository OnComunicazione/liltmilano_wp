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

?>



<div class="container-fluid">

<?php get_template_part('templates/spazio-description'); ?>
<?php get_template_part('templates/photo-orari'); ?>
<?php get_template_part('templates/raggiungerci-photo'); ?>


<?php
print_r(get_field('youtube'));
get_footer();

endwhile;
?>
