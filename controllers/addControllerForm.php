<?php

// début de la session pour mettre les indications en cas de réussite ou d'erreur
session_start();

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // récupération des variables
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mot = $_POST["mdps"];
    $cMot = $_POST["cMdps"];

    // regex du nom et prénom
    $regexNomPre = '/^([a-zA-Zéèîïô]){3,}$/i';

    // regex de l'adresse mail
    $regexMail = '/^[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_+])*@(([0-9a-zA-Z][-\w]*\.)+[a-zA-Z]{2,9})$/';

    // regex mot de passe 
    $regexPass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#\^\+\-\[\]])(?=.{8,})/';

    // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
    $mailOnlyOne = $con->prepare('SELECT * FROM utilisateur WHERE adresseMail=?');
    $mailOnlyOne->execute([$mail]);
    $utilisateurMail = $mailOnlyOne->fetch();

    // hachage mot de passe
    $steak = password_hash($mot, PASSWORD_DEFAULT);

    if (!preg_match($regexNomPre, $nom) || $nom == "") {
        $_SESSION['erreur1'] = 1;
        header("Refresh:0; url= ../views/form.php");

    } else if (!preg_match($regexNomPre, $prenom) || $prenom == "") {
        $_SESSION['erreur2'] = 1;
        header("Refresh:0; url= ../views/form.php");

    // filter var pour vérifier si il s'agit d'une email sans utiliser les expression régu
    } else if (!filter_var($mail,FILTER_VALIDATE_EMAIL) || $mail == "") {
        $_SESSION['erreur3'] = 1;
        header("Refresh:0; url= ../views/form.php");

    } else if ($utilisateurMail) {
        $_SESSION['erreur4'] = 1;
        header("Refresh:0; url= ../views/form.php");

    } else if (!preg_match($regexPass, $mot) || $mot == "") {
        $_SESSION['erreur5'] = 1;
        header("Refresh:0; url= ../views/form.php");

    } else if ($mot != $cMot) {
        $_SESSION['erreur6'] = 1;
        header("Refresh:0; url= ../views/form.php");

    } else {
        $req = $con->prepare("INSERT INTO utilisateur (nomUtilisateur,prenomUtilisateur,adresseMail,motPasse) VALUES (?,?,?,?)");
        $req->execute(array($nom, $prenom, $mail, $steak, ));
        $_SESSION['erreur1'] = 0;
        $_SESSION['erreur2'] = 0;
        $_SESSION['erreur3'] = 0;
        $_SESSION['erreur4'] = 0;
        $_SESSION['erreur5'] = 0;
        $_SESSION['erreur6'] = 0;
        $_SESSION['success'] = 1;
        header('Location:../views/form.php');
        exit;
    }
}
if (isset($_POST['reset'])) {
	$_SESSION['erreur1'] = 0;
	$_SESSION['erreur2'] = 0;
	$_SESSION['erreur3'] = 0;
	$_SESSION['erreur4'] = 0;
	$_SESSION['erreur5'] = 0;
	$_SESSION['erreur6'] = 0;
	$_SESSION['success'] = 0;
	header("Refresh:0; url= ../views/form.php");
}
?>