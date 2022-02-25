<?php
session_start();

// Function TO delete 
function delete($id)
{

    foreach ($_SESSION['todo'] as $key => $value) {
        if ($value['id'] == $id) {
            unset($_SESSION['todo'][$key]);
        }
    }
}

if (isset($_GET['id'])) {
    if ($_GET['action'] == 'edit') {

        // Call edit fucntion
    }
    if ($_GET['action'] == 'del') {
        // Call del fucntion
        $id = $_GET['id'];
        delete($id);
    }
}
header("location:index.php");
