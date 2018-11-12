<?php

wp_schedule_single_event( strtotime('17:25:00'), 'parteMail' );



function parteMailFunct() {
  wp_mail( 'gabriele.merra@gmail.com', 'Automatic email', 'Automatic scheduled email from WordPress.');
}

add_action( 'parteMail', 'parteMailFunct' );


?>
