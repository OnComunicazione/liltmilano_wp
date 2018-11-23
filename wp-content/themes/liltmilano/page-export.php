<?php
/**
 * Template Name: EXPORT
 */

if (!is_user_logged_in()) wp_redirect(home_url());

$current_user_id = get_current_user_id();
$current_user_spaziolilt = get_field('spazio_lilt_utente','user_'.$current_user_id);
// PC::debug($results);

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
$results = get_submissions_all($current_user_spaziolilt);

// Registro le chiavi
$chiavi = array();
foreach ($results[0] as $key=>$val) {
  array_push($chiavi, $key);
}
fputcsv($output, $chiavi);

// Registro i Values
$righe = array();
foreach ($results as $val) {
  fputcsv($output, array_values((array)$val));
}
