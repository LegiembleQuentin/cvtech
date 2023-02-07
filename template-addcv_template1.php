<?php
/* Template Name: addcv_template1 */
get_header();
?>
<section id="creationCV">
    <div class="cv_infos">

        <h2>Informations principales</h2>

        <form action="" id="cv_main_infos">

            <label for="job">Poste recherché </label>
            <input type="text" name="job" id="job" placeholder="Développeur web">
            <span id="error_job_cv"></span>

            <label for="profile_pic">Votre photo </label>
            <input type="file" name="job" id="profile_pic">

            <label for="name">Nom </label>
            <input type="text" name="name" id="name" placeholder="Doe">
            <span id="error_name_cv"></span>

            <label for="firstname">Prénom </label>
            <input type="text" name="firstname" id="firstname" placeholder="John">
            <span id="error_firstname_cv"></span>

            <label for="email">Email </label>
            <input type="text" name="firstname" id="firstname" placeholder="johndoe@gmail.com">
            <span id="error_email_cv"></span>

            <label for="phone">Numéro de téléphone </label>
            <input type="text" name="phone" id="phone" placeholder="0665487595">
            <span id="error_phone_cv"></span>

            <label for="age">Age </label>
            <input type="text" name="age" id="age" placeholder="26">
            <span id="error_phone_cv"></span>

            <label for="main_desc">Description globale </label>
            <textarea name="main_desc" id="main_desc" cols="30" rows="10"></textarea>
            <span id="error_main_desc_cv"></span>
        </form>

        <h2>Compétences</h2>

        <form action="" id="cv_skills">

            <div id="skill_container">
                <input type="text" name="skill" id="skill" placeholder="HTML5">
                <span id="error_skill"></span>

            </div>

            <button type="button" id="add_skill_button">Ajouter une compétence</button>


        </form>






    </div>






</section>




<?php
get_footer();



