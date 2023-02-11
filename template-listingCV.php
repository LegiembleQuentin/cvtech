<?php
/* Template Name: listingCV */

get_header(); ?>
    <section  class="listing wrap1">
            <div id="recruteur">
            </div>
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
    </section>
    <div id="pagination" class="pagination">
    </div>

<?php get_footer();
