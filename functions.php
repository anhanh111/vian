<?php
function vian_setup() {
    // Hỗ trợ các tính năng cơ bản của theme
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 40,
        'width'       => 88,
        'flex-width'  => true,
        'flex-height' => true,
    ]);
    
    // Đăng ký menu
    register_nav_menus([
        'primary' => __('Primary Menu','vian-custom')
    ]);
}
add_action('after_setup_theme','vian_setup');


function vian_scripts() {
    wp_enqueue_style('vian-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap', false);
    // Enqueue style.css (chống cache bằng filemtime)
    wp_enqueue_style(
        'vian-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Enqueue JS
    wp_enqueue_script(
        'vian-js',
        get_template_directory_uri() . '/main.js',
        array(),
        filemtime(get_template_directory() . '/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts','vian_scripts');


// Xóa width/height mặc định mà WP gán cho logo
add_filter('get_custom_logo', function($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
});
