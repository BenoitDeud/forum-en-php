<!DOCTYPE html>
<html lang="fr">


<?php
if (session_status() !== PHP_SESSION_ACTIVE)
  session_start();
require_once "../includes/head2.php";
require_once "../controllers/addOignon.php";
?>
<title>Sujet oignon</title>
</head>

<body>
  <?php
  if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
  require_once "../includes/headerForum.php"
    ?>

  <main>
    <div class="presentationCruditeOignon">
      <img src="../IMAGES/vue-laterale-du-panier-plein-oignons-rouges-fond-bois.jpg" alt="tomate"
        class="img-fluid salade">
      <div class="blablaCrudite">
        <h3 class="titreOignon">L'oignon</h3>
        <p class="texteCrudite">L'oignon ou ognonN 1 (Allium cepa), prononcé /ɔ.ɲɔ̃/, est une espèce de plantes
          herbacées
          bisannuelles largement et depuis longtemps cultivée comme plante potagère pour ses bulbes de saveur
          et
          d'odeur fortes ou pour ses feuilles. Il appartient à la famille des Amaryllidaceae (classification
          APG III
          de 2009) ou Liliacées (classification ancienne). Venez discuter des meilleures variétées pour
          agrémenter votre Kebab.</p>
      </div>
    </div>

    <table id="tableau">
      <thead>
        <tr>
          <th colspan="4">Les sujets concernant l'oignon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="num">#</th>
          <th class="tailleSujet">Sujet</th>
          <th class="tailleDate">Date de création</th>
          <th class="tailleAuteur">Auteur</th>
        </tr>
        <?php
        //boucle foreach pour afficher chaque ligne de la requête
        foreach ($lignes3 as $ligne3) {
          echo
            '<tr>
            <td>' . $ligne3['idSujet'] . '</td>
            <td><a href="../views/commentaire.php" class="sujet1">' . $ligne3['nomSujet'] . '</a></td>
            <td>' . $ligne3['dateSujet'] . '</td>
            <td><div><img src="../IMAGES/imageProfil/'.$ligne3['imageUtilisateur'].'" class="imageCommentaire"></div>' . $ligne3['nomUtilisateur'] . ' ' . $ligne3['prenomUtilisateur'] . '</td>
        </tr>';
        }
        ?>
      </tbody>
    </table>

    <form id="ajouterLigne" action="../controllers/addOignon.php" method="POST">
      <label for="sujet">Titre du sujet : <span id="error"></span></label>
      <?php
            if ($_SESSION['erreur12'] == 1) {
                echo '<p id="erreur12">(Veuillez mettre un sujet si vous le souhaitez, le champ ne peut pas être vide.)</p>';
            } 
            ?>
      <input type="text" name="sujet" id="sujet" placeholder="Votre sujet...">
      <input type="submit" value="Ajouter un sujet" id="ajouterSujet">
    </form>


  </main>
  <!--
  <script src="../JAVASCRIPT/recuperation2.js"></script>
  <script src="../JAVASCRIPT/ligneSujet.js"></script>
-->
</body>

</html>