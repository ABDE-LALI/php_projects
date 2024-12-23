<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
    <?php require "view_style.php" ?>
</head>

<body>
    <div class="heading">
        <h1>MyNotes</h1>
        <form action="view.php" method="post">
            <input type="text" name="search" placeholder="Search">
            <input type="submit" value="Search">
        </form>
        <a href="view.php" style="color: white;"><img src="icons8-add-50.png" alt="not found"></a>
    </div>
    <div class="main1">
        <div class="nav"></div>
        <div class="main">
            <h2>Welcome To My Notes</h2>
            <?php
            if (isset($_GET["id"]))
                require "note.php";
            elseif (!isset($_GET["search"]) && !isset($_POST["search"]))
                require "new_note.php";
            if(isset($_POST["search"]))
                require "search.php";

            ?>
            <h2>your notes</h2>
            <div class="your_notes">
                <?php
                require "last_notes.php";
                ?>
            </div>
        </div>
        <div class="aside"></div>
    </div>
</body>

</html>