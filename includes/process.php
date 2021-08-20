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
  if (isset($_POST['local-business-name'])) {
    $name = $_POST['local-business-name'];
    update_option('local-business-name', $name);
  }
  if (isset($_POST['local-business-img'])) {
    $img = $_POST['local-business-img'];
    update_option('local-business-img', $img);
  }
  if (isset($_POST['local-business-phone'])) {
    $phone = $_POST['local-business-phone'];
    update_option('local-business-phone', $phone);
  }
  if (isset($_POST['local-business-logo'])) {
    $logo = $_POST['local-business-logo'];
    update_option('local-business-logo', $logo);
  }
  if (isset($_POST['local-business-description'])) {
    $description = $_POST['local-business-description'];
    update_option('local-business-description', $description);
  }
  if (isset($_POST['local-business-hours'])) {
    $hours = $_POST['local-business-hours'];
    update_option('local-business-hours', $hours);
  }
  if (isset($_POST['local-business-street-address'])) {
    $street = $_POST['local-business-street-address'];
    update_option('local-business-street-address', $street);
  }
  if (isset($_POST['local-business-city'])) {
    $city = $_POST['local-business-city'];
    update_option('local-business-city', $city);
  }
  if (isset($_POST['local-business-state'])) {
    $state = $_POST['local-business-state'];
    update_option('local-business-state', $state);
  }
  if (isset($_POST['local-business-zip'])) {
    $zip = $_POST['local-business-zip'];
    update_option('local-business-zip', $zip);
  }

  echo "<script>window.location.reload();</script>";
}
?>