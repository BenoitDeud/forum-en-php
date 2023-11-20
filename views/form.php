<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once("../includes/head2.php") ?>
    <title>Formulaire kebab</title>
</head>

<body>
    <header>
        <div class="flexForum2">
            <p>Inscription</p><br>
            <a href="../index.php">Accueil</a>
        </div>
    </header>


    <form action="../HTML/login.php" id="jeVaisToutCasser" method="get">

        <div class="form">
            <label for="nom">Votre nom (3 caractères minimum, pas de chiffre) : <span id="error"></span></label>
            <input type="text" name="nom" placeholder="Martin" id="nom">
        </div>

        <div class="form">
            <label for="prenom">Votre prénom (3 caractères minimum, pas de chiffre) :<span
                    id="errorDeux"></span></label>
            <input type="text" name="prenom" placeholder="Matin" id="prenom">
        </div>

        <div class="form">
            <label for="mail">Votre adresse mail :<span id="errorTrois"></span></label>
            <input type="text" name="mail" id="mail" placeholder="bbbbbbbb@bbbbbbb.bb">
        </div>

        <div class="form">
            <label for="mdps">Votre mot de passe (doit contenir 8 caractères, une maj, une min, un chiffre et un
                caractère spécial
                (#+-^[])) :<span id="errorQuatre"></span></label>
            <input type="text" name="mdps" id="mdps" placeholder="**************">
        </div>

        <div class="form">
            <label for="cMdps">Confirmez votre mot de passe :<span id="errorCinq"></span></label>
            <input type="text" name="cMdps" id="cMdps" placeholder="**************">
        </div>

        <input type="submit" value="S'enregistrer" id="submit">

    </form>

    <!--
    <script src="../JAVASCRIPT/script.js"></script> -->

</body>

</html>