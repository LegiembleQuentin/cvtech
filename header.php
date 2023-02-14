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
global $web;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cabin:wght@400;600;700&family=Open+Sans&family=Orbitron:wght@700&family=Poppins:wght@800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="masthead" class="site-header bg-header-black">
        <!--<div id="page" class="site wrap1">-->

        <div class="wrap3 header">
            <div class="logo-header">
                <a href="<?= path($web['page']['homepage']['slug']); ?>"><img src="<?= asset('/img/logo-CvTech-rogner.png')?>" alt=""></a>
            </div>
            <nav class="d-block">
                <ul class="d-flex gaptwo">
                    <div class="gap d-flex d-block gaptwo">
                        <li class="border-twenty dropdown">
                            <a class="color-white survol box-yellow replace" href="<?= path($web['page']['addcv']['slug']); ?>">Creer un Cv</a>
                            <div class="dropdown-content">
                                <div class="content">
                                        <a href="<?= path($web['page']['addcv']['slug']); ?>?>">Creer un Cv</a>
                                        <a href="<?= path($web['page']['addcv']['slug']); ?>">Creer un design</a>
                                </div>
                            </div>
                         <i class="fa-solid fa-chevron-down"></i>
                        </li>

                        <?php if (!is_user_logged_in()){ ?>
                            <li class=" border-twenty">
                                <a class="color-white survol box-yellow" href="<?= path($web['page']['contact']['slug']); ?>" title="">Contactez-Nous</a>
                            </li>
                            <li class="border-twenty">
                                <a class="li-header color-white box-yellow" href="<?= path($web['page']['register']['slug']); ?>" title="">Inscription</a>
                            </li>
                            <li class=" border-twenty">
                                <a id="login_nav" class="li-header color-white box-yellow" href="" title="">Connexion</a>
                            </li>
                        <?php }else { ?>
                            <li class="border-twenty">
                                <a class="li-header color-white box-yellow" href="<?= path($web['page']['logout']['slug']); ?>" title="">Déconnexion</a>
                            </li>
                        <?php } ?>
                    </div>
                </ul>
            </nav>
            <div class="d-none">
            <span class="dashicons dashicons-menu burger-menu-button"></span>
                <nav id="burger-menu">
                    <button id="close-menu-button">&times;</button>
                    <ul>
                        <li  class=" border-top li-header"><a class="a-header" href="<?= path($web['page']['contact']['slug']); ?>">Contactez-Nous</a></li>
                        <li  class="li-header"><a class="a-header"="<?= path($web['page']['register']['slug']); ?>">Inscription</a></li>
                        <li  class="li-header" id="login_burger"><a class="a-header" href="">Connexion</a></li>
                    </ul>
                </nav>
        </div>

        <div id="login" class="hidden">
            <div class="loginform">
                <div class="xmark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg></div>
                <form action="" method="post">

                    <input type="text" name="login" id="mail" value="" placeholder="Email">

                    <div class="password">
                        <input type="password" name="password" id="password" value="" placeholder="Mot de passe">
                        <a href="forgotpassword.php">Mot de passe oublié ?</a>
                    </div>

                    <div class="remberMe">
                        <p><input type="checkbox" id="rememberMe">Se rappeler de moi? </p>
                    </div>
                    <span class="error"></span>

                    <input type="submit" name="submitted" value="Se connecter">

                </form>
            </div>
        </div>
    </header><!-- #masthead -->

