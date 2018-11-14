<?php
$campi_spazio = get_spazio($id_spazio);
?>

<div class="row">
        <div class="col-lg-7" style="display: flex;">
          <div class="img-bottom-right">
          </div>
        </div>
        <div class="col-lg-5 left-col bot background-black" style="padding-bottom: 57px"  >
          <h1 class="title-paragrafo" style="margin-bottom: 31px">I nostri orari</h1>

            <?php echo $campi_spazio['orari'] ?>

          <h1 class="title-paragrafo" style="margin-bottom: 31px">Prenotazioni</h1>

            <?php echo $campi_spazio['prenotazioni'] ?>


        </div>
</div>
