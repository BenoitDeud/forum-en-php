<?php

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

require_once "../includes/connexiondb.php";

    $con = connectdb();

date_default_timezone_set('Europe/Paris');

$req1 = "SELECT * FROM sujet
        WHERE idSujet"





?>