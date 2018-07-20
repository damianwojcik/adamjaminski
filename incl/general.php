<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_footer', 'enqueue_scripts' );

/**
 * Remove ninja form stylesheets
 */
function wpgood_nf_display_enqueue_scripts(){
    wp_dequeue_style( 'nf-display' );
}
add_action( 'nf_display_enqueue_scripts', 'wpgood_nf_display_enqueue_scripts');


function enqueue_styles() {
    wp_enqueue_style( 'google_fonts_opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700&amp;subset=latin-ext', '', NULL);
    wp_enqueue_style( 'google_fonts_poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&amp;subset=latin-ext', '', NULL);
    wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);
}

function enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', NULL);
    wp_enqueue_script( 'site_scripts', THEME_URL . '/main.min.js', '', NULL);
}

/**
 * Plugin name: WP Trac #42573: Fix for theme template file caching.
 * Description: Flush the theme file cache each time the admin screens are loaded which uses the file list.
 * Author: Weston Ruter, XWP.
 * Plugin URI: https://core.trac.wordpress.org/ticket/42573
 */
function wp_42573_fix_template_caching( WP_Screen $current_screen ) {
    // Only flush the file cache with each request to post list table, edit post screen, or theme editor.
    if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
        return;
    }
    $theme = wp_get_theme();
    if ( ! $theme ) {
        return;
    }
    $cache_hash = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
    $label = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
    $transient_key = substr( $label, 0, 29 ) . md5( $label );
    delete_transient( $transient_key );
}
add_action( 'current_screen', 'wp_42573_fix_template_caching' );

// Adds class to pagination links
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-dark"';
}