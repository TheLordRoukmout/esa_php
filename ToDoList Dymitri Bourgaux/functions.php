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
    $todoCount = [
        'total' => count($todos),
        'todo' => 0,
        'done' => 0
    ];

    foreach ($todos as $todo) {
        if ($todo['done']) {
            $todoCount['done']++;
        } else {
            $todoCount['todo']++;
        }
    }

    return $todoCount;
}

?>
