<?php

add_action('wp_ajax_add_cv', 'addCV');
add_action('wp_ajax_nopriv_add_cv', 'addCV');

function addCV(){
    $infos = json_decode(stripslashes($_POST['infos']));

    $errors = [];

    $types = [
        'skills',
        'jobs',
        'formations',
    ];

    foreach($infos as $index => $values) {
        $type = $types[$index];
        $id = 0;
        $errors[$type] = [];
        foreach($values as $value) {
            switch ($type) {
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
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $desc, 'desc', 10, 900);
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
                    $errors[$type][$id] = validationOptionalText($errors[$type][$id], $desc, 'desc', 10, 900);
                    break;
            }
            $id++;
        }
    }

    showJson($errors);


//    $errors = [];
//
//    $idSkill = 0;
//    $errors['skills'] = [];
//    foreach($infos[0] as $skill){
//        $skill = cleanVarXss($skill);
//        $errors['skills'] = validationText($errors['skills'], $skill, $idSkill, 2, 150);
//
//        $idSkill++;
//    }
//
//    $idJob = 0;
//    $errors['jobs'] = [];
//    foreach($infos[1] as $job){
//        $name = cleanVarXss($job[0]);
//        $errors['jobs'][$idJob]=[];
//        $errors['jobs'][$idJob] = validationText($errors['jobs'][$idJob], $name, 'name', 5, 150);
//
//        $employer = cleanVarXss($job[1]);
//        $errors['jobs'][$idJob] = validationOptionalText($errors['jobs'][$idJob], $employer, 'employer', 5, 150);
//
//        $startingDate = cleanVarXss($job[2]);
//        $errors['jobs'][$idJob] = validationOptionalMonth($errors['jobs'][$idJob], $startingDate, 'starting date');
//
//        $endingDate = cleanVarXss($job[3]);
//        $errors['jobs'][$idJob] = validationOptionalMonth($errors['jobs'][$idJob], $endingDate, 'ending date');
//
//        $city = cleanVarXss($job[4]);
//        $errors['jobs'][$idJob] = validationOptionalText($errors['jobs'][$idJob], $city, 'city', 2, 150);
//
//        $desc = cleanVarXss($job[5]);
//        $errors['jobs'][$idJob] = validationOptionalText($errors['jobs'][$idJob], $desc, 'desc', 10, 900);
//
//        $idJob++;
//    }


}