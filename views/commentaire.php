<!DOCTYPE html>
<html lang="fr">

<head>

<?php

  if (session_status() !== PHP_SESSION_ACTIVE) session_start();
  require_once "../includes/head2.php" ;
  require_once "../includes/headerForum.php";
  require_once "../controllers/addComm.php";
  
   ?>
  <title>Espace commentaire</title>

</head>

<body>
  

  <div>
    <h4 class="sujetCommentaire">Vous êtes sur le sujet : 
      
    <span id="sujet"></span></h4>
    <?php
     
     
    
    ?>
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
        <th class="hour">Date/Heure</th>
        <th class="noComment">Commentaire</th>
      </tr>

      <tr>
        <td>Admin</td>
        <?php echo '<th class="hour">'.$_SESSION['dateNow']->format('d/m/y à H:i:s').'</th>'?>
        <td>De toute façon, le kebab est meilleur sans crudités et avec au moins 2 sauces.</td>
      </tr>

      <?php   
        foreach ($lignes5 as $ligne5) {
          echo
            '<tr>
            <td><div><img src="../IMAGES/imageProfil/'.$ligne5['imageUtilisateur'].'" class="imageCommentaire"></div>' . $ligne5['nomUtilisateur'] . ' ' . $ligne5['prenomUtilisateur'] . '</td>
            <td>' . $ligne5['dateMessage'] . '</td>
            <td><a href="../views/commentaire.php">' . $ligne5['message'] . '</a></td> 
        </tr>';
        }
        ?>

    </tbody>
  </table>

  <form id="ajouterLigneCommentaire" action="../controllers/addComm.php" method="POST">
    <label for="commentaire">Votre commentaire : <span id="error"></span></label>
    <textarea name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Votre commentaire..."></textarea>
    <input type="submit" value="Ajouter un commentaire" id="ajouterCommentaire">
  </form>



<!--
  <script src="../JAVASCRIPT/commentaire.js"></script> -->

</body>

</html>