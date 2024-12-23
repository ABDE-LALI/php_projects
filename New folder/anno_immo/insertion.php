<?php
require "connction_to_db.php";
if (isset($_FILES["photo"], $_POST["titre"], $_POST["descr"], $_POST["type"], $_POST["ville"], $_POST["sup"], $_POST["etat"], $_POST["prix"])) {
    $photo = $_FILES["photo"];
    $titre = $_POST["titre"];
    $descr = $_POST["descr"];
    $type = $_POST["type"];
    $ville = $_POST["ville"];
    $sup_m2 = $_POST["sup"];
    $etat = $_POST["etat"];
    $prix = $_POST["prix"];
    echo "hello";
}
$qry = "INSERT IN TO les_anno (photo, titre, descr, ty, ville, sup_m2, etat, prix) VALUES ($photo, $titre, $descr, $type, $ville, $sup_m2, $etat, $prix)";
$connection->beginTransaction();
$connection->exec($qry);
// $request = $connection->prepare($qry);
// $request->execute();
