<?php
session_start(); 

$compteurVisites = isset($_COOKIE['compteur_visites']) ? $_COOKIE['compteur_visites'] : 0;
$compteurVisites++;
setcookie('compteur_visites', $compteurVisites, time() + 3600 * 24 * 30);

$compteurVisiteurs = isset($_SESSION['compteur_visiteurs']) ? $_SESSION['compteur_visiteurs'] : 0;
if (!isset($_SESSION['visiteur'])) {
    $_SESSION['visiteur'] = true;
    $compteurVisiteurs++;
    $_SESSION['compteur_visiteurs'] = $compteurVisiteurs;
}
 
$compteurVisiteursUniques = isset($_SESSION['compteur_visiteurs_uniques']) ? $_SESSION['compteur_visiteurs_uniques'] : 0;
if (!isset($_SESSION['derniere_visite'])) {
    $_SESSION['derniere_visite'] = time();
    $compteurVisiteursUniques++;
    $_SESSION['compteur_visiteurs_uniques'] = $compteurVisiteursUniques;
} elseif (time() - $_SESSION['derniere_visite'] > 30 * 60) { 
    $_SESSION = array(); 
    $compteurVisiteursUniques++;
    $_SESSION['compteur_visiteurs_uniques'] = $compteurVisiteursUniques;
    $_SESSION['derniere_visite'] = time();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de compteurs</title>
</head>
<body>
    <h1>Compteurs</h1>
    <label>Compteur de visites :</label>
    <span><?php echo $compteurVisites; ?></span>
    <br>
    <label>Compteur de visiteurs :</label>
    <span><?php echo $compteurVisiteurs; ?></span>
    <br>
    <label>Compteur de visiteurs uniques :</label>
    <span><?php echo $compteurVisiteursUniques; ?></span>
</body>
</html>
