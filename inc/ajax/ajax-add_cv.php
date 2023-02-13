<?php

add_action('wp_ajax_add_cv', 'addCV');
add_action('wp_ajax_nopriv_add_cv', 'addCV');

function addCV(){
    global $wpdb;
    $infos = json_decode(stripslashes($_POST['infos']));

    $errors = [];

    $job = cleanXss('lookedJob');
    $name = cleanXss('name');
    $firstname = cleanXss('firstname');
    $email = cleanXss('email');
    $phone = ($_POST['phone'] !== '') ? cleanXss('phone') : NULL;
    $age = ($_POST['age'] !== '') ? cleanXss('age') : NULL;
    $mainDesc = ($_POST['mainDesc'] !== '') ? cleanXss('mainDesc') : NULL;

    $errors = validationText($errors, $job, 'job', 5, 150);
    $errors = validationText($errors, $name, 'name', 2, 150);
    $errors = validationText($errors, $firstname, 'firstname', 2, 150);
    $errors = validationMail($errors, $email);
    $errors = validationOptionnalPhone($errors, $phone);
    $errors = validationOptionalAge($errors, $age);
    $errors = validationOptionalText($errors, $mainDesc, 'main desc', 10, 400);




    $types = [
        'skills',
        'jobs',
        'formations',
        'hobbies',
    ];
    foreach($infos as $index => $values) {
        $type = $types[$index];
        $id = 0;
        $errors[$type] = [];
        foreach($values as $value) {
            switch ($type) {
                case 'hobbies':
                case 'skills':
                    $value = cleanVarXss($value);
                    $errors[$type] = validationText($errors[$type], $value, $id, 2, 150);
                    break;
                case 'jobs':
                    $name = cleanVarXss($value[0]);
                    $errors[$type][$id]=[];
                    $errors[$type][$id] = validationText($errors[$type][$id], $name, 'name', 2, 150);

                    $employer = cleanVarXss($value[1]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $employer, 'employer', 2, 150);

                    $startingDate = cleanVarXss($value[2]);
                    $errors[$type][$id] = validationOptionalMonth($errors[$type][$id], $startingDate, 'starting date');

                    $endingDate = cleanVarXss($value[3]);
                    $errors[$type][$id] = validationOptionalMonth($errors[$type][$id], $endingDate, 'ending date');

                    $city = cleanVarXss($value[4]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $city, 'city', 2, 150);

                    $desc = cleanVarXss($value[5]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $desc, 'desc', 10, 300);
                    break;
                case 'formations':
                    $name = cleanVarXss($value[0]);
                    $errors[$type][$id]=[];
                    $errors[$type][$id] = validationText($errors[$type][$id], $name, 'name', 2, 150);

                    $school = cleanVarXss($value[1]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $school, 'school', 2, 150);

                    $degree = cleanVarXss($value[2]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $degree, 'degree', 2, 150);

                    $city = cleanVarXss($value[3]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $city, 'city', 2, 150);

                    $startingDate = cleanVarXss($value[4]);
                    $errors[$type][$id] = validationOptionalMonth($errors[$type][$id], $startingDate, 'starting date');

                    $endingDate = cleanVarXss($value[5]);
                    $errors[$type][$id] = validationOptionalMonth($errors[$type][$id], $endingDate, 'ending date');

                    $desc = cleanVarXss($value[6]);
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $desc, 'desc', 10, 300);
                    break;
            }
            $id++;
        }
    }

    if (isEmptyArray($errors)){

        $idUser = (is_user_logged_in()) ? get_current_user_id() : NULL;

        $wpdb->insert(
            $wpdb->prefix.'cv',
            array(
                'id_user' => $idUser,
                'job' => $job,
                'name' => $name,
                'firstname' => $firstname,
                'email' => $email,
                'phone' => $phone,
                'age' => $age,
                'cv_desc' => $mainDesc,
                'status' => 'envoyé',
                'created_at' => current_time('mysql'),
            ),
            array(
                '%d',
                '%s',
                '%s',
                '%s',
                '%s',
                '%d',
                '%d',
                '%s',
                '%s',
                '%s',
            )
        );
        $idCV = $wpdb->insert_id;

        insertSkillData($idCV, $infos[0]);

        insertExperienceData($idCV, $infos[1]);

        insertFormationData($idCV, $infos[2]);

        insertHobbieData($idCV, $infos[3]);

    }



    showJson($errors);


}