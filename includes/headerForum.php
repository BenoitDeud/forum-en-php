<header>
    <div class="unTruc">
        <?php
        if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] == 1) {
            echo '<div class="fff"><div class="aaa"><a href="../views/forum.php">Forum</a><a href="../index.php">Accueil</a>
            <a id="deco" href="../controllers/decone.php">Déconnexion</a>
            </div><p>Vous vous êtes connecté le '.$_SESSION['dateNow']->format('d/m/y à H:i:s').'</p></div>';
            echo '<div class="utilisateurDate"><p class="utilisateur">'.$_SESSION['nom'].' '.$_SESSION['prenom'].'
            <img class="imageProfil" src="../IMAGES/imageProfil/'.$_SESSION['image'].'" "alt="Image"></p>
            
            </div>';
        } else {
            header("Refresh:0; url= ../views/login.php");
        }
        ?>
    </div>
</header>