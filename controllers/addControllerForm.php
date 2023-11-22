<?php

// début de la session pour mettre les indications en cas de réussite ou d'erreur
session_start();

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();

// On utilise cette méthode pour prévenir des attaques
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
    $regexMail = '/^[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z_+])*@(([0-9a-zA-Z][-\w]*\.)+[a-zA-Z]{2,9})$/'; // j'utilise pas au final

    // regex mot de passe 
    $regexPass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#\^\+\-\[\]])(?=.{8,})/';

    // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
    $mailOnlyOne = $con->prepare('SELECT * FROM utilisateur WHERE adresseMail=?');
    $mailOnlyOne->execute([$mail]);
    $utilisateurMail = $mailOnlyOne->fetch();

    // hachage mot de passe
    $steak = password_hash($mot, PASSWORD_BCRYPT);

    // enregistrement du chemin de l'image dans la BDD
    $dossierImage = '../IMAGES/imageProfil/';
    $fichier = basename($_FILES['imageUser']['name']);
    $taille_maxi = 100000;
    $taille = filesize($_FILES['imageUser']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['imageUser']['name'], '.');
    //Début des vérifications de sécurité...
    if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if ($taille > $taille_maxi) {
        $erreur = 'Le fichier est trop gros...';
    }
    if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
        //On formate le nom du fichier ici...
        $fichier = strtr(
            $fichier,
            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'
        );
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
        if (move_uploaded_file($_FILES['imageUser']['tmp_name'], $dossierImage . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            $_SESSION['erreur7'] = 1;
            header("Refresh:0; url= ../views/form.php");
        } else 
        {
            $_SESSION['erreur8'] = 1;
            header("Refresh:0; url= ../views/form.php");
        }
    } else {
        echo $erreur;
    }


    // les différentes vérifications pour le formulaire
    if (!preg_match($regexNomPre, $nom) || $nom == "") {
        $_SESSION['erreur1'] = 1;
        header("Refresh:0; url= ../views/form.php");

    } else if (!preg_match($regexNomPre, $prenom) || $prenom == "") {
        $_SESSION['erreur2'] = 1;
        header("Refresh:0; url= ../views/form.php");

        // filter var pour vérifier si il s'agit d'une email sans utiliser les expression régu
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) || $mail == "") {
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
        $req = $con->prepare("INSERT INTO utilisateur (nomUtilisateur,prenomUtilisateur,adresseMail,motPasse,imageUtilisateur) VALUES (?,?,?,?,?)");
        $req->execute(array($nom, $prenom, $mail, $steak, $fichier));
        $_SESSION['erreur1'] = 0;
        $_SESSION['erreur2'] = 0;
        $_SESSION['erreur3'] = 0;
        $_SESSION['erreur4'] = 0;
        $_SESSION['erreur5'] = 0;
        $_SESSION['erreur6'] = 0;
        $_SESSION['erreur7'] = 0;
        $_SESSION['erreur8'] = 0;
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
    $_SESSION['erreur7'] = 0;
    $_SESSION['erreur8'] = 0;
    $_SESSION['success'] = 0;
    header("Refresh:0; url= ../views/form.php");
}
?>