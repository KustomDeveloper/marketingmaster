<?php
/*
*  Process Local Schema Form
*/ 
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
}

/*
*  Process Product Form
*/ 
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
}

/*
*  Process Customer Reviews
*/ 
if(isset( $_POST['customer_review_submit_btn'] )) {
  $options_array = array( 'local-schema-customer-review-how-many-to-show', 
  'local-schema-customer-review-captcha', 'local-schema-customer-review-site-key', 'local-schema-customer-review-secret-key', 'local-schema-customer-review-pagination' );

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
}
?>