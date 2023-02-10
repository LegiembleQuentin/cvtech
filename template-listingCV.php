<?php
/* Template Name: listingCV */

get_header(); ?>

    <section class="listing wrap1 column-center">
        <div>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "wp-cvtech";

        $conn = mysqli_connect($host, $username, $password, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM cvtc_cv";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

                echo "<div class='person-box'>";
                echo "<div class='person-info'>";
                echo "<div class='div-bonhome-cv'>";
                echo '<img class="bonhomme-cv" src="' . asset('/img/logo-inscription-cropped.svg') . '" alt="">';
                echo "</div>";
                echo "  - nom: chapiteau  " . "<br>";
                echo "  - nom: titeuf  " . "<br>";
                echo "  - phone: " . $row["phone"] . "<br>";
                echo "  - email: " . $row["email"] . "<br>";
                echo "  - age: " . $row["age"] . "<br>";
//                echo "  - permis: " . $row["permis"] . "<br>";
                echo "  - status: " . $row["status"] . "<br>";
                echo "  - crée: " . $row["created_at"] . "<br>";

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Pas de résultat";
        }

        mysqli_close($conn);
        ?>
        </div>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wp-cvtech";

        // Créez la connexion
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




<?php get_footer();