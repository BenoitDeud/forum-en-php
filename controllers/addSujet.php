<?php

require_once "../includes/connexiondb.php";

    $con = connectdb();

    $req2 = 'SELECT nomSujet FROM sujet';

    $response = $con->query($req2);

    $lignes2 = $response->fetch();

?>