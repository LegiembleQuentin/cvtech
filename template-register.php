<?php
/* Template Name: Register */

get_header(); ?>
<!--    <div class="tache-left">-->
<!--        <img class="" src="--><?php //= asset('/img/image-bas-register.png')?><!--" alt="">-->
<!--    </div>-->
<!--    <div class="tache-right">-->
<!--        <img class="" src="--><?php //= asset('/img/right_tache.png')?><!--" alt="">-->
<!--    </div>-->

    <section class="wrap1" id="register">


        <div class="logo-inscription">
            <img class="" src="<?= asset('/img/logo-inscription-cropped.svg')?>" alt="">
        </div>
        <h1 class="title-register paddbot-register-title ">Créez votre compte</h1>

        <form action="" id="form_register">
            <div class="form-register">
                <div class="form-register-div">
                    <label class="paddbot-register"  for="name">Nom <span class="required">*</span></label>
                    <input type="text" name="name" id="name">
                    <span id="error_name_register"></span>
                </div>
                <div class="form-register-div">
                    <label class="paddbot-register"  for="firstname">Prenom <span class="required">*</span></label>
                    <input type="text" name="firstname" id="firstname">
                    <span id="error_firstname_register"></span>
                </div>
            </div>
            <div class="form-register">
                <div class="form-register-div">
                    <label class="paddbot-register"  for="id">Identifiant <span class="required">*</span></label>
                    <input type="text" name="id" id="id">
                    <span id="error_id_register"></span>
                </div>
                <div class="form-register-div">
                    <label class="paddbot-register"  for="email">email <span class="required">*</span></label>
                    <input type="text" name="email" id="email">
                    <span id="error_email_register"></span>
                </div>
            </div>
            <div class="form-register">
                <div class="form-register-div">
                    <label class="paddbot-register" for="password_register">Mot de passe <span class="required">*</span></label>
                    <input type="password" name="password_register" id="password_register">
                    <span id="error_password_register"></span>
                </div>
                <div class="form-register-div">
                    <label class="paddbot-register"  for="password2">Confirmer le mot de passe <span class="required">*</span></label>
                    <input type="password" name="password2" id="password2">
                </div>
            </div>
            <div class="form-register">
                <div class="form-register-div">
                    <label class="paddbot-register"  for="phone">Numero de telephone</label>
                    <input type="text" name="phone" id="phone">
                    <span id="error_phone_register"></span>
                </div>
                <div class="form-register-div">

                    <label class="paddbot-register" for="birthdate">Date de naissance</label>
                    <input type="date" name="birthdate" id="birthdate">
                    <span id="error_birthdate_register"></span>
                </div>
            </div>
            <div class="form-register">
                <input type="submit" id="register_submit" value="S'inscrire">
            </div>
        </form>



    </section>








<?php get_footer();
