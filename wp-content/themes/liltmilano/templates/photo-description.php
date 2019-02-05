<?php
$titolo = get_field('titolo_paragrafo');
$testo = get_field('testo_paragrafo');
$immagine = get_field('immagine_home');
$news = get_articles();
?>

<div class="row">
  <div class="col-lg-7 nopad" style="display: flex;">
    <!-- <div class="img-bottom-right">
    </div> -->

    <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($news as $single_new) {  ?>
            <div class="swiper-slide news-image <?php if ($single_new['titolo']) echo 'overlay' ?>" style="background-image:url(<?php echo $single_new['immagine'] ?>)">
              <?php if ($single_new['titolo']) :  ?>

                <?php if ($single_new['url']) :  ?>
                <a href="<?php echo $single_new['url'] ?>">
                  <div class="overlayLink">
                <?php endif; ?>

                  <h1 class="news-title">
                    <?php echo $single_new['titolo'] ?>
                  </h1>

                <?php if ($single_new['url']) :  ?>
                  </div>
                </a>
                <?php endif; ?>

              <?php endif; ?>
            </div>
          <?php }; ?>
        </div>
        <div class="swiper-pagination"></div>
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
