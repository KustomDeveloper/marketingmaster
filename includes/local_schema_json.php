<?php
// Include jsonld for processing json in php
include( plugin_dir_path( __FILE__ ) . 'jsonld.php');

function local_schema_json() { 
  $local_schema_name = get_option('local-business-name'); 
  $local_schema_url = get_bloginfo('url'); 
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

  $local_schema_json = (object)array(
    "@context" => "http://schema.org/",
    "@type" => "LocalBusiness",
    "description" => "$local_schema_description",
    "openingHours" => "$local_schema_hours",  
    "url" => "$local_schema_url",
    "logo"=> "$local_schema_logo",
    "hasMap"=> "<iframe src=\"$local_schema_map\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>",
    "email" => "$local_schema_email",
    "priceRange"=> "$$$ - $$$$$",
    "image" => "$local_schema_img",
    "name" => "$local_schema_name",
    "address" => (object)array("@type" => "PostalAddress",  "streetAddress" => "$local_schema_street", "addressLocality" => "$local_schema_city",
    "addressRegion" => "$local_schema_state", "postalCode" => "$local_schema_zip"),
    "geo" => (object)array("@type" => "GeoCoordinates",  "latitude" => "$local_schema_latitude",
    "longitude" => "$local_schema_longitude"),
    "sameAs" => [$local_schema_facebook, $local_schema_twitter, $local_schema_youtube, $local_schema_pinterest]
  );

  echo '<script type="application/ld+json">' . 
  json_encode($local_schema_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . 
  '</script>';
}

add_action('wp_head', 'local_schema_json');
  