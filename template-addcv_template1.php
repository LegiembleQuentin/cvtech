<?php
/* Template Name: addcv_template1 */
get_header();
?>
<section id="creationCV">
    <div class="cv_left">

        <form action="" id="cv_form" novalidate>

            <h2>Informations principales</h2>

            <div id="cv_main_infos">
                <label for="job">Poste recherché </label>
                <input type="text" name="job" id="job" placeholder="Développeur web">
                <span id="cv_error error_job_cv"></span>

<!--                <label for="profile_pic">Votre photo </label>-->
<!--                <input type="file" name="job" id="profile_pic">-->

                <label for="name">Nom </label>
                <input type="text" name="name" id="name" placeholder="Doe">
                <span id="cv_error error_name_cv"></span>

                <label for="firstname">Prénom </label>
                <input type="text" name="firstname" id="firstname" placeholder="John">
                <span id="cv_error error_firstname_cv"></span>

                <label for="email">Email </label>
                <input type="text" name="email" id="email" placeholder="johndoe@gmail.com">
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

            <div id="cv_skills">
                <h2>Compétences</h2>
                <div id="skill_container">

                </div>
                <button type="button" id="add_skill_button">Ajouter une compétence</button>
            </div>

            <div id="cv_exp">
                <h2>Experiences professionelles</h2>
                <div id="exp_container">

                </div>
                <button type="button" id="add_job_button">Ajouter une experience</button>
            </div>


            <div id="cv_formations">
                <h2>Formations</h2>
                <div id="formation_container">

                </div>
                <button type="button" id="add_formation_button">Ajouter une formation</button>
            </div>

            <div id="cv_hobbies">
                <h2>Centres d'intérêt</h2>
                <div id="hobbies_container">

                </div>
                <button type="button" id="add_hobbie_button">Ajouter un centre d'intérêt</button>
            </div>


            <input type="submit" id="cv_submit" value="Envoyer mon cv">
        </form>


    </div>



</section>




<?php
get_footer();



