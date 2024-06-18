<?php
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    $todos = getTodos();
    array_splice($todos, $index, 1);
    saveTodos($todos);
}
header('Location: index.php');
?>
