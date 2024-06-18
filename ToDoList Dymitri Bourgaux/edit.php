<?php
require 'functions.php';
$todos = getTodos();
$index = $_GET['index'];
$todo = $todos[$index];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todos[$index]['task'] = $_POST['task'];
    saveTodos($todos);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Éditer Tâche</title>
</head>
<body>
    <h1>Éditer Tâche</h1>
    <form action="edit.php?index=<?php echo $index; ?>" method="post">
        <input type="text" name="task" value="<?php echo htmlspecialchars($todo['task']); ?>" required>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
