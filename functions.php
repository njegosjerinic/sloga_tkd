<?php
function theme_enqueue_assets()
{

    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        [],
        time()
    );

    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/css/custom-style.css',
        [],
        time()
    );

    wp_enqueue_script(
        'custom-scrip',
        get_template_directory_uri() . '/js/custom-scrip.js',
        [],
        time(),
        true
    );
}

add_filter('jpeg_quality', function () {
    return 100; // Set to 100 for no compression
});


add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

add_theme_support('post-thumbnails');

function custom_language_menu_setup()
{
    register_nav_menus(
        array(
            'language-menu' => __('Language Menu', 'sloga_tkd-master'),
        )
    );
}
add_action('after_setup_theme', 'custom_language_menu_setup');

add_filter('excerpt_length', function () {
    return 25;
}, 999);

add_filter('excerpt_more', function () {
    return '...';
});

function register_my_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init', 'register_my_menus');

add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_main_query() && is_home()) {
        $query->set('orderby', 'date'); // Use a custom field like 'menu_order'
        $query->set('order', 'DESC'); // Change order to ascending
    }
});



