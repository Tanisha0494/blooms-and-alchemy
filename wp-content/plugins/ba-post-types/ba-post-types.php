<?php /*
Plugin Name: Custom Post Types - Blooms and Alchemy
Description:  Adds post types to the site
Author: Tanisha Rose
Plugin URI: http://
Author URI:http://www.tanisharosemedia.com
Version: 0.1
License: GPLv3
*/ 

/**
 * Create Products post type
 * @since 0.1
 */

add_action('init', 'ba_setup_goddess');

function ba_setup_goddess(){
	register_post_type('goddess', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-editor-justify',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Goddess Lore',
    		'singular_name' => 'Goddess Lore',
    		'add_new_item'	=> 'Add New Goddess Lore',
    		'not_found'		=> 'No goddess lore found.',
    	),

		) );

    // add the type taxonomy to products
    // register_taxonomy( 'type', 'portfolio', array(
    //     'hierarchical' => false,  //comma - separated interfac, flat list
    //     'labels'       => array(
    //         'name'          => 'Types',
    //         'singular_name' => 'Type',
    //         'search_items'  => 'Search Type',
    //         'add_new_item'  => 'Add New Type',
    //         ),
    // ));

}

add_action('init', 'ba_setup_moon');

function ba_setup_moon(){
    register_post_type('moon', array(
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-editor-justify',
        'supports'      => array('title','editor','thumbnail','excerpt','custom-fields'),
        'labels'        => array(
            'name'          => 'Moon Lore',
            'singular_name' => 'Moon Lore',
            'add_new_item'  => 'Add New Moon Lore',
            'not_found'     => 'No moon lore found.',
        ),

        ) );

    // add the type taxonomy to products
    // register_taxonomy( 'type', 'portfolio', array(
    //     'hierarchical' => false,  //comma - separated interfac, flat list
    //     'labels'       => array(
    //         'name'          => 'Types',
    //         'singular_name' => 'Type',
    //         'search_items'  => 'Search Type',
    //         'add_new_item'  => 'Add New Type',
    //         ),
    // ));

}

function ba_rewrite_flush(){
    ba_setup_goddess();//call the func. that registers CPT/Taxonomies

    ba_setup_moon();//call the func. that registers CPT/Taxonomies

    
    flush_rewrite_rules();//recreate the htaccess rules
}

register_activation_hook( __FILE__, 'ba_rewrite_flush' );

?>