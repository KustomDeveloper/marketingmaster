<?php
/*
*  Process Local Schema Form
*/ 
$local_schema_name = get_option('local-business-name'); 
$local_schema_img = get_option('local-business-img'); 
$local_schema_phone = get_option('local-business-phone'); 
$local_schema_logo = get_option('local-business-logo'); 
$local_schema_description = get_option('local-business-description'); 
$local_schema_hours = get_option('local-business-hours'); 
$local_schema_street = get_option('local-business-street-address'); 
$local_schema_city = get_option('local-business-city'); 
$local_schema_state = get_option('local-business-state'); 
$local_schema_zip = get_option('local-business-zip'); 

if(isset($_POST['submit_btn'])) {
  $options_array = array( 'local-business-name', 'local-business-img', 'local-business-phone', 'local-business-logo', 'local-business-description', 'local-business-hours', 'local-business-street-address', 'local-business-city', 'local-business-state', 'local-business-zip' );

  function updateOptions($name) {
    if(isset($_POST[$name])) {
      $value = $_POST[$name];
      update_option($name, $value);
    }
  }

  //Update options
  foreach ($options_array as $value) {
    updateOptions($value);
  }

  echo "<script>window.location.reload();</script>";
}

/*
*  Process Product Form
*/ 
?>