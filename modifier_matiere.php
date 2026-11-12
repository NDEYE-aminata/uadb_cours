<?php
    // modifier_traitement.php
    require "connexion.php";
 
    
    $id = $_POST["id"];
    $nouvellecoefficient= $_POST["coefficient"];
	
 
     $sql = "UPDATE matiere
            SET coefficient = '$nouvellecoefficient'
            WHERE id = '$id'";

   
   
 
    if (mysqli_query($connexion, $sql)) {
        echo "utilisateur modifie avec succès";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>