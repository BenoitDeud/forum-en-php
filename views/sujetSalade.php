<!DOCTYPE html>
<html lang="fr">

<head>

  <?php
  if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
  require_once "../includes/head2.php";
  require_once "../controllers/addSalade.php";
  ?>
  <title>Sujet Salade</title>

</head>

<body>

  <?php
  require_once "../includes/headerForum.php"
    ?>

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
        <?php
        //boucle foreach pour afficher chaque ligne de la requête
        foreach ($lignes as $ligne) {
          echo
            '<tr>
            <td>' . $ligne['idSujet'] . '</td>
            <td><a href="../views/commentaire.php" class="sujet1">' . $ligne['nomSujet'] . '</a></td>
            <td>' . $ligne['dateSujet'] . '</td>
            <td><div><img src="../IMAGES/imageProfil/'.$ligne['imageUtilisateur'].'" class="imageCommentaire"></div>' . $ligne['nomUtilisateur'] . ' ' . $ligne['prenomUtilisateur'] . '</td>
        </tr>';
        }
        ?>
      </tbody>
    </table>

    <form id="ajouterLigne" action="../controllers/addSalade.php" method="POST">
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
  <script src="../JAVASCRIPT/ligneSujet.js"></script>
  <script src="../JAVASCRIPT/recuperation2.js"></script>
-->

</body>

</html>