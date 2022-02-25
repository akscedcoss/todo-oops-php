<?php session_start(); ?>
<?php


if (!isset($_SESSION['todo'])) {
    $_SESSION['id'] = 100;
    $_SESSION['todo'] = array();
}

// print_r($_GET['task']);
array_push($_SESSION['todo'], ['id' => $_SESSION['id'], 'type' => 'incomplete', 'task' => $_GET['task']]);
// print_r($_SESSION['todo']);
$_SESSION['id']++;
header("location:index.php");
