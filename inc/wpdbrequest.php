<?php

function insertFormationData($idCV, $formations) {
    global $wpdb;

    foreach ($formations as $formation) {
        $name = $formation[0];
        $school = $formation[1] ?: NULL;
        $degree = $formation[2] ?: NULL;
        $city = $formation[3] ?: NULL;
        $startingDate = $formation[4] ?: NULL;
        $endingDate = $formation[5] ?: NULL;
        $description = $formation[6] ?: NULL;

        $wpdb->insert(
            $wpdb->prefix.'formation',
            array(
                'id_CV' => $idCV,
                'name' => $name,
                'school' => $school,
                'degree' => $degree,
                'city' => $city,
                'starting_date' => $startingDate,
                'ending_date' => $endingDate,
                'desc' => $description,
                'created_at' => current_time('mysql'),
            ),
            array(
                '%d',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
            )
        );
    }
}


function insertExperienceData($idCV, $experiences) {
    global $wpdb;

    foreach ($experiences as $exp) {
        $name = $exp[0];
        $employer = $exp[1] ?: NULL;
        $startingDate = $exp[2] ?: NULL;
        $endingDate = $exp[3] ?: NULL;
        $city = $exp[4] ?: NULL;
        $description = $exp[5] ?: NULL;

        $wpdb->insert(
            $wpdb->prefix.'experiences',
            array(
                'id_CV' => $idCV,
                'name' => $name,
                'employer' => $employer,
                'starting_date' => $startingDate,
                'ending_date' => $endingDate,
                'city' => $city,
                'description' => $description,
                'created_at' => current_time('mysql'),
            ),
            array(
                '%d',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
            )
        );
    }
}

function insertSkillData($idCV, $skills) {
    global $wpdb;

    foreach ($skills as $skill) {
        $wpdb->insert(
            $wpdb->prefix.'skill',
            array(
                'id_CV' => $idCV,
                'name' => $skill,
                'created_at' => current_time('mysql'),
            ),
            array(
                '%d',
                '%s',
                '%s',
            )
        );
    }
}

function insertHobbieData($idCV, $hobbies) {
    global $wpdb;

    foreach ($hobbies as $hobbie) {
        $wpdb->insert(
            $wpdb->prefix.'hobbies',
            array(
                'id_CV' => $idCV,
                'name' => $hobbie,
                'created_at' => current_time('mysql'),
            ),
            array(
                '%d',
                '%s',
                '%s',
            )
        );
    }
}
