<?php session_start(); ?>
<?php

// print_r($_GET);
// print_r($_SESSION);
foreach ($_SESSION['todo'] as $key => $value) {

    if ($value['id'] == $_GET['id']) {
        // print_r($value);
        if ($_SESSION['todo'][$key]['type'] == 'incomplete') {
            $_SESSION['todo'][$key]['type'] = 'completed';
        } else {
            $_SESSION['todo'][$key]['type'] = 'incomplete';
        }
    }
}
header('location:index.php');
