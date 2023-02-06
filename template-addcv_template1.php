<?php
/* Template Name: addcv_template1 */
get_header();
?>
<section id="creationCV">
    <div class="cv_infos">

        <h2>Informations personnelles</h2>
        <form action="" id="infos_perso">

            <label for="job">Poste recherché </label>
            <input type="text" name="job" id="job" placeholder="Développeur web">
            <span id="error_job_cv"></span>

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




        </form>
    </div>






</section>




<?php
get_footer();



