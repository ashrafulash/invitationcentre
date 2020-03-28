<?php
// add theme support
function invitation_support_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote','link', 'image', 'status', 'video', 'audio', 'chat' ) );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-background');
    add_theme_support( 'custom-logo' );
    add_theme_support('custom-header');
    add_theme_support('starter-content');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'invitation_support_theme');


// load files
function invitation_enqueue_scripts(){
    
    // load css
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/asset/src/min-css/all.min.css', [], time(), 'all');

     wp_enqueue_style('flaticon', get_template_directory_uri() . '/asset/src/flat-icon/flaticon.css', [], time(), 'all');

    

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/asset/src/min-css/bootstrap.min.css', [], time(), 'all');

    wp_enqueue_style('main-css', get_template_directory_uri() . '/asset/src/min-css/master.css', [], time(), 'all');


    
    // load script
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/asset/src/min-js/jquery-3.4.1.slim.min.js', array (), time(), true);

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/asset/src/min-js/popper.min.js', array (), time(), true);

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/asset/src/min-js/bootstrap.min.js', array (), time(), true);

    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/asset/src/min-js/custom.js', array (), time(), true);

}

add_action('wp_enqueue_scripts', 'invitation_enqueue_scripts');


// add navigation
register_nav_menus([
    'default-menu' => esc_html__('Default Menu', 'invitationcentre'),
]);