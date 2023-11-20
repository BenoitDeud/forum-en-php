<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once("../includes/head2.php") ?>
  <title>Sujet tomate</title>
</head>

<body>
  <header>
    <div class="flexForum">
      <p>Sujet : la tomate</p>
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
    <div class="presentationCruditeTomate">
      <img src="../IMAGES/vue-dessus-tomates-fraiches-mures-gouttes-eau-fond-noir.jpg" alt="tomate"
        class="img-fluid salade">
      <div class="blablaCrudite">
        <h3 class="titreTomate">La Tomate</h3>
        <p class="texteCrudite">La tomate (Solanum lycopersicum L.) est une espèce de plantes herbacées du genre
          Solanum
          de la famille des Solanacées, originaire du Mexique. Le terme désigne aussi son fruit charnu : la
          tomate se
          consomme comme un légume-fruit, crue ou cuite ; elle est devenue un élément incontournable de la
          gastronomie
          dans de nombreux pays, particulièrement dans les Amériques. Venez discuter des meilleures variétées
          pour
          agrémenter votre Kebab.</p>
      </div>
    </div>

    <table id="tableau">
      <thead>
        <tr>
          <th colspan="4">Les sujets concernant la tomate</th>
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
  <script src="../JAVASCRIPT/ligneSujet.js"></script>
  <script src="../JAVASCRIPT/recuperation2.js"></script>
-->
</body>

</html>