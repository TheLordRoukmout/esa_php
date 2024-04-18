<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateau de 64 cases</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            for ($i = 1; $i <= 64; $i++) {
                echo "<div class='case' id='case-$i'></div>";
            }
        ?>
    </div>
    <button id="changerCouleur">Changer la couleur</button>
    <script src="script.js"></script>
</body>
</html>
