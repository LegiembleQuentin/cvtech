<?php
/* Template Name: addcv_template1 */
get_header();
?>
<section id="creationCV">
    <div class="cv_infos">

        <h2>Informations principales</h2>

        <form action="" id="cv_form">

            <div id="cv_main_infos">
                <label for="job">Poste recherché </label>
                <input type="text" name="job" id="job" placeholder="Développeur web">
                <span id="cv_error error_job_cv"></span>

                <label for="profile_pic">Votre photo </label>
                <input type="file" name="job" id="profile_pic">

                <label for="name">Nom </label>
                <input type="text" name="name" id="name" placeholder="Doe">
                <span id="cv_error error_name_cv"></span>

                <label for="firstname">Prénom </label>
                <input type="text" name="firstname" id="firstname" placeholder="John">
                <span id="cv_error error_firstname_cv"></span>

                <label for="email">Email </label>
                <input type="text" name="firstname" id="firstname" placeholder="johndoe@gmail.com">
                <span id="cv_error error_email_cv"></span>

                <label for="phone">Numéro de téléphone </label>
                <input type="text" name="phone" id="phone" placeholder="0665487595">
                <span id="error_phone_cv"></span>

                <label for="age">Age </label>
                <input type="text" name="age" id="age" placeholder="26">
                <span id="cv_error error_phone_cv"></span>

                <label for="main_desc">Description globale </label>
                <textarea name="main_desc" id="main_desc" cols="30" rows="10"></textarea>
                <span id="cv_error error_main_desc_cv"></span>
            </div>

            <h2>Compétences</h2>

            <div id="cv_skills">
                <div id="skill_container">
                    <div class="one_skill" id="skill_1_container">
                        <input type="text" class="input_skill" name="skill_1" id="skill_1" placeholder="HTML5">
                        <span class="cv_error error_skill" id="error_skill_1"></span>
                    </div>

                </div>

                <button type="button" id="add_skill_button">Ajouter une compétence</button>

            </div>

            <h2>Experiences professionelles</h2>

            <div id="cv_exp">
                <div id="exp_container">
                    <div class="one_exp">
                        <label for="job_name">Titre de l'emploi </label>
                        <input type="text" name="job_name" id="job_name" placeholder="Développeur front">
                        <span class="cv_error error_job" id="error_job_name_1"></span>

                        <label for="employer">Employeur </label>
                        <input type="text" name="employer" id="employer" placeholder="Amazon">
                        <span class="cv_error error_employer" id="error_employer_1"></span>

                        <label for="starting_date">Date de début </label>
                        <input type="month" name="starting_date" id="starting_date" placeholder="MM / YYYY">
                        <span class="cv_error error_starting_date" id="error_starting_date_1"></span>

                        <label for="ending_date">Date de fin </label>
                        <input type="month" name="ending_date" id="ending_date" placeholder="MM / YYYY">
                        <span class="cv_error error_ending_date" id="error_ending_date_1"></span>

                        <label for="city">Lieu </label>
                        <input type="text" name="city" id="city" placeholder="Rouen">
                        <span class="cv_error error_city" id="error_city_1"></span>

                        <label for="job_desc">Description du poste </label>
                        <textarea name="job_desc" id="job_desc" cols="30" rows="10"></textarea>
                        <span id="cv_error error_job_desc_cv"></span>
                    </div>

                </div>

                <button type="button" id="add_job_button">Ajouter une experience</button>

            </div>

            <div id="cv_formations">

            </div>



        </div>


    </div>



</section>




<?php
get_footer();



