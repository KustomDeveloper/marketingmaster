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


/*
*  Activate plugin
*    create admin menu
*    create options page
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
    $icon_url = '';
    $position = 50;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

    wp_register_style( 'markmast_admin_styles', plugins_url('css/markmast_admin_styles.css', __FILE__) );
    wp_enqueue_style('markmast_admin_styles');

    wp_register_script( 'markmast_scripts', plugins_url('js/markmast_scripts.js', __FILE__) , '', '', true );
    wp_enqueue_script( 'markmast_scripts' );

    //Add settings page
    function markmast_options_settings() {
      //Add settings page options
      include( plugin_dir_path( __FILE__ ) . 'includes/markmast_options_settings.php');
    }
  }


} else {
  remove_menu_page( 'markmast_options' );
}


/*
*  Deactivate plugin
*    set activated status option to false
*/
register_deactivation_hook( __FILE__, 'markmast_deactivate' );
function markmast_deactivate() {
  update_option( 'mm_activated', 'false' );
}