<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'custom' ),
) );
function custom_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'custom' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
}

add_action( 'widgets_init', 'custom_widgets_init' );
function custom_scripts() {
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-style' , 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );