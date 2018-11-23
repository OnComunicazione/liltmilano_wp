<?php
/**
 * Template Name: Database
 */

if (!is_user_logged_in()) wp_redirect(home_url());

$current_user_id = get_current_user_id();
$current_user_spaziolilt = get_field('spazio_lilt_utente','user_'.$current_user_id);

$req_uri = $_SERVER['REQUEST_URI'];
$results = get_submissions($current_user_spaziolilt, $_GET['pag']);
$submissions = $results['submissions'];
$pagina = $results['pagina_corrente'];
$n_pagine = $results['n_pagine'];
$labels = array();
$labels['milano-caterinadaforli'] = 'Viale Caterina da Forlì';
$labels['milano-neera'] = 'Via Neera';
$labels['milano-vigano'] = 'Via Viganò';
$labels['brugherio-lombardia'] = 'Brugherio - Viale Lombardia';
$labels['cernusco-fatebenefratelli'] = 'Cernusco - Via Fatebenefratelli';
$labels['novate-manzoni'] = 'Novate - Via Manzoni';
$labels['sesto-fratellicairoli'] = 'Sesto - Via Fratelli Cairoli';
$labels['0'] = 'No';
$labels['1'] = 'Sì';

get_header(); ?>

<div class="container-fluid nopad db">
    <a href="./">
      <div class="logo logo-home"></div>
    </a>
    <div class="row">
      <h1 class="col-2 title-paragrafo">Iscrizioni</h1>
      <a class="col-2 offset-8 formBtn" target="_blank" href="<?php echo home_url().'/export'?>">
        SCARICA XLS
      </a>
    </div>
    <table>
      <thead>
        <th class="pad"></th>

        <?php
        foreach ($submissions[0] as $key=>$value) {
            echo '
            <th class="city">'.$key.'</th>
            ';
        };
        ?>

        <th class="pad"></th>
      </thead>
      <tbody>

        <?php
        foreach ($submissions as $sub) {
            echo '
            <tr>
              <td></td>';
              foreach ($sub as $key=>$value) {
                if ($key === 'Spazio LILT' || $key === 'Spedito')  {echo '<td>' . $labels[$value] .'</td>';}
                else {echo '<td>' . $value .'</td>';};

              };
            echo '<td></td>
            </tr>
            ';
        };
        ?>


      </tbody>
    </table>

    <div class="row pag">
      <h1 class="col-2 city">Pag. <?php echo $pagina; ?> di <?php echo $n_pagine; ?></h1>
      <div class="col-2 offset-8 pagination">
        <?php if ($pagina <= 1) : ?>
          <img class="inactive first" src="<?php echo get_stylesheet_directory_uri(). '/images/arrow_b.svg' ?>">
        <?php else : ?>
          <a href="./?pag=<?php echo $pagina <= 1 ? 1 : $pagina-1; ?>">
            <img class="first" src="<?php echo get_stylesheet_directory_uri(). '/images/arrow_b.svg' ?>">
          </a>
        <?php endif; ?>
          <!-- <h1 class="col-2 city"> 1 </h1> -->
        <?php if ($pagina >= $n_pagine) : ?>
          <img class="inactive last" src="<?php echo get_stylesheet_directory_uri(). '/images/arrow_b.svg' ?>">
        <?php else : ?>
          <a href="./?pag=<?php echo $pagina >= $n_pagine ? $n_pagine : $pagina+1; ?>">
            <img class="last" src="<?php echo get_stylesheet_directory_uri(). '/images/arrow_b.svg' ?>">
          </a>
        <?php endif; ?>
      </div>
    </div>

  </div>


  <?php wp_footer(); ?>

  </body>
  </html>
