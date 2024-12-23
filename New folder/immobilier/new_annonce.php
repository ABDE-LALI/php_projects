<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle annonce</title>
</head>
<body>
    <fieldset>
        <legend>Nouvelle annonce</legend>
        <form action="?action=ajouter" method="post">
            Photo <br>
            <input type="text" name="photo"><br>
            Titre <br>
            <input type="text" name="titre"><br>
            Description <br>
            <textarea name="description"></textarea><br>
            Type <br>
            <input type="text" name="type"><br>
            Ville <br>
            <input type="text" name="ville"><br>
            Superficie (m²) <br>
            <input type="number" name="superficie"><br>
            Etat <br>
            <input type="checkbox" name="neuf"><br>
            Prix (dhs) <br>
            <input type="number" name="prix" step="0.01"><br>
            <input type="submit" value="Enregistrer">
        </form>
    </fieldset>
</body>
</html>
