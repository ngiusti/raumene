<?php 

function website_files(){
    wp_enqueue_script('main_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Kaushan+Script|Noto+Sans|Paytone+One|Roboto&display=swap');
}

add_action('wp_enqueue_scripts', 'website_files');

function website_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'website_features');

?>