<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>List des annonces</h3>
    <a href="http://localhost/New%20folder/anno_immo/nouvell_ann.php">Nouvell annonce</a>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Superficier</th>
            <th>Etat</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
        <?php
        require "connction_to_db.php";
        
        ?>
</body>
</html>