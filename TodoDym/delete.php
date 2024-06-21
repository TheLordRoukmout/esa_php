<?php
require 'functions.php';
if (isPostRequest()) {
    $index = $_POST['index'];
    $todos = getTodos();
    array_splice($todos, $index, 1);
    saveTodos($todos);
}
header('Location: index.php');
?>
