<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:


if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION
function front_scripts() {
    if (is_front_page()) {
        wp_register_script( 'tpl_scripts', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), '', true );
        wp_enqueue_script( 'tpl_scripts' );
        wp_register_script( 'jq_simulate', get_stylesheet_directory_uri().'/js/jquery.simulate.js', array('jquery'), '', true );
        wp_enqueue_script( 'jq_simulate' );
    }
}
add_action( 'wp_enqueue_scripts', 'front_scripts' );

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

wp_enqueue_style( 'awesome', get_stylesheet_directory_uri() . '/css/awesome.min.css' );
wp_enqueue_style( 'awesome-v4-shims', get_stylesheet_directory_uri() . '/css/v4-shims.css' );

remove_filter( 'the_content', 'wptexturize' );