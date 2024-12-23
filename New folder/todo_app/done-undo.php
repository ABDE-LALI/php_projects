<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE todo SET done = NOT done WHERE id = :id";
$req = $pdo->prepare($sql);
$req->execute(['id' => $id]);

header('Location: home_page.php');

