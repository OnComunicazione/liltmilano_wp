<?php
$campi_spazio = get_spazio($id_spazio);
$campi_articolo = get_articles($id_spazio)[0];
// print_r($campi_articolo);
?>

<div class="row news">
        <div class="col-lg-7" style="display: flex;">
          <div class="img-bottom-right" style="background-image:url(<?php echo $campi_articolo['immagine'] ?>)">
            <h1 class="news-title">
              <?php echo $campi_articolo['titolo'] ?>
            </h1>
          </div>
        </div>
        <div class="col-lg-5 left-col bot background-black" style="padding-bottom: 57px"  >
          <h1 class="title-paragrafo" style="margin-bottom: 31px">I nostri orari</h1>
          <?php echo $campi_spazio['orari'] ?>
          <h1 class="title-paragrafo" style="margin-bottom: 31px">Prenotazioni</h1>
          <?php echo $campi_spazio['prenotazioni'] ?>
        </div>
</div>
