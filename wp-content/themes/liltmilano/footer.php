<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

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
          <a href="tel:+390297389893">
            <div class="footer-left numero">
              <div class="numero-icon"></div>
              02 97389893
            </div>
          </a>
          <a href="https://www.youtube.com/user/LILTMilanoChannel" target="_blank"><div class="social-icon yt"></div></a>
          <a href="https://www.instagram.com/liltmilano/" target="_blank"><div class="social-icon ig"></div></a>
          <a href="https://twitter.com/liltmilano" target="_blank"><div class="social-icon tw"></div></a>
          <a href="https://www.facebook.com/spazioliltsesto/" target="_blank"><div class="social-icon fb"></div></a>
        </div>

      </div>
      
  </div>

<?php wp_footer(); ?>

</body>
</html>
