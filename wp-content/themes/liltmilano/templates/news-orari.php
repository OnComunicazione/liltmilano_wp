<?php
$id_spazio = get_field('spazio_lilt')->ID;
$campi_spazio = get_spazio($id_spazio);
$news = get_articles($id_spazio);
?>

<div class="row news">
        <div class="col-lg-7 nopad" style="display: flex;">
          <div class="swiper-container">
              <div class="swiper-wrapper">

                <?php foreach ($news as $single_new) {  ?>

                  <div class="swiper-slide news-image <?php if ($single_new['titolo']) echo 'overlay' ?>" style="background-image:url(<?php echo $single_new['immagine'] ?>)">
                    <?php if ($single_new['titolo']) :  ?>
                      <h1 class="news-title">
                        <?php echo $single_new['titolo'] ?>
                      </h1>
                    <?php endif; ?>
                  </div>

                <?php }; ?>

              </div>
              <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-5 left-col bot background-black" style="padding-bottom: 57px"  >
          <h1 class="title-paragrafo" style="margin-bottom: 31px">I nostri orari</h1>
          <?php echo $campi_spazio['orari'] ?>
          <h1 class="title-paragrafo" style="margin-bottom: 31px">Prenotazioni</h1>
          <?php echo $campi_spazio['prenotazioni'] ?>
        </div>
</div>
