<?php
/**
 * Enqueue scripts and styles.
 */
function etrigan_scripts() {
    wp_enqueue_style( 'etrigan-style', get_stylesheet_uri() );
    wp_enqueue_style('etrigan-title-font', '//fonts.googleapis.com/css?family=Salsa:400' );
    wp_enqueue_style('etrigan-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", esc_html(get_theme_mod('etrigan_title_font', 'Lato') ) ).':100,300,400,700' );

    if (get_theme_mod('etrigan_body_font') != get_theme_mod('etrigan_title_font')) {
        wp_enqueue_style('etrigan-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", esc_html(get_theme_mod('etrigan_body_font', 'Open Sans') ) ).':100,300,400,700' );
    }

    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_style( 'hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );

    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css' );

    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css' );

    wp_enqueue_style( 'etrigan-main-theme-style', get_template_directory_uri() . '/assets/theme-styles/css/'.get_theme_mod('etrigan_skin', 'default').'.css' );

    wp_enqueue_script( 'etrigan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'etrigan-externaljs', get_template_directory_uri() . '/js/external.js', array('jquery'), '20120206', true );

    wp_enqueue_script( 'etrigan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'etrigan-custom-js', get_template_directory_uri() . '/js/custom.js', array('etrigan-externaljs') );
}
add_action( 'wp_enqueue_scripts', 'etrigan_scripts' );