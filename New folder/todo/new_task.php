<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $sql = "INSERT INTO todo (title) VALUES ('$title')";
    $conn->query($sql);
    header("Location: index.php");
}
?>
