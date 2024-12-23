<?php
require "connection_to_db.php";
try {
    $title = $_POST["note_title"];
    $time = date("Y-m-d");
    $content = $_POST["content"];
    if (isset($title, $content) && ($title !== "" && $content !== "")) {
        $qry = "INSERT INTO notes_table(title, creation_time, content) VALUES(:title, :creation_time, :content)";
        $req = $connection->prepare($qry);
        $req->bindParam(':title', $title);
        $req->bindParam(':creation_time', $time);
        $req->bindParam(':content', $content);
        $req->execute();
    }
    $content = NULL;
} catch (PDOexception $e) {
    echo "ERROR: " . $e->getMessage();
} finally {
    header("Location: http://localhost/New%20folder/notes_app/view.php");
    exit ;
}
