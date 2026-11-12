<?php
$serveur = "localhost";
    $utilisateur = "root";
    $motDePasse = "";        // vide par défaut sous WampServer
    $baseDeDonnees = "uadb_cours";
 
    $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
 
    if (!$connexion) {
        die("Échec de connexion à MySQL : " . mysqli_connect_error());
    }else {echo "<h1>Connexion Reussie</h1>";}
?>
