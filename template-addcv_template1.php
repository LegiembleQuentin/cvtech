<?php
/* Template Name: addcv_template1 */
get_header();
?>
<section id="creationCV">
    <div class="cv_left wrapCVform">

        <form action="" id="cv_form" novalidate>

            <h2>Informations principales</h2>

            <div id="cv_main_infos" class="wrapCVform">
                <div class="cv_one_input">
                    <label for="job">Poste recherché </label>
                    <input type="text" name="job" id="job" placeholder="Développeur web">
                    <span id="error_job_cv"></span>
                </div>

<!--                <label for="profile_pic">Votre photo </label>-->
<!--                <input type="file" name="job" id="profile_pic">-->
                <div class="cv_one_input">
                    <label for="name">Nom </label>
                    <input type="text" name="name" id="name" placeholder="Doe">
                    <span id="error_name_cv"></span>
                </div>

                <div class="cv_one_input">
                    <label for="firstname">Prénom </label>
                    <input type="text" name="firstname" id="firstname" placeholder="John">
                    <span id="error_firstname_cv"></span>
                </div>

                <div class="cv_one_input">
                    <label for="email">Email </label>
                    <input type="text" name="email" id="email" placeholder="johndoe@gmail.com">
                    <span id="error_email_cv"></span>
                </div>

                <div class="cv_one_input">
                    <label for="phone">Numéro de téléphone </label>
                    <input type="text" name="phone" id="phone" placeholder="0665487595">
                    <span id="error_phone_cv"></span>
                </div>

                <div class="cv_one_input">
                    <label for="age">Age </label>
                    <input type="text" name="age" id="age" placeholder="26">
                    <span id="error_age_cv"></span>
                </div>

                <div class="cv_textarea">
                    <label for="main_desc">Description globale </label>
                    <textarea name="main_desc" id="main_desc" cols="30" rows="10"></textarea>
                    <span id="error_main_desc_cv"></span>
                </div>
            </div>

            <div id="cv_skills" class="wrapCVform">
                <h2>Compétences</h2>
                <div id="skill_container">

                </div>
                <div class="addBtn">
                    <button type="button" id="add_skill_button">+</button>
                </div>
            </div>

            <div id="cv_exp" class="wrapCVform">
                <h2>Experiences professionelles</h2>
                <div id="exp_container">

                </div>
                <div class="addBtn">
                    <button type="button" id="add_job_button">+</button>
                </div>
            </div>

            <div id="cv_formations" class="wrapCVform">
                <h2>Formations</h2>
                <div id="formation_container">

                </div>
                <div class="addBtn">
                    <button type="button" id="add_formation_button">+</button>
                </div>
            </div>

            <div id="cv_hobbies" class="wrapCVform">
                <h2>Centres d'intérêt</h2>
                <div id="hobbies_container">

                </div>
                <div class="addBtn">
                    <button type="button" id="add_hobbie_button"> + </button>
                </div>
            </div>

            <div class="divSubmitBtn">
                <input type="submit" id="cv_submit" value="Envoyer mon cv">
            </div>
        </form>


    </div>



</section>




<?php
get_footer();



