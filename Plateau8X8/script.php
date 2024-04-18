<?php
    session_start();
    if (!isset($_SESSION['couleur'])) {
        $_SESSION['couleur'] = 'blanc';
    } else {
        $_SESSION['couleur'] = ($_SESSION['couleur'] == 'blanc') ? 'noir' : 'blanc';
    }
?>
