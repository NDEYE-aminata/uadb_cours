<?php
    require "connexion.php";
 
    $sql = "SELECT * FROM utilisateurs";
    $resultat = mysqli_query($connexion, $sql);
 
    if (mysqli_num_rows($resultat) > 0) {
        while ($user = mysqli_fetch_assoc($resultat)) {
            echo $user["nom"] . " -- " . $user["filiere"]."--";
            echo " -- " . $user["moyenne"]."-- " . "<strong>Mot de passe :</strong>--
			".$user["passe"]."<br>";
        }
    } else {
        echo "Aucun étudiant enregistré.";
    }
?>
