<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <form method="post" action="new_task.php">
        <input type="text" name="title" placeholder="Task Title" required>
        <button type="submit">Add</button>
    </form>

</body>
</html>
