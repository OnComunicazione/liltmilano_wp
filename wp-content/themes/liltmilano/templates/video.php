<?php
$video = get_field('video');
?>

<div class="row video">
  <a>
    <div class="btn-scopri">
      SCOPRI DI PIÙ
      <div class="freccia-scopri"></div>
    </div>
  </a>
  <!-- <a href="#prenota">
    <div class="btn-scopri">
      TORNA SU
      <div class="freccia-su"></div>
    </div>
  </a> -->
  <div class="scopri">
    SCOPRI TUTTI I SERVIZI<br/>
    DELLO SPAZIO LILT
  </div>
  <video controls width='100%' height='100%' poster="">
    <source src="<?php echo $video; ?>" type="video/mp4" preload="metadata"/>
    <!-- <source src="https://spaziolilt.mi.it/video/video.ogg" type="video/ogg" preload="metadata"/> -->
    Il tuo browser non supporta i video HTML5.
  </video>
</div>
