<?php

function getTodos() {
    if (!file_exists('todos.csv')) {
        return [];
    }
    $file = fopen('todos.csv', 'r');
    $todos = [];
    while (($data = fgetcsv($file)) !== FALSE) {
        $todos[] = ['task' => $data[0], 'done' => $data[1] === '1'];
    }
    fclose($file);
    return $todos;
}

function saveTodos($todos) {
    $file = fopen('todos.csv', 'w');
    foreach ($todos as $todo) {
        fputcsv($file, [$todo['task'], $todo['done'] ? '1' : '0']);
    }
    fclose($file);
}

function countTasks() {
    $todos = getTodos();
    $total = count($todos);
    $done = count(array_filter($todos, fn($todo) => $todo['done']));
    $todo = $total - $done;
    return ['total' => $total, 'done' => $done, 'todo' => $todo];
}

function isPostRequest() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function sortTodos($todos) {
    usort($todos, function($a, $b) {
        return $a['done'] <=> $b['done'];
    });
    return $todos;
}
?>
