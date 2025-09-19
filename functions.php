<?php
// ==========================
// Thiết lập theme cơ bản
// ==========================
function vian_setup() {
    // Hỗ trợ các tính năng cơ bản
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


// ==========================
// Enqueue CSS & JS
// ==========================
function vian_scripts() {
    // Font Google
    wp_enqueue_style(
        'vian-fonts', 
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap', 
        false
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );

    // CSS chính (style.css) – chống cache bằng filemtime
    wp_enqueue_style(
        'vian-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // JS chính (main.js) – chống cache bằng filemtime
    wp_enqueue_script(
        'vian-js',
        get_template_directory_uri() . '/main.js',
        array(),
        filemtime(get_template_directory() . '/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts','vian_scripts');


// ==========================
// Xóa width/height logo WP tự thêm
// ==========================
add_filter('get_custom_logo', function($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
});


// ==========================
// Đăng ký khu vực widget Footer
// ==========================
function vian_register_footer_widgets() {
    // Cột 1
    register_sidebar(array(
        'name'          => __('Footer Cột 1', 'vian'),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title">',
        'after_title'   => '</h3>',
    ));

    // Cột 2
    register_sidebar(array(
        'name'          => __('Footer Cột 2', 'vian'),
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title">',
        'after_title'   => '</h3>',
    ));

    // Cột 3
    register_sidebar(array(
        'name'          => __('Footer Cột 3', 'vian'),
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'vian_register_footer_widgets');
