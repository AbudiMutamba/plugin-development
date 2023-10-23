<?php
/**
 * @package FirstPlugin
 */

 /*
   Plugin Name: First Plugin
   Plugin URI: http://mutambaabaudi.com/plugin
   Description: This is my first attempt on writing a custom plugin for this amazing tutorials
   Version: 1.0.0
   Author: Mutamba Abudi
   Author URI: http://mutambaabudi.com
   License: GPlv2 or later
   Text Domain: first plugin
  */

  /*
  This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
/*
if ( ! defined ( 'ABSPATH' ) ) {
  die;
}

if ( ! function_exists( 'add_action' ) ) {
  echo 'Hey, you can\t access this file, you silly human!';
  exit;
}
*/

defined ( 'ABSPATH') or die ("Hey, you can't access this file, you silly human!");

//php class
class FirstPlugin 
{
  //constructor is a method that accepts the paraments 
    function __construct() {
      add_action('init', array( $this, 'custom_post_type' ) );
    }
    //methods
    function activate() {
      // generate a CPT //call a method in another method
      $this->custom_post_type();
      // flush rewrite rules
      flush_rewrite_rules();
    }

    function deactivate() {
      // flush rewrite rules   
      flush_rewrite_rules();
    }

    // function uninstall() {
    //   // delete CPT
    //   // delete all the plugin data from the DB
    // }

    function custom_post_type() {
      register_post_type('book', [
        'label' => 'Books',
        'public' => true,
        ] );
    }
   
}

//condition for instance
if( class_exists ( 'FirstPlugin') ){

  $firstPlugin = new FirstPlugin();
}

//Wordpress triggers

//activation hooks
register_activation_hook(__FILE__, array( $firstPlugin, 'activate' ) );

//deactivation
register_deactivation_hook(__FILE__, array( $firstPlugin, 'deactivate' ) );

//uninstall 
// register_uninstall_hook(__FILE__, array( $firstPlugin, 'uninstall' ) );
