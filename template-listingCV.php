<?php
/* Template Name: listingCV */

get_header(); ?>
    <section class="listing wrap1">
        <?php
        // Connexion à la base de données
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
                echo "  - permis: " . $row["permis"] . "<br>";
                echo "  - status: " . $row["status"] . "<br>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Pas de résultat";
        }

        mysqli_close($conn);
        ?>
    </section>




<?php get_footer();