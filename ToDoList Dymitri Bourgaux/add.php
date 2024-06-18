<?php
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todos = getTodos();
    $todos[] = ['task' => $_POST['task'], 'done' => false];
    saveTodos($todos);
}
header('Location: index.php');
?>
