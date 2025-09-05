<?php
function vian_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(['primary' => __('Primary Menu','vian-custom')]);
}
add_action('after_setup_theme','vian_setup');

function vian_scripts() {
    wp_enqueue_style('vian-style', get_stylesheet_uri());
    wp_enqueue_script('vian-js', get_template_directory_uri().'/main.js', [], false, true);
}
add_action('wp_enqueue_scripts','vian_scripts');
?>