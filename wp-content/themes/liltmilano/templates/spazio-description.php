<?php
$titolo = get_the_title();
$descrizione = get_field('descrizione');
$esami = get_terms(array(
   'post' => $id_spazio,
   'taxonomy' => 'esame'
));
$visite = get_terms(array(
   'post' => $id_spazio,
   'taxonomy' => 'visita'
));
$campi_spazio = get_spazio($id_spazio);
?>

<div class="row first-row">
  <div class="col-lg-7 left-col" style="padding-bottom: 27px">
    <a href="./">
      <div class="logo logo-single"></div>
    </a>
    <div class="row firstrowSpazio" style="margin-top: -70px; padding-bottom: 30px;">
      <div class="col-12 nopad">
        <h1 class="title-top" style="">Spazio LILT</h1>
        <h1 class="title-paragrafo" style="margin-bottom: 31px">
          <?php echo $titolo; ?>
        </h1>
        <?php echo $descrizione; ?>
      </div>

      <div class="col-lg-6 nopad col-lista">
            <div class="list-icon visite"></div>
            <div class="list-title">Visite</div>
            <?php
            foreach ($visite as $visita) {
                echo '<p class="paragrafo-puntato list">' . $visita->name . '</p>';
            };
             ?>
          </div>
          <div class="col-lg-6 nopad col-lista">
            <div class="list-icon esami"></div>
            <div class="list-title">Esami</div>
            <?php
            foreach ($esami as $esame) {
                echo '<p class="paragrafo-puntato list">' . $esame->name . '</p>';
            };
             ?>
          </div>


    </div>
  </div>

  <?php get_template_part('templates/form'); ?>

</div>
