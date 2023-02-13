<?php
/* Template Name: listingCV */

get_header(); ?>
    <section  class="listing">
        <div class="container">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wp-cvtech";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("La connexion a échoué: " . mysqli_connect_error());
        }

        if (isset($_POST['search'])) {
            $search = $_POST['search'];
            $sql = "SELECT * FROM cvtc_skill WHERE name LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $num_rows = mysqli_num_rows($result);
                echo "<div class='padding-top-listing'>";
                echo "Résultats de la recherche pour la compétence recherchée :<br>";
                echo "Nombre de compétences trouvées : " . $num_rows . "<br>";
                echo "</div>";

            } else {
                echo "Aucun résultat trouvé pour la compétence recherchée.";
            }
        }

        mysqli_close($conn);
        ?>

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
                            <a id="dowload-pdf" class="dropdown-item download-pdf" href="#">Télécharger le CV</a>
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
        <div id="pagination" class="pagination"></div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <button id="download-pdf">Télécharger PDF</button>



<?php get_footer();



