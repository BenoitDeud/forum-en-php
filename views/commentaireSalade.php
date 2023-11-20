<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once "../includes/head2.php" ?>
  <title>Espace commentaire</title>
</head>

<body>
  <header>
    <div class="flexForum">
      <p>Espace commentaire</p>
      <a href="../index.php">Accueil</a>
    </div>
    <div>
      <h2>Bienvenue <span id="prenom"> </span>, nous sommes le : <span id="dateToday"></span> et vous vous êtes
        connecté(e)
        à : <span id="heure"></span> </h2>
    </div>
    <a href="../HTML/forum.php" class="forumBouge">Forum</a>
  </header>

  <div>
    <h4 class="sujetCommentaire">Vous êtes sur le sujet : <span id="sujet"></span></h4>
    <p class="courtois">Veuillez rester courtois quand vous intéragissez avec les autres utilisateurs.</p>
  </div>

  <table id="tableauCommentaire">
    <thead>
      <tr>
        <th colspan="3">Espace commentaire</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="uti">Utilisateur</th>
        <th class="hour">Heure</th>
        <th class="noComment">Commentaire</th>
      </tr>
      <tr>
        <td>Admin</td>
        <td><span id="heure2"></span></td>
        <td>De toute façon, le kebab est meilleur sans crudités et avec au moins 2 sauces.</td>
      </tr>
    </tbody>
  </table>

  <form id="ajouterLigneCommentaire">
    <label for="commentaire">Votre commentaire : <span id="error"></span></label>
    <textarea name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Votre commentaire..."></textarea>
    <input type="submit" value="Ajouter un commentaire" id="ajouterCommentaire">
  </form>



<!--
  <script src="../JAVASCRIPT/commentaire.js"></script> -->

</body>

</html>