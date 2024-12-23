<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>nouvell annonce</legend>
            <label for="photo">Photo:</label>
            <input type="file" name="photo"><br>
            <label for="titre">Titre:</label>
            <input type="text" name="titre"><br>
            <label for="desc">Description:</label>
            <input type="text" name="desc"><br>
            <label for="type">Type:</label>
            <select name="type">
                <option value="appartement">Appartement</option>
                <option value="maison">Maison</option>
                <option value="villa">Villa</option>
                <option value="magasin">Magasin</option>
                <option value="terrain">Terrain</option>
            </select><br>
            <label for="ville">Ville:</label>
            <input type="text" name="ville"><br>
            <label for="sup">Superficier (m2):</label>
            <input type="text" name="sup"><br>
            <label for="etat">Etat:</label>
            <input type="radio" name="etat" value="ocasion">
            <label for="ocasion">Ocasion:</label>
            <input type="radio" name="etat" value="neuf">
            <label for="neuf">Neuf:</label><br>
            <label for="prix">Prix:</label>
            <input type="number" name="prix">
            <input type="submit" value="Ajouter">
        </fieldset>
    </form>
    <?php
    require "connction_to_db.php";
    $photo = $_FILES["photo"]["photo"];
    echo var_dump($photo);
    $titre = $_POST["titre"];   
    $descr = $_POST["desc"];
    $type = $_POST["type"];
    $ville = $_POST["ville"];
    $sup_m2 = $_POST["sup"];
    $etat = $_POST["etat"];
    $prix = $_POST["prix"];
    echo "hello";
    $qry = "INSERT IN TO les_anno (photo, titre, descr, ty, ville, sup_m2, etat, prix) VALUES ($photo, $titre, $descr, $type, $ville, $sup_m2, $etat, $prix)";
    $req = $connection->prepare($qry);
    $req->execute();
    ?>
</body>

</html>