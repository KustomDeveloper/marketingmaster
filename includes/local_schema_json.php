<?php
// Include jsonld for processing json in php
include( plugin_dir_path( __FILE__ ) . 'jsonld.php');

function local_schema_json() { 
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
  $local_schema_facebook = "https://facebook.com";
  $local_schema_twitter = "https://twitter.com";
  $local_schema_youtube = "https://youtube.com";
  $local_schema_pinterest = "https://pinterest.com";

  $local_schema_json = (object)array(
    "@context" => "http://schema.org/",
    "@type" => "LocalBusiness",
    "description" => "$local_schema_description",
    "url" => "https://septictankelpasotx.com/",
    "logo"=> "$local_schema_logo",
    "hasMap"=> "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.414927727163!2d-106.23641268484558!3d31.677222981317982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e741e6094ebf97%3A0x738942e1452114ba!2sSeptic+Tank+Pros+El+Paso+TX!5e0!3m2!1sen!2sph!4v1521040364491\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>",
    "email" => "info@septictankelpasotx.com",
    "priceRange"=> "$$$ - $$$$$",
    "image" => "https://septictankelpasotx.com/wp-content/uploads/2015/05/Septic-Tank-Pros-El-Paso-TX-Logo.jpg",
    "name" => "$local_schema_name",
    "address" => (object)array("@type" => "PostalAddress",  "streetAddress" => "13154 Sparks Dr", "addressLocality" => "El Paso",
    "addressRegion" => "TX", "postalCode" => "79928"),
    "geo" => (object)array("@type" => "GeoCoordinates",  "latitude" => "31.677223",
    "longitude" => "-106.2364127"),
    "sameAs" => [$local_schema_facebook, $local_schema_twitter, $local_schema_youtube, $local_schema_pinterest]
  );
  
  echo '<script type="application/ld+json">';
  echo json_encode($local_schema_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
  echo '</script>';

}

add_action('wp_head', 'local_schema_json');
  