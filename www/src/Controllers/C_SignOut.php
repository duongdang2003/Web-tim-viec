<?php
    session_start();

    $loginPage = 'C_SignIn.php';
    if (!isset($_SESSION['user'])) {
        header("Location: $loginPage");
        exit();
    }

    session_destroy();
    header("Location: $loginPage");

?>