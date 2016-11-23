<?php
/*
Plugin Name: Plugin pour controle
Plugin URI : http://localhost:8888/monsitemax/
Description: un plugin pour gérérer des gifs à partir de mots clefs saisis. Vous avez le choix entre deux
            stye de gérération, en Random ou en Translate, à vus de choisir celui que vous préférez.
Version    : 1.0
Author     : Maxime Vion
Author URI : http://localhost:8888/monsitemax/
*/

defined( 'ABSPATH' )
    or die ( 'Sorry!' );

function ajout_input(){ ?>

            <div id='mon_ajout'>
                <form id='myform' >
                  <label for='myinput'>Chercher un Gif</label><br />
                  <input type='text' id='myinput' name='myinput'/>
                  <button type='submit'>Chercher</button>
                </form>
                <div id='mes_gifs'>
                    <img id='mon_gif' src=''>
                    <img id='mon_gif1' src=''>
                </div>
            </div>
    <?php
    wp_enqueue_script( 'my-js', plugin_dir_url('monplugin') . 'monplugin/js/jquery-3.1.1.js', array("jquery"),NULL, false);
    wp_enqueue_script( 'my-js', plugin_dir_url('monplugin') . 'monplugin/js/my-js.js', array("jquery"),NULL, true );
    wp_enqueue_style( 'my-css', plugin_dir_url('monplugin') . 'monplugin/css/my-css.css');
}

add_action('the_content', 'ajout_input');
 ?>
