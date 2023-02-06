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
    <header id="masthead" class="site-header bg-header-black padd-two">

        <div class="wrap1 header">
            <div class="logo-header">
                <img src="./wp-content/themes/cvtech/inc/img/logo-CvTech-rogner.png" alt="">
            </div>
            <nav class="d-block">
                <ul class="d-flex gaptwo">

                    <div class="gap d-flex d-block gaptwo ">
                        <li class="li-header border-twenty"><a class="color-white box-yellow " href="" title="">Design</a></li>
                        <li class="li-header border-twenty"><a class="color-white box-yellow " href="" title="">Contactez-Nous</a></li>
                        <li  class="li-header border-twenty" ><a class="color-white box-yellow " href="" title="">Inscription</a></li>
                        <li  class="li-header border-twenty" ><a class="color-white box-yellow " href="" title="">Connexion</a></li>

                    </div>
                </ul>
        </div>
        </nav>
        <div class="d-none">
                <button id="burger-menu-button">&#9776;</button>
                <nav id="burger-menu">
                    <button id="close-menu-button">&times;</button>
                    <ul>
                        <li  class=" border-top li-header"><a class="a-header" href="#">Contactez-Nous</a></li>
                        <li  class="li-header"><a class="a-header"="#">Inscription</a></li>
                        <li  class="li-header"><a class="a-header" href="#">Connexion</a></li>
                    </ul>
                </nav>
        </div>
    </header><!-- #masthead -->

