<?php
/**
 * etrigan Theme Customizer
 *
 * @package etrigan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function etrigan_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'etrigan_customize_register' );

//Load All Individual Settings Based on Sections/Panels.
require_once get_template_directory().'/framework/customizer/_header.php';
require_once get_template_directory().'/framework/customizer/_googlefonts.php';
require_once get_template_directory().'/framework/customizer/_layouts.php';
require_once get_template_directory().'/framework/customizer/_page-layouts.php';
require_once get_template_directory().'/framework/customizer/_sanitization.php';
require_once get_template_directory().'/framework/customizer/navigation.php';
require_once get_template_directory().'/framework/customizer/_skins.php';
require_once get_template_directory().'/framework/customizer/fproducts-square-boxes.php';
require_once get_template_directory().'/framework/customizer/3d-cube-products-slider.php';
require_once get_template_directory().'/framework/customizer/slider.php';
require_once get_template_directory().'/framework/customizer/fposts-square-boxes.php';
require_once get_template_directory().'/framework/customizer/top-coverflow-slider.php';
require_once get_template_directory().'/framework/customizer/3d-cube-posts-slider.php';
require_once get_template_directory().'/framework/customizer/featured-umega.php';
require_once get_template_directory().'/framework/customizer/social-icons.php';
require_once get_template_directory().'/framework/customizer/misc-scripts.php';


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function etrigan_customize_preview_js() {
    wp_enqueue_script( 'etrigan_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'etrigan_customize_preview_js' );