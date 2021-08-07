<?php
/* 
*  Plugin Name: Marketing Master
*  Plugin URI: https://kustomdeveloper.com/marketing-master
*  Description: A Local SEO plugin that actually works. Features: Business schema, google maps, video schema, customer reviews and customer reviews schema.
*  Version: 1.0
*  Author: Michael Hicks
*  Author URI: https://michaelhicks.me
*  License: GPLv2
*/

/*
*  Activate plugin
*    create admin menu
*    create more stuff
*/

register_activation_hook(__FILE__, 'markmast_activate');
function markmast_activate() {
  add_option('markmast_activated', 'true');
}

add_action('admin_init', 'markmast_load_plugin');
function markmast_load_plugin() {
  if( get_option('markmast_activated') == 'true' ) {
    add_menu_page('Marketing Master', 'Marketing Master Settings', 'manage_options', 'markmast_options');
  } else {
    remove_menu_page('markmast_options');
  }
}

/*
*  Deactivate plugin
*    set activated status option to false
*/
register_deactivation_hook(__FILE__, 'markmast_deactivate');
function markmast_deactivate() {
  update_option('mm_activated', 'false');
}