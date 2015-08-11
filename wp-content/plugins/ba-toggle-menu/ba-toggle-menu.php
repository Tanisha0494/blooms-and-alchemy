<?php /*
Plugin Name: Mobile Toggle Menu 
Description:  Adds a very simple toggle menu to the site. 
Author: Tanisha Rose
Plugin URI: 
Author URI: http://www.tanisharosemedia.com
Version: 0.1
License: GPLv3
*/ 

/**
 * Create Toggle Menu
 * @since 0.1
 */

    add_action('wp_enqueue_scripts', 'toggleMenu');

    function toggleMenu(){

        $style_path = plugins_url('css/style.css', __FILE__);
         wp_enqueue_style('stylesheet', $style_path);

         $n_path = plugins_url('js/nav.js', __FILE__);
         wp_enqueue_script('nav', $n_path, array('jquery'), true);
    }

    function toggleButton(){
        echo '<div id="nav-icon2"><span></span><span></span><span></span><span></span><span></span><span></span></div>';
    }
?>