<?php
require ('connection.php');

$sql = "SELECT * FROM todo";
$stmt = $pdo->query($sql);
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Todo List</h1>
    <form action="new_task.php" method="post">
        <input type="text" name="title" placeholder="Nouvelle tâche">
        <button type="submit">Ajouter</button>
    </form>
    <ul>
        <?php

        if ($todos) {
            foreach ($todos as $todo) {
                echo '<li class="' . ($todo["done"] ? 'done' : 'undo') . '">
                        <span>' . htmlspecialchars($todo["title"]) . '</span>
                        <a href="done-undo.php?id=' . $todo["id"] . '">Done/Undo</a>
                        <a href="delete.php?id=' . $todo["id"] . '">Delete</a>
                      </li>';
            }
        }
        else {
            echo "<h3> NO tasks<h3>";
        }
        ?>
    </ul>
</body>
</html>
