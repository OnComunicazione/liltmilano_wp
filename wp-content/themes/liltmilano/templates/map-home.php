<?php
?>

<div class="row home" style="min-height: 500px">
      <div class="col-lg-7 nopad" id="map" style="display: flex; background-color: #e9e9e9">
      </div>
      <div class="col-lg-5 left-col bot background-black" style="padding-bottom: 57px">

        <div id="intro">
          <h1 class="title-paragrafo" style="margin-bottom: 31px">
            SCOPRI TUTTI GLI SPAZI LILT A MILANO E DINTORNI.
          </h1>
          <p class="paragrafo white" style="margin-bottom: 21px;">
          Clicca su un pin nella mappa per scoprire i servizi attivi nello Spazio LILT selezionato ed entrare nella pagina dedicata, dove potrai trovare orari di apertura e altre informazioni.
          </p>
        </div>

        <div id="details" style="display: none">
          <img src="<?php echo get_stylesheet_directory_uri(). '/images/back_w.svg' ?>" class="back" onclick="backToMap()"/>
          <h1 class="city" id="city"></h1>
          <h1 class="title-top" id="label"></h1>
          <div class="row listaVisiteMap ">
            <div class="col-sm-6 paragrafo white nopad">
              <ul>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
              </ul>
            </div>
            <div class="col-sm-6 paragrafo white nopad">
              <ul>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
                <li>Tipo visita</li>
              </ul>
            </div>
          </div>
          <a style="position: absolute; bottom: 60px;">
            <div class="btn-sito">
              <div class="scritta-sito">SCOPRI DI PIÙ</div>
              <div class="freccia-sito"></div>
            </div>
          </a>
        </div>

      </div>
    </div>
