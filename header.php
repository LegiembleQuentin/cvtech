<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvtech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cvtech' ); ?></a>

    <header id="masthead" class="site-header bg-header-black">
        <div class="wrap-header">
            <div>
                <img src="" alt="">
            </div>
            <nav class="">
                <ul>
                    <li><a href="" title="">Contactez-Nous</a></li>
                    <li class="homelink"><a href="" title="">Inscription</a></li>
                    <li class="homelink"><a href="" title="">Connexion</a></li>
                </ul>
        </div>
        </nav>
    </header><!-- #masthead -->

