<?php
require 'connection.php';

$title = $_POST['title'];

if ($title) {
    $sql = "INSERT INTO todo (title) VALUES (:title)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title]);
}

header('Location: home_page.php');