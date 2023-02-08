<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvtech
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="wrap1">
            <div class="j-content-center space-between d-flex header padding-footer">
                <div class="logo-header">
                    <img src="<?= asset('/img/logo-CvTech-rogner.png')?>" alt="">

                </div>
                <div class="d-flex gapp-footer-dashicon">
                    <img class="img-footer" src="<?= asset('/img/reseau-facebook.png')?>" alt="">
                    <img class="img-footer" src="<?= asset('/img/reseau-instagram.png')?>" alt="">
                    <img class="img-footer" src="<?= asset('/img/reseau-twitter.png')?>" alt="">
                </div>
            </div>
            <div class="wrap1 padding-footer">
                <ul class="gaptwo d-flex center j-content-center ul-footer ">
                    <li class="color-white"><a href="#"></a> CGU</li>
                    <li class="color-white"><a href="#"></a> Mentions légales </li>
                    <li class="color-white"><a href="#"></a>Contactez-nous </li>
                    <li class="color-white"><a href="#"></a>Gérer les Cookies </li>
                </ul>
            </div>
            <div class="color-white droitfooter padding-footer ">
                <p> &copy; 2023 - CVTECH-Tous Droits réservés</p>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
