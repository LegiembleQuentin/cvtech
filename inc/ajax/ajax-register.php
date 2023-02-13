<?php

add_action('wp_ajax_get_register', 'register');
add_action('wp_ajax_nopriv_get_register', 'register');

function register(){
    global $wpdb;
    $errors = [];

    $name = cleanXss('name');
    $firstname = cleanXss('firstname');
    $identifiant = cleanXss('identifiant');
    $email = cleanXss('email');
    $password = cleanXss('password');

    $phone = (!empty($_POST['phone'])) ? cleanXss('phone') : NULL;
    $birthdate = (!empty($_POST['birthdate'])) ? cleanXss('birthdate') : NULL;

    if (!empty($_POST['birthdate'])) {
        $bd = new DateTime($birthdate);
        $today = new DateTime();
        $age = $today->diff($bd)->y;
    }else {
        $age = NULL;
    }

    $errors = validationText($errors, $name, 'name', 2, 150);
    $errors = validationText($errors, $firstname, 'firstname', 2, 150);
    $errors = validationText($errors, $identifiant, 'identifiant', 4, 150);
    $errors = validationMail($errors, $email,);
    $errors = validationText($errors, $password, 'password', 8, 20);

    $errors = validationOptionnalPhone($errors, $phone);
    $errors = validationOptionnalDate($errors, $birthdate, 'birthdate');


    $existIdentifiant = username_exists($identifiant);
    if ($existIdentifiant){
        $errors['identifiant'] = "Cet identifiant correspond déjà à un compte existant";
    }
    $existEmail = email_exists($email);
    if ($existEmail){
        $errors['email'] = "Cet email correspond déjà à un compte existant";
    }

    if (count($errors) === 0){
        wp_create_user($identifiant, $password, $email);

        $creds = array(
            'user_login'    => $email,
            'user_password' => $password,
            'remember'      => false,
        );

        $user = wp_signon( $creds, false );
        $id = $user->ID;

        $wpdb->insert(
            $wpdb->prefix.'user_info',
            array(
                'id_user' => $id,
                'nom' => $name,
                'prenom' => $firstname,
                'phone' => $phone,
                'age' => $age,
                'email'=> $email,
                'created_at' => current_time('mysql'),
            ),
            array(
                '%d',
                '%s',
                '%s',
                '%d',
                '%d',
                '%s',
                '%s',
            )
        );


    }

    showJson($errors);
}