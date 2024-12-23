<?php
session_start();

if (isset($_POST['pseudo']) && isset($_POST['motdepasse'])) {
    if ($_POST['pseudo'] == 'Kamal' && $_POST['motdepasse'] == 'password123') {
        $_SESSION['login'] = $_POST['pseudo'];
        header('Location: secret1.php');
        exit();
    }
}
?>

<form action="" method="post">
    Pseudo: <input type="text" name="pseudo"><br>
    Mot de passe: <input type="password" name="motdepasse"><br>
    <input type="submit" value="Connexion">
</form>
