<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des annonces</title>
    <link href="assets/style.css" rel="stylesheet" />
</head>
<body>
    <h2>Liste des annonces</h2>
    <a href="?action=create">Nouvelle annonce</a>
    <table>
        <tr>
            <th>Photo</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Superficie (m²)</th>
            <th>Etat</th>
            <th>Prix (dhs)</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td><img src="<?= $annonce->photo ?>" alt="Photo" /></td>
            <td><?= $annonce->titre ?></td>
            <td><?= $annonce->description ?></td>
            <td><?= $annonce->type ?></td>
            <td><?= $annonce->ville ?></td>
            <td><?= $annonce->superficie ?></td>
            <td><?= $annonce->neuf ? 'Neuf' : 'Ancien' ?></td>
            <td><?= $annonce->prix ?></td>
            <td>
                <a href="?action=show&id=<?= $annonce->id ?>">Voir</a>
                <a href="?action=edit&id=<?= $annonce->id ?>">Modifier</a>
                <a href="?action=delete&id=<?= $annonce->id ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
            </td>
        </tr>
    </table>
</body>
</html>
