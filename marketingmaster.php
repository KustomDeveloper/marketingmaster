<?php
/* 
*  Plugin Name: Marketing Master
*  Plugin URI: https://kustomdeveloper.com/marketing-master
*  Description: A local SEO plugin that actually works. Features: Local Business Schema, Google Maps, Customer Reviews and Product Review Schema.
*  Version: 1.0
*  Author: Kustom Developer
*  Author URI: https://kustomdeveloper.com
*  License: GPLv2
*/

/*
*
*  Load Wp Ajax Functions: Toggle switch controllers
*  
*/

//Turns local schema to the "off" state
function toggle_local_schema_action() {
  update_option("local_schema_settings", "1");
  wp_die();
}
add_action( 'wp_ajax_post_toggle_local_schema_action', 'toggle_local_schema_action' );
//Turns local schema to the "on" state
function toggle_local_schema_action_on() {
  update_option("local_schema_settings", "0");
  wp_die();
}
add_action( 'wp_ajax_post_toggle_local_schema_action_on', 'toggle_local_schema_action_on' );


//Turns product review schema to the "off" state
function toggle_product_review_schema_action() {
  update_option("product_review_schema_settings", "1");
  wp_die();
}
add_action( 'wp_ajax_post_toggle_product_review_action', 'toggle_product_review_schema_action' );
//Turns product review schema to the "on" state
function toggle_product_review_schema_action_on() {
  update_option("product_review_schema_settings", "0");
  wp_die();
}
add_action( 'wp_ajax_post_toggle_product_review_action_on', 'toggle_product_review_schema_action_on' );


//Turns Customer review schema to the "off" state
function toggle_customer_review_schema_action() {
  update_option("customer_review_schema_settings", "1");
  wp_die();
}
add_action( 'wp_ajax_post_toggle_customer_review_action', 'toggle_customer_review_schema_action' );
//Turns customer review schema to the "on" state
function toggle_customer_review_schema_action_on() {
  update_option("customer_review_schema_settings", "0");
  wp_die();
}
add_action( 'wp_ajax_post_toggle_customer_review_action_on', 'toggle_customer_review_schema_action_on' );


/*
*
*  Load Views
*  
*/

//Add local schema to frontend
if(get_option('local_schema_settings') == "0") {
  include( plugin_dir_path( __FILE__ ) . 'includes/local_schema_json.php');
}

//Add product review to frontend
if(get_option('product_review_schema_settings') == "0") {
  include( plugin_dir_path( __FILE__ ) . 'includes/product_review_schema.php');
}

//Add customer review to frontend
if(get_option('customer_review_schema_settings') == "0") {
  include( plugin_dir_path( __FILE__ ) . 'includes/customer-review.php');
}

//Add frontend styles for customer reviews form
add_action( 'wp_enqueue_scripts', 'markmast_front_styles' );
function markmast_front_styles() {
  wp_register_style( 'fontAwesome', plugins_url( 'marketingmaster/css/fontAwesome.css' ) );
  wp_enqueue_style( 'fontAwesome' );
  wp_register_style( 'markmast_frontend_stylesheet', plugins_url( 'marketingmaster/css/markmast_frontend_stylesheet.css' ) );
  wp_enqueue_style( 'markmast_frontend_stylesheet' );
}


/*
*  Activate plugin
*    Create admin menu
*    Create options page
*    Create customer reviews menu
*/
register_activation_hook( __FILE__, 'markmast_activate' );
function markmast_activate() {
  add_option( 'markmast_activated', 'true' );
}

if( get_option('markmast_activated') == 'true' ) {

  //Add main plugin menu
  add_action('admin_menu', 'markmast_addmenu');
  function markmast_addmenu() {
    $page_title = 'Marketing Master';
    $menu_title = 'Marketing Master';
    $capability = 'manage_options';
    $menu_slug = 'markmast_options';
    $function = 'markmast_options_settings';
    $icon_url = 'dashicons-admin-tools';
    $position = 50;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    
    //Add styles
    wp_register_style( 'markmast_admin_styles', plugins_url('css/markmast_admin_styles.css', __FILE__) );
    wp_enqueue_style('markmast_admin_styles');
    
    //Add scripts
    wp_register_script( 'markmast_scripts', plugins_url('js/markmast_scripts.js', __FILE__) , '', '', true );
    wp_enqueue_script( 'markmast_scripts' );

    //Add settings page
    function markmast_options_settings() {
      //Add settings page options
      include( plugin_dir_path( __FILE__ ) . 'includes/markmast_options_settings.php');
    }
  
  }

  //Add customer reviews menu
  if(get_option('customer_review_schema_settings') == "0") {
    add_action('init', 'create_local_seo_customer_reviews_post_type');
    function create_local_seo_customer_reviews_post_type() {
      $args = array(
        'public' => true,
        'label'  => __( 'Customer Reviews' ),
        'menu_icon' => 'dashicons-admin-comments',
      );
      
      register_post_type( 'local-seo-reviews', $args);
    }

    //Create Customer Reviews Page
    add_action('init', 'create_review_page');
    function create_review_page() {
      $customer_reviews_page = array(
        'post_title'    => 'Customer Reviews',
        'post_content'  => '<!-- wp:shortcode -->[local_schema_customer_review_form]<!-- /wp:shortcode --><!-- wp:shortcode -->[local_schema_customer_reviews]<!-- /wp:shortcode -->',
        'post_status'   => 'draft',
        'post_author'   => 1,
        'post_type' => 'page'
      );

      $page = get_page_by_title('Customer Reviews');

      //Testing
      ?><pre><?php //print_r($page); ?></pre><?php

      //Create page if it doesn't exist
      if( get_page_by_title('Customer Reviews') === null ) {
        wp_insert_post( $customer_reviews_page ); 
      }  
    }
  }

} else {
  remove_menu_page( 'markmast_options' );
  unregister_post_type( 'local-seo-customer-reviews');
}

/*
*  Deactivate plugin
*    set activated status option to false
*/
register_deactivation_hook( __FILE__, 'markmast_deactivate' );
function markmast_deactivate() {
  update_option( 'mm_activated', 'false' );
}