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


        $limit = 5;
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start = ($current_page - 1) * $limit;

        $sql = "SELECT * FROM cvtc_cv LIMIT $start, $limit";
        $result = mysqli_query($conn, $sql);

        $total_records = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM cvtc_cv"));
        $total_pages = ceil($total_records / $limit);

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
                if ($total_pages > 1) {
                    echo "<div class='pagination'>";
                    for ($i = 1; $i <= $total_pages; $i++) {
                        $class = ($i == $current_page) ? 'current-page' : '';
                        echo "<a href='?page=$i' class='$class'>$i</a>";
                    }
                    echo "</div>";
                }
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




<?php get_footer();