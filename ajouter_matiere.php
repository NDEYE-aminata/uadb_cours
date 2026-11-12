<?php
    // ajouter_traitement.php
    require "connexion.php";
 
    $nom = $_POST["nom"];
    $coefficient = $_POST["coefficient"];
    $credits = $_POST["credits"];
 
    $sql = "INSERT INTO matiere (nom, coefficient, credits)
            VALUES ('$nom', '$coefficient', '$credits')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "matiere ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
