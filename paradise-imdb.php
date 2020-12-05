<?php
/**
 * @package ParadiseIMDB
 */
/*
Plugin Name: Paradise IMDB
Plugin URI: https://wwwparadisecyber.com/wp/plugins/imdb
Description: A plugin to create movie database, grab movie info from imdb
Version: 1.0.0
Author: Reza Bagheri( Rezo ) | <a href = "mailto: rezabagheri@gmail.com">Send Email to author</a>
Author URI: https://www.paradisecyber.com/whoami
License: GPL3 or later
Text Domain: paradise-imdb 
*/


defined( 'ABSPATH' ) or die( 'Hey!, What are you doing here?, Your silly human!' );
if( file_exists( dirname(__FILE__). '/vendor/autoload.php' ) ) {
    require_once( dirname(__FILE__). '/vendor/autoload.php' );
}

if( class_exists( 'Inc\\Init') ) {
    Inc\Init::register_services();
}

// class ParadiseIMDB {

//     function Avtivate() 
//     {

//     }

//     function DeActivate()
//     {

//     }

//     function Uninstall()
//     {

//     }

// }


// if( class_exists( 'ParadiseIMDB') ) {
//     $paradiseIMDB = new ParadiseIMDB();
// }

// register_activation_hook( __FILE__, [ $paradiseIMDB, "Activation" ] );
// register_deactivation_hook( __FILE__, [ $paradiseIMDB, "DeActivation"] );