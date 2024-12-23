<?php 
require "connection_to_db.php";
$id = $_POST["delete"];
$qry = "DELETE FROM notes_table WHERE `notes_table`.`id` = :id";
$req = $connection->prepare($qry);
$req->bindParam(":id", $id);
$req->execute();
header("Location: http://localhost/New%20folder/notes_app/view.php");
exit;
?>