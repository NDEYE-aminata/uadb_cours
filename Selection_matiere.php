<?php
    require "connexion.php";
 
    $sql = "SELECT * FROM matiere";
    $resultat = mysqli_query($connexion, $sql);
 
    if (mysqli_num_rows($resultat) > 0) {
        while ($user = mysqli_fetch_assoc($resultat)) {
            echo $user["nom"] . " -- " . $user["coefficient"]."--";
            echo " -- " . $user["credits"]."<br>";
        }
    } else {
        echo "Aucun étudiant enregistré.";
    }
?>