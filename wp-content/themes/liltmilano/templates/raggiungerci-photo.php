<?php
$immagine = get_field('immagine');
$campi_spazio = get_spazio($id_spazio);

?>

<div class="row raggiungerci">
        <div class="col-lg-7 left-col bot" style="padding-bottom: 40px">
          <h1 class="title-paragrafo" style="margin-bottom: 45px">Come raggiungerci</h1>

              <?php echo $campi_spazio['come_raggiungerci']; ?>

        </div>
        <div class="col-lg-5" style="display: flex;">
          <div class="img-bottom-right" style="background-image: url(<?php echo $immagine; ?>);">
          </div>
        </div>
</div>
