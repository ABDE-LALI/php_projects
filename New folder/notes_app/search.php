<div class="new_note">
    <?php
    $note_id = $_POST["search"];
    require "connection_to_db.php";
    $qry = "SELECT * FROM notes_table WHERE id = :id;";
    $req = $connection->prepare($qry);
    $req->bindPARAM(":id", $note_id);
    $req->execute();
    $res = $req->fetch(PDO::FETCH_ASSOC);
    if ($res) {
        echo "<h3>" . htmlspecialchars($res['title']) . "</h3>
                <p>" . htmlspecialchars($res['content']) . "</p>";
    }else
        echo "<h2> No results!!</h2>";
    ?></div>