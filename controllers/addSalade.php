<?php

if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();

require_once "../includes/connexiondb.php";

$con = connectdb();

date_default_timezone_set('Europe/Paris');
$req = "SELECT sujet.idSujet,sujet.nomSujet,sujet.dateSujet,sujet.idUtilisateur,utilisateur.nomUtilisateur,utilisateur.prenomUtilisateur,utilisateur.imageUtilisateur
        FROM sujet 
        JOIN utilisateur ON utilisateur.idUtilisateur = sujet.idUtilisateur
        WHERE idCate = 1 order by idSujet";

$res = $con->query($req);

$lignes = $res->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sujet = $_POST['sujet'];
    $dateDate = new DateTime();
    if ($sujet == "") {
        $_SESSION['erreur12'] = 1;
        header("Refresh:0; url= ../views/sujetSalade.php");
    } else {
        $_SESSION['erreur12'] = 0;
        $req = $con->prepare("INSERT INTO sujet (nomSujet,idUtilisateur,idCate,dateSujet) VALUES (?,?,?,?)");
        $req->execute(array($sujet,$_SESSION['idUtilisateur'],1, $dateDate->format('d/m/y à H:i:s')));
        header("Refresh:0; url= ../views/sujetSalade.php");
       
    }
}