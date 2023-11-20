<?php require_once "../includes/connexiondb.php";

$con = connectdb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $regexMail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $mot = $_POST["mdps"];
    password_hash($mot, PASSWORD_DEFAULT);
    $regexPassword = '/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#+-^[]])$/';

    if (preg_match($regex, $mail)) {
        echo $email . " OUI.";
        } else { 
        echo $email . " NON.";
        } 
    
    $req = $con->prepare('INSERT INTO utilisateur (nomUtilisateur,prenomUtilisateur,adresseMail,motPasse) VALUES (?,?,?,?)');

    $req->execute(array($nom, $prenom, $mail, $mot));

    header('Location:../views/login.php');
    exit;

}
?>