<?php
/*
* Plugin Name: Jaf Easy Shorcodes
* Plugin Uri:  http://joseaflores.com
* Description: Tercer plugin en el que vamos a crear shortcodes para nuestros plugins
* Version: 1.0
* Author : joseaflores
* Author URI: https://joseaflores.com
* License: GPL2
*/




add_action('init', 'jaf_register_shortcode');

function jaf_register_shortcode(){

        add_shortcode('jaf-color', 'jafsh_rate');
}

function jafsh_rate($arg, $content){

    //el shortcode será [jaf-color as=""] contenido [/jaf-color]
    return '<p style="color:'.$arg['as'].';">'.$content.'</p>';

}







?>