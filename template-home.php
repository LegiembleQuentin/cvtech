<?php
/*Template Name: homepage*/
global $web;
$user = wp_get_current_user();
if ( in_array( 'recruteur', (array) $user->roles ) ) {
    header('Location: '.path($web['page']['listingCV']['slug']));
}
get_header(); ?>

<?php get_template_part('view/home/home', 'intro'); ?>
<?php get_template_part('view/home/home', 'partners'); ?>
<?php get_template_part('view/home/home', 'design'); ?>
<?php get_template_part('view/home/home', 'conseil'); ?>
<?php get_template_part('view/home/home', 'equipe'); ?>
<?php get_template_part('view/home/home', 'conclu'); ?>

<?php get_footer() ?>

