<?php
// Récupérer l'info du formulaire
$tache = $_POST["tache"];

// Ouverture du csv et écriture de la tache dans le CSV
$fichier = fopen("data.csv", "a");
fputcsv($fichier, array($tache));

// Fermeture du fichier CSV
fclose($fichier);

// Rediriger vers la page d'accueil
header("Locatio: index.php")
