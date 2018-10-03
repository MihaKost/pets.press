<?php

add_action('wp_enqueue_scripts', 'dog_stand_links');
add_action('after_setup_theme', 'dog_menu_setup');
add_action('widgets_init', 'dog_widgets');

function dog_stand_links() {
    wp_enqueue_style('style-link', get_stylesheet_uri());               //Путь к style.css
    wp_enqueue_script('script-link', get_template_directory_uri() . '/assets/js/script.js', [], null, false);     //Путь к нашей теме
}

function dog_menu_setup() {
    register_nav_menu('top', 'dog-top-menu');
    register_nav_menu('sidebar', 'dog-side-menu');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

function dog_widgets() {
    register_sidebar([
       'name' => 'Sidebar Right',
        'id' => 'sidebar-right',
        'description' => 'Правый сайдбар',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<div class="widget-title">',
        'after_title'   => "</div>\n",
    ]);

}