<?php

// On vérifie la connexion à la session et si elle n'est pas activé, elle s'activera
if (session_status() == PHP_SESSION_NONE)
    session_start();

// on se lie à la BDD
require_once "../includes/connexiondb.php";

// connexion BDD
$con = connectdb();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = $_POST["mail"];
    $mot = $_POST["mdps"];

    // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
    $mailOnlyOne = $con->prepare('SELECT * FROM utilisateur WHERE adresseMail=?');
    $mailOnlyOne->execute([$mail]);
    $utilisateurMail = $mailOnlyOne->fetch();
}


?>