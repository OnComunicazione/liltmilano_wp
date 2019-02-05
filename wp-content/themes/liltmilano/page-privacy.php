<?php
/**
 * Template Name: Privacy
 */
get_header(); ?>
<?php
// Il Loop
while ( have_posts() ) :
	the_post();
?>

<div class="container-fluid">

  <div class="row first-row" style="min-height: 88vh;">
          <div class="col-lg-7 left-col" style="padding-bottom: 27px">
            <a href="<?php echo bloginfo('url') ?>">
              <div class="logo logo-single"></div>
            </a>

            <div class="row spazi-lilt" id="intro" style="margin-top: -70px; margin-left: 0; padding-bottom: 30px;">
              <div class="col-12">
                <h1 class="title-paragrafo" style="margin-bottom: 31px">Privacy Policy</h1>
                <?php echo the_content(); ?>
              </div>
            </div>



          </div>

</div>

<?php get_footer();
endwhile;
