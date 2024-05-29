<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Do it !</title>
</head>
<body>
    <form action="newtodo.php" method="post">
    <input type="text" name="tache" placeholder="Enter your todo">
    <button>New todo</button>
    </form>
    <?php
    // Ouvrir le fichier CSV en mode lecture
    $fichier = fopen('data.csv', 'r');

    // Lire toutes les lignes du fichier CSV
    $taches = array();
    while (($ligne = fgetcsv($fichier)) !== false){
        $taches[] = $ligne[0];
    }
    fclose($fichier);
    ?>
    <ul>
        <?php foreach ($taches as $tache): ?>
            <li><?php echo $tache; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>