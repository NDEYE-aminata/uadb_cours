<?php
    // supprimer_traitement.php
    require "connexion.php";
 
    $id = $_GET["id"];
 
    $sql = "DELETE FROM matiere WHERE id = '$id'";
 
    if (mysqli_query($connexion, $sql)) {
        header("Location: selection_matiere.php");
        exit;
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
