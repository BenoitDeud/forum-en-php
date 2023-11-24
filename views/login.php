<!DOCTYPE html>
<html lang="fr">

<head>
    <?php 
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    require_once "../includes/head2.php";
    require_once "../controllers/addControllerLogin.php";
    ?>

    <title>Connexion kebab</title>
</head>

<body>
    <header>
        <div class="flexForum2">
            <p>Connexion</p>
            <?php
            if ($_SESSION['success2'] == 1) {
                echo '<p id="success">Kebab !</p>';
            }
            ?>
            <a href="../index.php">Accueil</a>
        </div>
    </header>

    <form action="../controllers/addControllerLogin.php" method="POST" id="formulaireConnexion">
        <div class="form colorSize">
            <label for="mail">Votre identifiant (mail) :<span id="trois"></span></label>
            <?php
            if ($_SESSION['err9'] == 1) {
                echo '<p id="erreur">le mail n\'est pas reconnu !</p>';
            }
            ?>
            <input type="text" name="mail" id="mail" placeholder="aaaaaaaaa@aaaaaaaa.aa">
        </div>

        <div class="form colorSize">
            <label for="mdps">Votre mot de passe :<span id="quatre"></span></label>
            <?php
            if ($_SESSION['err10'] == 1) {
                echo '<p id="erreur">le mot de passe n\'est pas bon !</p>';
            }
            ?>
            <input type="text" name="mdps" id="mdps" placeholder="**************">
        </div>

        <input type="submit" value="Connexion" id="connexion"><br>
        <input id="submit" class="input-style" type="submit" name="reset" value="Restart" />
    </form>

    <!--
    <script src="../JAVASCRIPT/recuperation.js"></script> -->

</body>

</html>