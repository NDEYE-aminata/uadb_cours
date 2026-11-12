<?php
    // modifier_traitement.php
    require "connexion.php";
 
    
    $id = $_POST["id"];
    $nouvelleMoyenne = $_POST["moyenne"];
	
 
     $sql = "UPDATE utilisateurs
            SET moyenne = '$nouvelleMoyenne'
            WHERE id = '$id'";

   
   
 
    if (mysqli_query($connexion, $sql)) {
        echo "utilisateur modifie avec succès";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
