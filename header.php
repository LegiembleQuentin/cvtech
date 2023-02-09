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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cabin:wght@400;600;700&family=Open+Sans&family=Orbitron:wght@700&family=Poppins:wght@800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="masthead" class="site-header bg-header-black">
        <div id="page" class="site wrap1">

        <div class="wrap3 header">
            <div class="logo-header">
                <img src="<?= asset('/img/logo-CvTech-rogner.png')?>" alt="">
            </div>
            <nav class="d-block">
                <ul class="d-flex gaptwo">

                    <div class="gap d-flex d-block gaptwo ">
                        <li class=" border-twenty"><a class="color-white box-yellow" href="" title="">Design</a></li>
                        <li class=" border-twenty"><a class="color-white box-yellow" href="" title="">Contactez-Nous</a></li>
                        <li  class="li-header border-twenty" ><a class="color-white box-yellow " href="<?php ?>" title="">Inscription</a></li>
                        <li  class="li-header border-twenty" ><a class="color-white box-yellow " href="" title="">Connexion</a></li>

                    </div>
                </ul>
        </div>
        </nav>
        <div class="d-none">
            <span class="dashicons dashicons-menu burger-menu-button"></span>
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

