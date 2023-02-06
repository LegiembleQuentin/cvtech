<?php
/* Template Name: Register */

get_header(); ?>


<section id="register">
    <h1>Créez votre compte</h1>

    <form action="" id="form_register">

        <label for="name">Nom <span class="required">*</span></label>
        <input type="text" name="name" id="name">
        <span id="error_name_register"></span>

        <label for="firstname">Prenom <span class="required">*</span></label>
        <input type="text" name="firstname" id="firstname">
        <span id="error_firstname_register"></span>

        <label for="id">Indentifiant <span class="required">*</span></label>
        <input type="text" name="id" id="id">
        <span id="error_id_register"></span>

        <label for="email">email <span class="required">*</span></label>
        <input type="text" name="email" id="email">
        <span id="error_email_register"></span>

        <label for="password">Mot de passe <span class="required">*</span></label>
        <input type="password" name="password" id="password">
        <span id="error_password_register"></span>

        <label for="password2">Confirmer le mot de passe <span class="required">*</span></label>
        <input type="password" name="password2" id="password2">

        <label for="phone">Numero de telephone</label>
        <input type="text" name="phone" id="phone">
        <span id="error_phone_register"></span>

        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate">
        <span id="error_birthdate_register"></span>

        <input type="submit" id="register_submit">

    </form>



</section>








<?php get_footer();
