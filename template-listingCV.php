<?php
/* Template Name: listingCV */

get_header(); ?>
    <section  class="listing">
        <div class="container">
        <form action="" method="post">
            <input type="text" name="search">
            <button type="submit">Rechercher</button>
        </form>
            <div id="recruteur" class="wrap1">
            </div>
        <div id="modal1" class="modal wrap1">
            <div class="modal-content">
                <div class="title">
                    <h4 class="modal-header">Informations supplémentaires</h4>
                    <div class="link">
                        <a class="nav-link dropdown-toggle" href="#" id="optionsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="optionsDropdown">
                            <a class="dropdown-item" href="#">Télécharger le CV</a>
                            <a class="dropdown-item" href="#">Supprimer le CV</a>
                        </div>
                    </div>
                </div>
                <div class="content_txt"></div>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
            </div>
        </div>
        </div>
    </section>
<?php get_footer();



