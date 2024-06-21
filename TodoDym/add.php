<?php
require 'functions.php';
if (isPostRequest()) {
    $todos = getTodos();
    $todos[] = ['task' => $_POST['task'], 'done' => false];
    saveTodos($todos);
}
header('Location: index.php');
?>
