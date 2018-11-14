<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Database
 */

get_header(); ?>

<div class="container-fluid nopad db">
    <a href="./">
      <div class="logo logo-home"></div>
    </a>
    <div class="row">
      <h1 class="col-2 title-paragrafo">Iscrizioni</h1>
      <div class="col-2 offset-8 formBtn">
        SCARICA XLS
      </div>
    </div>
    <table>
      <thead>
        <th class="pad"></th>
        <th class="city">Nome</th>
        <th class="city">Cognome</th>
        <th class="city">Tipo di visita</th>
        <th class="city">Lorem ipsum</th>
        <th class="city">Lorem</th>
        <th class="pad"></th>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td>Ciccio</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <div class="row pag">
      <h1 class="col-2 city">Pag. 1</h1>
      <div class="col-2 offset-8 pagination">
        <img class="inactive" src="<?php echo get_stylesheet_directory_uri(). '/images/arrow_b.svg' ?>">
        <h1 class="col-2 city active">1</h1>
        <h1 class="col-2 city">2</h1>
        <h1 class="col-2 city">3</h1>
        <img src="<?php echo get_stylesheet_directory_uri(). '/images/arrow_b.svg' ?>">
      </div>
    </div>

  </div>


  <?php wp_footer(); ?>

  </body>
  </html>
