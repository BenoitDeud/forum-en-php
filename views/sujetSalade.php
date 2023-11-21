<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once("../includes/head2.php") ?>
  <title>Sujet Salade</title>
</head>

<body>
  <header>
    <div class="flexForum">
      <p>Sujet : la salade</p>
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
    <div class="presentationCrudite">
      <img src="../IMAGES/salade-fraiche-angle-eleve-plaque-noire.jpg" alt="salade" class="img-fluid salade">
      <div class="blablaCrudite">
        <h3>La Salade</h3>
        <p class="texteCrudite">La salade est un terme générique désignant en jardinage et horticulture diverses sortes
          de feuilles, c'est-à-dire de plantes potagères dont les feuilles, consommées crues, entrent dans la
          composition d'un mets froid dont elles ont pris le nom, la « salade », sous-entendu « salade verte ». Les
          salades sont des plantes angiospermes. Venez discuter des meilleures variétées pour agrémenter votre Kebab.
        </p>
      </div>
    </div>

    <table id="tableau">
      <thead>
        <tr>
          <th colspan="4">Les sujets concernant la salade</th>
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