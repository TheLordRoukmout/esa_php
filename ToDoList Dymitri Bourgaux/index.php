<?php
require 'functions.php';
$todos = getTodos();
$taskCount = countTasks();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Do it Dym !</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="tittle">
        <h1>Do it Dym !</h1>
    </div>
    <div class="container_todolist">
        <div class="sub_tittle_count">
            <p>Total des tâches : <?php echo $taskCount['total']; ?></p>
            <p>Tâches à faire : <?php echo $taskCount['todo']; ?></p>
            <p>Tâches réalisées : <?php echo $taskCount['done']; ?></p>
        </div>
        <div class="new_todolist">
            <form action="add.php" method="post">
                <input type="text" name="task" required>
                <button type="submit">Ajouter</button>
            </form>
        </div> 
        <div class="container_liste_todolist">
            <div class="content_liste_todolist">  
                <ul>
                    <?php foreach ($todos as $index => $todo): ?>
                        <li class="list_detail_todo">
                            <form action="toggle.php" method="post" style="display:inline;">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button class="btn_doNot" type="submit"><?php echo $todo['done'] ? '&#x274C;' : '&#x2705;'; ?></button>
                            </form>
                            <?php echo $todo['task']; ?>
                            <button class="btn_modifier"><a href="edit.php?index=<?php echo $index; ?>">&#x1F4DD;</a></button>
                            <form action="delete.php" method="post" style="display:inline;">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button class="btn_trash" type="submit">&#128465;&#65039;</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
