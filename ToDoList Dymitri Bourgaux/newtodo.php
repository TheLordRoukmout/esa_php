<?php
// Récupérer la tâche à partir du formulaire
$tache = $_POST['tache'];

// Ouvrir le fichier CSV en mode d'écriture
$fichier = fopen('data.csv', 'a');

// Ecrire la tâche dans le fichier CSV
fputcsv($fichier, array($tache));

// Fermer le fichier CSV
fclose($fichier);

// Rediriger vers la page d'acceuil
header('Location: index.php');

