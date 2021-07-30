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
*  -set default options
*/
register_activation_hook(__FILE__, 'markmast_install');
function markmast_install() {

  // Add tables

}


/*
*  Deactivate plugin
*  -do somethign
*/
register_deactivation_hook(__FILE__, 'markmast_deactivate');
function markmast_deactivate() {
  // Deactivate something here

}