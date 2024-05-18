<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To do list Dym</title>
</head>
<body>
    <h1>Do It</h1>
    <form action="ajouter.php" method="post">
        <input type="text" name="tache" placeholder="Ajouter une tâche">
        <button type="submit">Ajouter</button>
    </form>
    <ul>
        <?php
            require_once"test.php";
            bonjour()
        ?>
    </ul>
</body>
</html>