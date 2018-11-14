<?php

function get_submissions() {
  $field_models = Ninja_Forms()->form( 2 )->get_fields();
  $allSubs_model = Ninja_Forms()->form( 2 )->get_subs();

  $fields = array();
  $fields_label = array();
  $submissions = array();

  // loop per prendere gli id e le label dei campi
  foreach($field_models as $key => $value) {
    array_push($fields, $value->get_setting('key'));
    array_push($fields_label, $value->get_setting('label'));

  }

  // loop per tirare giu tutte le submissions
  foreach($allSubs_model as $key => $submission_model) {
    $obj1 = new \stdClass;
    foreach ($fields_label as $key => $value) {
      $obj1->$value = $submission_model->get_field_value($fields[$key]);
    }
    array_push($submissions, $obj1);
  }

  return $submissions;

}

// function schedulingSend() {
//   $timestamp = wp_next_scheduled( 'parteMail' );
//   if(isset($timestamp)) {
//
//   } else {
//     wp_schedule_single_event( strtotime('11:32:00'), 'parteMail' );
//   }
// }
//
//
// function parteMailFunct() {
//   wp_mail( 'gabriele.merra@gmail.com', 'Automatic email', 'Automatic scheduled email from WordPress.');
// }
//
// add_action( 'parteMail', 'parteMailFunct' );




?>
