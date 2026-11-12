<?php
    // ajouter_traitement.php
    require "connexion.php";
 
    $nom = $_POST["nom"];
    $filiere = $_POST["filiere"];
    $moyenne = $_POST["moyenne"];
	$passe= password_hash($_POST["passe"],PASSWORD_DEFAULT);
 
    $sql = "INSERT INTO utilisateurs (nom, filiere, moyenne,passe)
            VALUES ('$nom', '$filiere', '$moyenne','$passe')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "utilisateur ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
