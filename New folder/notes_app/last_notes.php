<?php
require "connection_to_db.php";
$qry = "SELECT * FROM notes_table ORDER BY id DESC LIMIT 3;";
$req = $connection->prepare($qry);
$req->execute();
$data = $req->fetchAll(PDO::FETCH_ASSOC);
$len = count($data);
foreach ($data as $note) {
    echo "<a class='note' href='view.php?id=".urlencode($note['id'])."'>
            <div>
                <h3>" . htmlspecialchars($note['title']) . "</h3>
                <p>" . htmlspecialchars($note['content']) . "</p>
                <form action='delete_note.php' method='post'>
                    <input type='hidden' value='" . htmlspecialchars($note['id']) . "' name='delete'>
                    <input type='submit' value='Delete Note'>
                </form>
            </div>
          </a>";
}
