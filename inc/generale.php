<?php
/**
 * cvtech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cvtech
 */

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

function cvtech_setup() {

    load_theme_textdomain( 'cvtech', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'cvtech' ),
        )
    );


    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );


    add_theme_support(
        'custom-background',
        apply_filters(
            'cvtech_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );


    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'cvtech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cvtech_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'cvtech_content_width', 640 );
}
add_action( 'after_setup_theme', 'cvtech_content_width', 0 );

function cvtech_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'cvtech' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'cvtech' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'cvtech_widgets_init' );

function cvtech_scripts() {
    wp_enqueue_style( 'cvtech-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'cvtech-style', 'rtl', 'replace' );

    wp_enqueue_script( 'cvtech-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'cvtech_scripts' );