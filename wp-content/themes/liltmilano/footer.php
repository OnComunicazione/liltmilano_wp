<?php
$yt = get_field('youtube');
$fb = get_field('facebook');
$ig = get_field('instagram');
$tw = get_field('twitter');
$tel = get_field('telefono');
// $campi_spazio = get_spazio($id_spazio);
?>

<div class="footer">
        <div class="row nomargin" style="margin-bottom: 23px">
          <a href="./spazi-lilt.html" target="_blank" class="footer-left ragionesociale linkmenu" style="margin-left: 0">Spazi LILT</a>
          <div class="footer-left righetta"></div>
          <a href="https://www.legatumori.mi.it/" target="_blank" class="footer-left ragionesociale linkmenu">LILT Milano</a>
          <div class="footer-left righetta"></div>
          <a onClick={this.openNewsletter} class="footer-left ragionesociale linkmenu" style="cursor: pointer">Newsletter</a>
        </div>
        <div class="row nomargin" style="display: block">
          <div class="footer-left ragionesociale">
            © 2015 Lega Italiana per la Lotta contro i Tumori - Via Venezian, 1 20133 Milano
          </div>
          <?php if ($tel) : ?>
            <div class="footer-left righetta"></div>
            <a href="tel:<?php echo $tel ?>">
              <div class="footer-left numero">
                <div class="numero-icon"></div>
                <?php echo $tel; ?>
              </div>
            </a>
          <?php endif; ?>

          <?php if ($yt) echo "<a href='" . $yt . "'target='_blank'><div class='social-icon yt'></div></a>"; ?>
          <?php if ($ig) echo "<a href='" . $ig . "'target='_blank'><div class='social-icon ig'></div></a>"; ?>
          <?php if ($tw) echo "<a href='" . $tw . "'target='_blank'><div class='social-icon tw'></div></a>"; ?>
          <?php if ($fb) echo "<a href='" . $fb . "'target='_blank'><div class='social-icon fb'></div></a>"; ?>

        </div>

      </div>

  </div>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
  <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(). '/script.js' ?>"></script>

<?php wp_footer(); ?>

</body>
</html>
