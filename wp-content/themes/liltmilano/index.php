<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Template Name: Home
 */



get_header(); ?>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.0.0/dist/smooth-scroll.polyfills.min.js"></script>

<div class="container-fluid">

  <div class="row first-row">
      <div class="col-lg-7 left-col" style="padding-bottom: 27px">
        <a href="./">
          <div class="logo logo-home"></div>
        </a>
        <div class="row">
          <div class="col-xl-3 sedia-container">
            <img src="<?php echo get_stylesheet_directory_uri(). '/images/sedia-alta.jpg' ?>" class="sedia"/>
          </div>
          <div class="col-xl-9 headline-container">
            <p class="headline">
              SPAZIO LILT.<br/>
              IL TUO POSTO <br/>PER LA PREVENZIONE.
            </p>
            <p class="bodycopy">
              Visite ed esami di diagnosi precoce oncologica.
            </p>
          </div>
        </div>
      </div>

      <?php get_template_part('templates/form'); ?>

    </div>


<?php get_template_part('templates/photo-description'); ?>

<?php get_template_part('templates/map-home'); ?>

<script>
var scroll = new SmoothScroll('a[href*="#"]');
var geojson = {
  type: 'FeatureCollection',
  features:
    <?php
    echo get_all_JSON_spazi();
   ?>
  }
</script>
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/script.js' ?>"></script>

<?php get_footer();
?>
