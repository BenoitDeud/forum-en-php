<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once("../includes/head2.php") ?>
  <title>Sujet oignon</title>
</head>

<body>
  <header>
    <div class="flexForum">
      <p>Sujet : l'oignon</p>
      <a href="../index.php">Accueil</a>

    </div>
    <div>
      <h2>Bienvenue <span id="prenom"> </span>, nous sommes le : <span id="dateToday"></span> et vous vous êtes
        connecté(e)
        à : <span id="heure"></span></h2>
    </div>
    <a href="../views/forum.php" class="forumBouge">Forum</a>
  </header>

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
      </tbody>
    </table>

    <form id="ajouterLigne">
      <label for="sujet">Titre du sujet : <span id="error"></span></label>
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