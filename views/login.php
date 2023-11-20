<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once("../includes/head2.php") ?>
    <title>Connexion kebab</title>
</head>

<body>
    <header>
        <div class="flexForum2">
            <p>Connexion</p>
            <a href="../index.php">Accueil</a>
        </div>
    </header>

    <form action="../views/forum.php" method="get" id="formulaireConnexion">
        <div class="form colorSize">
            <label for="mai">Votre identifiant (mail) :<span id="trois"></span></label>
            <input type="text" name="mai" id="mai" placeholder="aaaaaaaaa@aaaaaaaa.aa">
        </div>

        <div class="form colorSize">
            <label for="motDP">Votre mot de passe :<span id="quatre"></span></label>
            <input type="text" name="motDP" id="motDP" placeholder="**************">
        </div>

        <input type="submit" value="Connexion" id="connexion">
    </form>

    <!--
    <script src="../JAVASCRIPT/recuperation.js"></script> -->

</body>

</html>