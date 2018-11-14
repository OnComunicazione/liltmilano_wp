<?php
$campi_spazio = get_spazio($id_spazio);
$yt = get_field('youtube');

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
          <div class="footer-left righetta"></div>
          <a href="tel:<?php echo $campi_spazio['telefono'] ?>">
            <div class="footer-left numero">
              <div class="numero-icon"></div>
              <?php echo $campi_spazio['telefono'] ?>
            </div>
          </a>
          <a href="<?php echo $yt ?>" target="_blank"><div class="social-icon yt"></div></a>
          <a href="" target="_blank"><div class="social-icon ig"></div></a>
          <a href="https://twitter.com/liltmilano" target="_blank"><div class="social-icon tw"></div></a>
          <a href="https://www.facebook.com/spazioliltsesto/" target="_blank"><div class="social-icon fb"></div></a>
        </div>

      </div>

  </div>

<?php wp_footer(); ?>

</body>
</html>
