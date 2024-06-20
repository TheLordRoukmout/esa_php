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
            <div class="content_sub">
                <p class="compteur_todo"><?php echo $taskCount['total']; ?><br>Total des tâches</p>
                <p class="compteur_todo"><?php echo $taskCount['todo']; ?><br>Tâches à faire </p>
                <p class="compteur_todo"><?php echo $taskCount['done']; ?><br>Tâches réalisées</p>
            </div>
        </div>
        <div class="new_todolist">
            <div class="content_new_todo">
                <form action="add.php" method="post">
                    <input class="placeNewTodo" placeholder="Entrez votre nouvelle tâche ici" type="text" name="task" required>
                    <button type="submit" class="btn_add_todo">&#x2795;</button>
                </form>
            </div>
        </div> 
        <div class="container_liste_todolist">
            <div class="content_liste_todolist">  
                <ul>
                    <?php foreach ($todos as $index => $todo): ?>
                        <li class="list_detail_todo <?php echo $todo['done'] ? 'done' : ''; ?>">
                            <form action="toggle.php" method="post">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button class="btn_doNot" type="submit"><?php echo $todo['done'] ? '&#x274C;' : '&#x2705;'; ?></button>
                            </form>
                            <p class="echoTask"><?php echo htmlspecialchars($todo['task']); ?></p>
                            <button class="btn_modifier"><a href="edit.php?index=<?php echo $index; ?>">&#x1F4DD;</a></button>
                            <form action="delete.php" method="post">
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
