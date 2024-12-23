<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

echo "Bienvenu " . $_SESSION['login'] . ", voici les informations confidentielles de la page secret1.";
