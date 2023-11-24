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
        WHERE idCate = 3 order by idSujet";

$res = $con->query($req);

$lignes3 = $res->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sujet = $_POST['sujet'];
    $dateDate = new DateTime();
    if ($sujet == "") {

        header("Refresh:0; url= ../views/sujetSalade.php");
    } else {
        $req = $con->prepare("INSERT INTO sujet (nomSujet,idUtilisateur,idCate,dateSujet) VALUES (?,?,?,?)");
        $req->execute(array($sujet,$_SESSION['idUtilisateur'],3, $dateDate->format('d/m/y à H:i:s')));
        header("Refresh:0; url= ../views/sujetOignon.php");
    }
}