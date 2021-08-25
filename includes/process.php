<?php
/*
*  Process Local Schema Form
*/ 
$local_schema_name = get_option('local-business-name'); 
$local_schema_img = get_option('local-business-img'); 
$local_schema_phone = get_option('local-business-phone'); 
$local_schema_email = get_option('local-business-email'); 
$local_schema_logo = get_option('local-business-logo'); 
$local_schema_description = get_option('local-business-description'); 
$local_schema_hours = get_option('local-business-hours'); 
$local_schema_street = get_option('local-business-street-address'); 
$local_schema_city = get_option('local-business-city'); 
$local_schema_state = get_option('local-business-state'); 
$local_schema_zip = get_option('local-business-zip'); 
$local_schema_map = get_option('local-business-map'); 
$local_schema_latitude = get_option('local-business-latitude'); 
$local_schema_longitude = get_option('local-business-longitude'); 
$local_schema_facebook = get_option('local-business-facebook'); 
$local_schema_twitter = get_option('local-business-twitter'); 
$local_schema_youtube = get_option('local-business-youtube'); 
$local_schema_pinterest = get_option('local-business-pinterest'); 

if(isset($_POST['submit_btn'])) {
  $options_array = array( 'local-business-name', 'local-business-img', 'local-business-phone', 'local-business-email', 'local-business-logo', 'local-business-description', 'local-business-hours', 'local-business-street-address', 'local-business-city', 'local-business-state', 'local-business-zip', 'local-business-map', 'local-business-latitude', 'local-business-longitude', 'local-business-facebook', 'local-business-twitter', 'local-business-youtube', 'local-business-pinterest' );

  function updateOptions($name) {
    if(isset($_POST[$name])) {
      $value = $_POST[$name];
      update_option($name, $value);
    }
  }

  //Update options
  foreach($options_array as $value) {
    updateOptions($value);
  }

  echo "<script>window.location.reload();</script>";
}

/*
*  Process Product Form
*/ 
$local_schema_product_name = get_option('local-schema-product-name'); 
$local_schema_product_description = get_option('local-schema-product-description'); 

if(isset( $_POST['product_review_submit_btn'] )) {
  $options_array = array( 'local-schema-product-name', 'local-schema-product-description' );

  function updateOptions($name) {
    if(isset($_POST[$name])) {
      $value = $_POST[$name];
      update_option($name, $value);
    }
  }

  //Update options
  foreach($options_array as $value) {
    updateOptions($value);
  }

  echo "<script>window.location.reload();</script>";
}



?>