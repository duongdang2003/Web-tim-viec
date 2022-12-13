<?php
    session_start();

    $loginPage = 'login.php';
    if (!isset($_SESSION['user'])) {
        header("Location: $loginPage");
        exit();
    }

    session_destroy();
?>