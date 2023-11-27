<?php

if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();

require_once "../includes/connexiondb.php";

$con = connectdb();

date_default_timezone_set('Europe/Paris');
/*
$req = "SELECT * FROM sujet 
        INNER JOIN utilisateur ON sujet.idUtilisateur = utilisateur.idUtilisateur
        INNER JOIN categorie ON sujet.idCate = categorie.idCate";*/
$req = "SELECT sujet.idSujet,sujet.nomSujet,sujet.dateSujet,sujet.idUtilisateur,utilisateur.nomUtilisateur,utilisateur.prenomUtilisateur,utilisateur.imageUtilisateur
        FROM sujet 
        JOIN utilisateur ON utilisateur.idUtilisateur = sujet.idUtilisateur
        WHERE idCate = 2 order by dateSujet";

$res = $con->query($req);

$lignes2 = $res->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sujet = $_POST['sujet'];
    $dateDate = new DateTime();
    if ($sujet == "") {
        $_SESSION['erreur12'] = 1;
        header("Refresh:0; url= ../views/sujetTomate.php");
    } else {
        $_SESSION['erreur12'] = 0;
        $req = $con->prepare("INSERT INTO sujet (nomSujet,idUtilisateur,idCate,dateSujet) VALUES (?,?,?,?)");
        $req->execute(array($sujet,$_SESSION['idUtilisateur'],2, $dateDate->format('d/m/y à H:i:s')));
        header("Refresh:0; url= ../views/sujetTomate.php");
        
    }
}