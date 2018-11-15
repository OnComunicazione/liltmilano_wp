<?php
$titolo = get_field('titolo_paragrafo');
$testo = get_field('testo_paragrafo');
$immagine = get_field('immagine_home');
?>

<div class="row">
  <div class="col-lg-7" style="display: flex;">
    <div class="img-bottom-right" style="background-image: url(<?php echo $immagine; ?>)">
    </div>
  </div>
  <div class="col-lg-5 left-col bot" style="padding-bottom: 57px"  >
    <h1 class="title-paragrafo" style="margin-bottom: 31px"><?php echo $titolo; ?></h1>
      <?php echo $testo; ?>
    <a href="#prenota">
      <div class="btn-sito">
        <div class="scritta-sito">PRENOTA UNA VISITA</div>
        <div class="freccia-sito"></div>
      </div>
    </a>
  </div>
</div>
