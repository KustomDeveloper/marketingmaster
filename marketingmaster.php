<?php 
/*
*  Plugin Name: Marketing Master
*  Plugin URI: https://kustomdeveloper.com/marketing-master
*  Description: A Local SEO plugin that actually works. Features include: business schema, google maps, video schema, customer reviews and customer reviews schema.
*  Version: 1.0
*  Author: Michael Hicks
*  Author URI: https://michaelhicks.me
*  License: GPLv2
*/

register_activation_hook(__FILE__, 'markmast_install');

function markmast() {
  //Add tables


}

register_deactivation_hook(__FILE__, 'markmast_uninstall');

function markmast_uninstall() {
  // Remove tables
  

}

