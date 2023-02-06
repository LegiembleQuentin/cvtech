<?php
/**
 * cvtech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cvtech
 */

if ( ! defined( '_S_VERSION' ) ) {
// Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}


function cvtech_setup()
{
    load_theme_textdomain('cvtech', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'cvtech'),
        )
    );
}
add_action( 'after_setup_theme', 'cvtech_setup' );

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

/**
 * Enqueue scripts and styles.
 */
function cvtech_scripts() {
    //CSS
    wp_enqueue_style( 'cvtech-style', get_stylesheet_uri(), array(), _S_VERSION );
    if(is_page_template('template-home.php')){
        wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/asset/flexslider/flexslider.css', array(), _S_VERSION);
    }

    //JS
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(), _S_VERSION, true);

    wp_enqueue_script( 'cvtech-burger', get_template_directory_uri() . '/asset/js/burger.js', array(), _S_VERSION, true );

    wp_add_inline_script( 'jquery', 'const MYSCRIPT = ' . json_encode( array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'home'    => path('/'),
            'theme'   => get_template_directory_uri(),
        ) ), 'before' );

    wp_enqueue_script('function-js', get_template_directory_uri() . '/asset/js/function.js', array(), _S_VERSION, true);

    if(is_page_template('template-home.php')){
        wp_enqueue_script('jquery-home', get_template_directory_uri() . '/asset/flexslider/jquery.flexslider.js', array(), _S_VERSION, true);
        wp_enqueue_script('main', get_template_directory_uri() . '/asset/js/main.js', array(), _S_VERSION, true);
    }
    if(is_page_template('template-register.php')) {
        wp_enqueue_script('register-js', get_template_directory_uri() . '/asset/js/register.js', array(), _S_VERSION, true);
    }


    wp_enqueue_style( 'cvtech-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_style_add_data( 'cvtech-style', 'rtl', 'replace' );

    wp_enqueue_script( 'cvtech-burger', get_template_directory_uri() . '/inc/js/burger.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if(is_page_template( 'template-cgu.php' )) {
        wp_enqueue_style('cgu-css', get_template_directory_uri() . 'inc/asset/css/cgu.css', array(), _S_VERSION);
    }

}
add_action( 'wp_enqueue_scripts', 'cvtech_scripts' );
