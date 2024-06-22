<?php
require 'functions.php';

if (isPostRequest()) {
    $index = $_POST['index'];
    $todos = getTodos();

    $todos[$index]['done'] = !$todos[$index]['done'];

    saveTodos($todos);
}

header('Location: index.php');
exit;
?>
