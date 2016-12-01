<?php
/*
Plugin Name: Get a Gif
Plugin URI : http://localhost:8888/monsitemax/
Description: Search your prefered gif with any key words
Version    : 1.0
Author     : Maxime Vion
Author URI : http://localhost:8888/monsitemax/
*/

defined( 'ABSPATH' )
    or die ( 'Sorry!' );

define( 'MON_APPEL', plugin_dir_url( __FILE__ ) );


function MV_add_input(){

echo "<div id='mon_ajout'>
            <form id='myform'>
                <label for='myinput'>Chercher un Gif</label><br />
                <input type='text' id='myinput' name='myinput'/>
                <button id='monbouton' type='submit'>Search</button>
                <div id='msg_complete'></div>
            </form>
            <div>
                <img id='mon_gif' src=''>
                <div id='error_msg'></div>
            </div>
            <div>
                <img id='mon_gif1' src=''>
                <div id='error_msg1'></div>
            </div>
        </div>";

}

add_action('wp_head', 'MV_add_input');


function MV_add_script_style() {

    wp_enqueue_script( 'my-js', MON_APPEL . 'js/my-js.js', array("jquery"),NULL, true );
    wp_enqueue_style( 'my-css', MON_APPEL . 'css/my-css.css');
}

add_action( 'wp_enqueue_scripts', 'MV_add_script_style' );
