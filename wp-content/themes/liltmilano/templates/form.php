<div class="col-lg-5 background-grey container-form-prenotazione" id="prenota" style="height: auto; min-height: 95vh">
  <h1>Prenota qui la tua visita</h1>
  <p class="paragrafo-form">
    Ti ricontatteremo noi entro 48 ore<br/>
    per fissare un appuntamento.
  </p>
  <form class="form" autoComplete="on" >

      <?php
      echo do_shortcode('[ninja_form id=2]');
      ?>

        <!-- <p class="paragrafo-bot">* Campi obbligatori.</p> -->

  </form>
  <script>

  // window.document.onload = function(e) {
  //   var a = document.querySelectorAll('.ninja-forms-field');
  //   console.log(a);
  //   a.forEach(function(i){
  //     i.addEventListener('focus', function(e) {
  //       e.target.parentNode.parentNode.children[0].children[0].classList.add('focused')
  //     })
  //   })
  //
  // };

  </script>
</div>
