<?php
function cleanXss($key){
    return trim(strip_tags($_POST[$key]));
}

function form_error($errors, $key)
{
    if(!empty($errors[$key])){
        echo $errors[$key];
    }
}
function getPostValue($key, $data = '')
{
    if(!empty($_POST[$key]) ) {
        echo $_POST[$key];
    } elseif(!empty($data)) {
        echo $data;
    }
}
function validationText($errors,$entry,$key,$min,$max){
    if(!empty($entry)){
        if(mb_strlen($entry) < $min){
            $errors[$key] = 'Ce champ doit contenir au moins '. $min .' caractères';
        } elseif(mb_strlen($entry) > $max){
            $errors[$key] = 'Ce champ ne doit pas contenir plus de '. $max .' caractères';
        }
    }else {
        $errors[$key] = 'Ce champ est obligatoire';
    }
    return $errors;
}
function validationMail($errors,$email,$entry = 'email')
{
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$entry] = 'Merci de renseigner une email valide';
        }
    } else {
        $errors[$entry] = 'Ce champ est obligatoire';
    }
    return $errors;
}

function validationOptionnalPhone($errors, $phone, $entry = 'phone') {
    if ($phone != NULL) {
        if (!preg_match('/^\d{10}$/', $phone)) {
            $errors[$entry] = 'Merci de renseigner un numéro de téléphone valide';
        }
    }
    return $errors;
}

function validationOptionnalDate($errors, $date, $entry = 'date') {
    if (!empty($date)) {
        $d = DateTime::createFromFormat('Y-m-d', $date);
        if (!$d || $d->format('Y-m-d') !== $date) {
            $errors[$entry] = 'Merci de renseigner une date valide';
        }
    }
    return $errors;
}