<?php

function get_submissions($spazio_lilt, $page=1, $per_page=15) {
  if ($page < 1) $page = 1;
  if (!isset($page)) $page = 1;
  if (!isset($per_page)) $per_page = 15;

  $field_models = Ninja_Forms()->form( 2 )->get_fields();
  $allSubs_model = Ninja_Forms()->form( 2 )->get_subs();
  $filtered_subs = array();

  foreach($allSubs_model as $key => $submission_model) {
    if ($submission_model->get_field_value('spazio_lilt_1542724594218') === $spazio_lilt) {
      array_push($filtered_subs, $submission_model);
    }
  }

  $n_pagine = ceil(count($filtered_subs)/$per_page);
  $filtered_subs = array_slice($filtered_subs, $per_page*$page-$per_page, $per_page);
  $fields = array();
  $fields_label = array();
  $submissions = array();

  // loop per prendere gli id e le label dei campi
  foreach($field_models as $key => $value) {
    array_push($fields, $value->get_setting('key'));
    array_push($fields_label, $value->get_setting('label'));
  }

  // loop per tirare giu tutte le submissions
  foreach($filtered_subs as $key => $submission_model) {
    $obj1 = new \stdClass;
    foreach ($fields_label as $key => $value) {
      if ($value !== 'PRENOTA' && $value !== 'Privacy Policy') {
        $obj1->$value = $submission_model->get_field_value($fields[$key]);
      }
    }
    array_push($submissions, $obj1);
  }

  return array(
    'submissions'=> $submissions,
    'n_pagine'=> $n_pagine,
    'pagina_corrente'=> $page
  );

}


function get_submissions_all($spazio_lilt) {

  $field_models = Ninja_Forms()->form( 2 )->get_fields();
  $allSubs_model = Ninja_Forms()->form( 2 )->get_subs();
  $filtered_subs = array();

  foreach($allSubs_model as $key => $submission_model) {
    if ($submission_model->get_field_value('spazio_lilt_1542724594218') === $spazio_lilt) {
      array_push($filtered_subs, $submission_model);
    }
  }

  $fields = array();
  $fields_label = array();
  $submissions = array();

  // loop per prendere gli id e le label dei campi
  foreach($field_models as $key => $value) {
    array_push($fields, $value->get_setting('key'));
    array_push($fields_label, $value->get_setting('label'));
  }

  // loop per tirare giu tutte le submissions
  foreach($filtered_subs as $key => $submission_model) {
    $obj1 = new \stdClass;
    foreach ($fields_label as $key => $value) {
      if ($value !== 'PRENOTA' && $value !== 'Privacy Policy' && $value !== 'Spedito') {
        $obj1->$value = $submission_model->get_field_value($fields[$key]);
      }
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


// function additional_custom_styles() {
//
//     /*Enqueue The Styles*/
//     wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/style2.css' );
// }
// add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );
//



// function on_form_loaded() {
//   wp_enqueue_script('form', bloginfo('template_url') . '/script-form.js', false);
// }
// // do_action('ninja_forms_loaded');
// add_action('ninja_forms_loaded', 'on_form_loaded', 10, 0);



// query per un singolo spazio lilt
function get_spazio($id_spazio) {
  $args = array(
  	   'post_type' => 'spazio_lilt',
       'post' => $id_spazio
  );

  $query = new WP_Query( $args );
  $obj = array();

  // Il Loop
  while ( $query->have_posts() ) :
  	$query->the_post();
    $coords = get_field('coordinate');
    $obj['lat'] = $coords['lat'];
    $obj['lng'] = $coords['lng'];
    $obj['citta'] = get_field('citta');
    $obj['indirizzo'] = get_field('indirizzo');
    $obj['url'] = get_field('url');
    $obj['affollamento'] = get_field('affollamento');
    $obj['orari'] = get_field('orari');
    $obj['prenotazioni'] = get_field('prenotazioni');
    $obj['come_raggiungerci'] = get_field('come_raggiungerci');
    $obj['telefono'] = get_field('telefono');
  endwhile;

  wp_reset_query();
  // wp_reset_post_data();
  return $obj;
};

// query per tutti gli spazi lilt in formato json (da usare nelle mappe)
function get_all_JSON_spazi() {
  $args = array(
  	   'post_type' => 'spazio_lilt'
  );
  $query = new WP_Query( $args );
  $obj_to_return = array();
  $obj = array();

  // Il Loop
  while ( $query->have_posts() ) :
  	$query->the_post();
    $coords = get_field('coordinate');
    $esami = get_terms(array(
       'post' => get_the_ID(),
       'taxonomy' => 'esame'
    ));
    $visite = get_terms(array(
       'post' => get_the_ID(),
       'taxonomy' => 'visita'
    ));
    $obj['type'] = 'Feature';
    $obj['properties'] = array(
      'label' => get_field('indirizzo'),
      'city' => get_field('citta'),
      'size' => 1,
      'big' => false,
      'url' => get_field('url'),
      'esami' => $esami,
      'visite' => $visite,
      'affollamento' => get_field('affollamento'),
    );
    $obj['geometry'] = array(
      'coordinates' => array(
        'lng' => floatval($coords['lng']),
        'lat' => floatval($coords['lat'])
      ),
      'type' => 'Point'
    );
    array_push($obj_to_return, $obj);
  endwhile;
  wp_reset_query();
  // wp_reset_post_data();
  return json_encode($obj_to_return);
};

// query per gli articoli di uno spazio
function get_articles($id_spazio) {
  $args = array(
  	   'post_type' => 'post',
       // 'post__in' => $id_spazio,
       'meta_query' => array(
         array(
           'key' => 'spazio_lilt',
           'value' => $id_spazio,
           'compare' => 'LIKE'
         )
       )
  );
  $query = new WP_Query( $args );
  $obj = array();
  $obj_to_return = array();
  while ( $query->have_posts() ) :
  	$query->the_post();
    $obj['immagine'] = get_field('immagine_banner');
    $obj['titolo'] = get_field('testo_banner');
    array_push($obj_to_return, $obj);
  endwhile;
  wp_reset_query();
  return $obj_to_return;
};


?>
