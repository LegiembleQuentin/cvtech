<?php

add_action('wp_ajax_get_login', 'login');
add_action('wp_ajax_nopriv_get_login', 'login');

function login(){
    $mail = cleanXss('log');
    $password = cleanXss('pwd');


    $creds = array(
        'user_login'    => $mail,
        'user_password' => $password,
        'remember'      => $_POST['rememberme']
    );

    $user = wp_signon( $creds, false );

    $error='';
    if ( is_wp_error( $user ) ) {
        $error = 'Identifiant ou mot de passe invalide';
    }

    showJson($error);
}