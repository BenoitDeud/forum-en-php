<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once "../includes/head2.php" ?>
    <?php require_once "../controllers/addControllerForm.php" ?>
    <title>Formulaire kebab</title>
</head>

<body>
    <header>
        <div class="flexForum2">
            <p>Inscription</p><br>
            <?php
            if ($_SESSION['success'] == 1) {
                echo '<p id="success">Kebab !</p>';
            }
            ?>
            <a href="../index.php">Accueil</a>
            <a href="../views/login.php">Login</a>

        </div>
    </header>


    <form action="../controllers/addControllerForm.php" id="jeVaisToutCasser" method="POST">

        <div class="form">
            <label for="nom">Votre nom (3 caractères minimum, pas de chiffre) : <span id="error"></span></label>
            <?php
            if ($_SESSION['erreur1'] == 1) {
                echo '<p id="erreur">Nom incorrect ou trop court (3 caractères minimum et sans chiffres) !</p>';
            } 
            ?>
            <input type="text" name="nom" placeholder="Martin" id="nom">
        </div>

        <div class="form">
            <label for="prenom">Votre prénom (3 caractères minimum, pas de chiffre) :<span
                    id="errorDeux"></span></label>
            <?php
            if ($_SESSION['erreur2'] == 1) {
                echo '<p id="erreur">Prénom incorrect ou trop court (3 caractères minimum et sans chiffres) !</p>';
            } 
            ?>
            <input type="text" name="prenom" placeholder="Matin" id="prenom">
        </div>

        <div class="form">
            <label for="mail">Votre adresse mail :<span id="errorTrois"></span></label>
            <?php
            if ($_SESSION['erreur3'] == 1) {
                echo '<p id="erreur">Pas une email</p>';
            }
            if ($_SESSION['erreur4'] == 1) {
                echo '<p id="erreur">Le mail est déjà dans notre base de données, il en faut une autre</p>';
            } 
            ?>
            <input type="text" name="mail" id="mail" placeholder="bbbbbbbb@bbbbbbb.bb">
        </div>

        <div class="form">
            <label for="mdps">Votre mot de passe (doit contenir 8 caractères, une maj, une min, un chiffre et un
                caractère spécial
                (#+-^[])) :<span id="errorQuatre"></span></label>
            <?php
            if ($_SESSION['erreur5'] == 1) {
                echo '<p id="erreur">tu peux le faire !, ne pas oublier : (#+-^[])</p>';
            }
            ?>
            <input type="text" name="mdps" id="mdps" placeholder="**************">
        </div>

        <div class="form">
            <label for="cMdps">Confirmez votre mot de passe :<span id="errorCinq"></span></label>
            <?php
            if ($_SESSION['erreur6'] == 1) {
                echo '<p id="erreur">Le mot de passe est différent !!!</p>';
            }
            ?>
            <input type="text" name="cMdps" id="cMdps" placeholder="**************">
        </div>

        <input type="submit" value="S'enregistrer" id="submit"><br>
        <input id="submit" class="input-style" type="submit" name="reset" value="Reset" />

    </form>
    <!--
    <script src="../JAVASCRIPT/script.js"></script>
-->
</body>

</html>