<!DOCTYPE html>
<html lang="fr">

<head>

  <?php
  if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
  require_once "../includes/head2.php";
  require_once "../controllers/addTomate.php";
  ?>
  <title>Sujet tomate</title>

</head>

<body>
  <?php
  require_once "../includes/headerForum.php"
    ?>

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
          <th colspan="5">Les sujets concernant la tomate</th>
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
        foreach ($lignes2 as $ligne2) {
          echo
            '<tr>
            <td>' . $ligne2['idSujet'] . '</td>
            <td><a href="../views/commentaire.php" class="sujet1">' . $ligne2['nomSujet'] . '</a></td>
            <td>' . $ligne2['dateSujet'] . '</td>
            <td><div><img src="../IMAGES/imageProfil/'.$ligne2['imageUtilisateur'].'" class="imageCommentaire"></div>' . $ligne2['nomUtilisateur'] . ' ' . $ligne2['prenomUtilisateur'] . '</td>
            
        </tr>';
        }
        ?>
      </tbody>
    </table>

    <form id="ajouterLigne" action="../controllers/addTomate.php" method="POST">
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