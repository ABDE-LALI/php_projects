<div class="new_note">
<?php
$id =htmlspecialchars($_GET['id']);
require "connection_to_db.php";
$qry = "SELECT * FROM notes_table WHERE id = :id";
$req = $connection->prepare($qry);
$req->bindParam(":id", $id);
$req->execute();
$note = $req->fetch(PDO::FETCH_ASSOC);
echo "<h3>" . htmlspecialchars($note['title']) . "</h3>
                <p>" . htmlspecialchars($note['content']) . "</p>";
?></div>