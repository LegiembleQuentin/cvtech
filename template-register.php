<?php
/* Template Name: Register */

get_header(); ?>


<section id="register">
    <h1>Créez votre compte</h1>

    <form action="" id="form_register">

        <label for="name">Nom <span class="required">*</span></label>
        <input type="text" name="name" id="name" value="">
        <span id="error_name"></span>

        <label for="firstname">Prenom <span class="required">*</span></label>
        <input type="text" name="firstname" id="firstname" value="">
        <span id="error_firstname"></span>

        <label for="id">Indentifiant <span class="required">*</span></label>
        <input type="text" name="id" id="id" value="">
        <span id="error_id"></span>

        <label for="email">email <span class="required">*</span></label>
        <input type="text" name="email" id="email" value="">
        <span id="error_email"></span>

        <label for="password">Mot de passe <span class="required">*</span></label>
        <input type="password" name="password" id="password">
        <span id="error_password"></span>

        <label for="password2">Confirmer le mot de passe <span class="required">*</span></label>
        <input type="password" name="password2" id="password2">

        <label for="phone">Numero de telephone <span class="required">*</span></label>
        <input type="text" name="phone" id="phone">
        <span id="error_phone"></span>

        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate">
        <span id="error_birthdate"></span>

        <input type="submit" id="register_submit">

    </form>



</section>








<?php get_footer();
