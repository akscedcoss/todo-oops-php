<?php session_start(); ?>


<html>

<head>
    <title>TODO List</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>TODO LIST</h2>
        <?php include "add_item.php" ?>
        <?php include "incomplete-tasks.php" ?>
        <?php include "completed-tasks.php" ?>

    </div>

</body>

</html>