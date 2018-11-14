<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Mappa
 */

get_header(); ?>

<div class="container-fluid">

  <div class="row first-row">
          <div class="col-lg-7 left-col" style="padding-bottom: 27px">
            <a href="./">
              <div class="logo logo-single"></div>
            </a>

            <div class="row spazi-lilt" id="intro" style="margin-top: -70px; margin-left: 0; padding-bottom: 30px;">
              <div class="col-12">
                <h1 class="title-paragrafo" style="margin-bottom: 31px">Spazi LILT</h1>
                <h1 class="city">Milano</h1>
                <div class="col-lista">
                      <p class="paragrafo-puntato list">
                      Via Viganò, 4
                      </p>
                      <p class="paragrafo-puntato list">
                      Via Viganò, 4
                      </p>
                      <p class="paragrafo-puntato list">
                      Via Viganò, 4
                      </p>
                      <p class="paragrafo-puntato list">
                      Via Viganò, 4
                      </p>
                </div>
                <h1 class="city">Milano</h1>
                <div class="col-lista">
                      <p class="paragrafo-puntato list">
                      Via Viganò, 4
                      </p>
                      <p class="paragrafo-puntato list">
                      Via Viganò, 4
                      </p>
                </div>
              </div>
            </div>

            <div class="row spazi-lilt" id="details" style="margin-top: -70px; margin-left: 0; padding-bottom: 30px; display: none">
              <div class="col-12">
                <h1 class="title-paragrafo" style="margin-bottom: 31px">Spazi LILT</h1>
                <img src="<?php echo get_stylesheet_directory_uri(). '/images/back.svg' ?>" class="back" onclick="backToMap()"/>
                <h1 class="city" id="city"></h1>
                <h1 class="title-top" id="label"></h1>
                <div class="row listaVisiteMap ">
                  <div class="col-sm-6 paragrafo white nopad">
                    <div class="list-title">Visite</div>
                    <ul>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                    </ul>
                  </div>
                  <div class="col-sm-6 paragrafo white nopad">
                    <div class="list-title">Esami</div>
                    <ul>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                      <li>Tipo visita</li>
                    </ul>
                  </div>
                </div>
                <a>
                  <div class="btn-sito">
                    <div class="scritta-sito">SCOPRI DI PIÙ</div>
                    <div class="freccia-sito"></div>
                  </div>
                </a>
            </div>
          </div>

          </div>
          <div class="col-lg-5" id="map" style="overflow: hidden">
          </div>
</div>

<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/script.js' ?>"></script>

<?php get_footer();
