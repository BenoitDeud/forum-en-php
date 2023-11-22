<?php

// début de la session pour mettre les indications en cas de réussite ou d'erreur
session_start();

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récup des variables
    $mail = $_POST["mail"];
    $mot = $_POST["mdps"];
    

        // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
        $mailOnlyOne = $con->prepare('SELECT * FROM utilisateur WHERE adresseMail=?');
        $mailOnlyOne->execute([$mail]);
        $utilisateurMail = $mailOnlyOne->fetch();

        // Le mot de passe associé au mail 
        $password = 'SELECT * FROM utilisateur WHERE adresseMail= "'.$_POST["mail"].'"';
        $pass = $con->query($password);
        $passPass = $pass->fetch();

        if(!$utilisateurMail){
            $_SESSION['err9'] = 1;
            header("Refresh:0; url= ../views/login.php");
        } 

        else if(!password_verify($mot, $passPass["motPasse"])) {
            $_SESSION['err10'] = 1;
            header("Refresh:0; url= ../views/login.php");
        } 

        else {
            $_SESSION['err9'] = 0;
            $_SESSION['err10'] = 0;
            $_SESSION['success2'] = 1;
            header('Location:../views/forum.php');
        }


}
if (isset($_POST['reset'])) {
    $_SESSION['err9'] = 0;
    $_SESSION['err10'] = 0;
    $_SESSION['success2'] = 0;
   
    header("Refresh:0; url= ../views/login.php");
}


?>