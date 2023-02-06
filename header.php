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

    <header id="masthead" class="site-header bg-header-black padd-two">

        <div class="wrap1 header">
            <div class="logo-header">
                <img src="" alt="">
            </div>
            <nav class="d-block">
                <ul class="d-flex gaptwo">

                    <div class="gap d-flex d-block gaptwo ">
                        <li class="li-header border-twenty"><a class="color-white box-yellow " href="" title="">Contactez-Nous</a></li>
                        <li  class="li-header border-twenty" ><a class="color-white box-yellow " href="" title="">Inscription</a></li>
                        <li  class="li-header border-twenty" ><a class="color-white box-yellow " href="" title="">Connexion</a></li>
                        <!--                    <li><a class="color-white" href="" title="">Mon compte</a></li>-->
                        <!--                    <li ><a class="color-white" href="" title="">Déco</a></li>-->
                    </div>
                </ul>
        </div>
        </nav>
        <div class="d-none">
            <button id="burger-menu-button">&#9776;</button>
            <nav id="burger-menu">
                <ul>
                    <li><a href="#">Contactez-Nous</a></li>
                    <li><a href="#">Inscription</a></li>
                    <li><a href="#">Connexion</a></li>
                </ul>
            </nav>
        </div>
    </header><!-- #masthead -->

