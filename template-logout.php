<?php
/* Template Name: logout */

global $web;
if (!is_user_logged_in()){
    header('Location: '.path($web['page']['homepage']['slug']));
}

wp_logout();
header('Location: '.path($web['page']['homepage']['slug']));

die('');

