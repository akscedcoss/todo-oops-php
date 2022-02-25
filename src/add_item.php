<?php


// print_r($_REQUEST);
if (isset($_REQUEST['val'])) {
    $val = $_REQUEST['val'];
} else {
    $val = " ";
}

echo '<h3>Add Item</h3>
<p>
<form action="create.php">
    <input id="new-task" type="text" name="task" value="' . $val . '"><button>Add</button>
</form>
</p>';
