<?php if (!isset($_SESSION)) {
    session_start();
}
echo '<h3>Completed</h3>
<ul id="completed-tasks">';
if (isset($_SESSION['todo'])) {

    foreach ($_SESSION['todo'] as $key => $value) {
        if ($value['type'] == 'completed') {
            echo '<li>
            <form action="check_to_uncheck.php">
            <input type="hidden" name="id" value="' . $value['id'] . '">
            <input type="checkbox" onchange="form.submit()"  checked>
             </form>
            <label> ' . $value['task'] . '</label>
            <input type="text">
            <button class="edit"  ><a href="index.php?action=edit&val=' . $value['task'] . '">Edit</a></button>
            <button class="delete" ><a href="edit_delete.php?action=del&id=' . $value['id'] . '">Delete</a></button>
            
            </li>';
        }
    }
}


echo '</ul>';
