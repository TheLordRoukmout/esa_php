<?php
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    $todos = getTodos();
    $todos[$index]['done'] = !$todos[$index]['done'];
    saveTodos($todos);
}
header('Location: index.php');
?>
