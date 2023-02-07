<?php
/*Template Name: contact*/
get_header(); ?>

<form method="post" id="formulaire">
    <div class="mail">
        <label for="mail" id="mail"></label>
        <input type="email" id="email" placeholder="votre mail">
        <span class="error"></span>
    </div>
    <div class="message">
        <label for="message"></label>
        <textarea id="message" placeholder="message"></textarea>
        <span class="error"></span>
    </div>
    <input type="submit" value="Envoyer">
</form>


<?php get_footer() ?>
