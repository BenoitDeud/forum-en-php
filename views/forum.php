<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once("../includes/head2.php") ?>
  <title>Forum kebab</title>
</head>

<body>
  <header>
    <div class="flexForum">
      <p>Forum</p>
      <a href="../index.php">Accueil</a>
    </div>
    <div>
      <h2>Bienvenue <span id="prenom"> </span>, nous sommes le : <span id="dateToday"></span> et vous vous êtes
        connecté(e)
        à : <span id="heure"></span></h2>
    </div>
  </header>

  <main class="mainForum" id="mainForumm">

    <div class="gestionImage">
      <img src="../IMAGES/brochekebab.png" alt="" class="img-fluid broche">
      <p class="blablaKebab img-fluid">Le terme kebab ou kébab1, emprunté à l'arabe : کباب, kabāb2, signifie « grillade
        », «
        viande grillée » et désigne différents plats à base de viande grillée dans de nombreux pays ayant généralement
        fait partie des mondes ottoman et perse (dont l'Inde du Nord)3,4,5,6.

        Dans son utilisation francophone, comme dans d'autres langues occidentales, le terme utilisé seul désigne
        spécifiquement le sandwich fourré de viande grillée à la broche ou döner kebab popularisé à Berlin, en
        Allemagne, dans les années 1970.

        Par métonymie, « kebab » désigne également le type de restaurant (en) qui le sert. Parmi les équivalents les
        plus courants du terme döner kebab, le vocable chawarma (et ses variantes) est utilisé au Moyen-Orient. Ces
        termes désignent soit la viande et son mode de préparation, soit le sandwich correspondant.</p>
    </div>

    <div class="cartesFlex">
      <div class="card img-fluid">
        <img src="../IMAGES/salade-fraiche-angle-eleve-plaque-noire.jpg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Salade</h5>
          <p class="card-text">La salade est un terme générique désignant en jardinage et horticulture diverses sortes
            de feuilles, c'est-à-dire de plantes potagères dont les feuilles, consommées crues, entrent dans la
            composition d'un mets froid dont elles ont pris le nom, la « salade », sous-entendu « salade verte ». Les
            salades sont des plantes angiospermes. Venez discuter des meilleures variétées pour agrémenter votre Kebab.
          </p><br>
          <div class="boutonFlex">
            <a href="../views/sujetSalade.php" class="btn btn-primary">Salade !</a>
          </div>
        </div>
      </div>

      <div class="card img-fluid">
        <img src="../IMAGES/vue-dessus-tomates-fraiches-mures-gouttes-eau-fond-noir.jpg" class="card-img-top img-fluid"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Tomate</h5>
          <p class="card-text">La tomate (Solanum lycopersicum L.) est une espèce de plantes herbacées du genre Solanum
            de la famille des Solanacées, originaire du Mexique. Le terme désigne aussi son fruit charnu : la tomate se
            consomme comme un légume-fruit, crue ou cuite ; elle est devenue un élément incontournable de la gastronomie
            dans de nombreux pays, particulièrement dans les Amériques. Venez discuter des meilleures variétées pour
            agrémenter votre Kebab.</p><br>
          <div class="boutonFlex">
            <a href="../views/sujetTomate.php" class="btn btn-primary">Tomate !</a>
          </div>
        </div>
      </div>

      <div class="card img-fluid">
        <img src="../IMAGES/vue-laterale-du-panier-plein-oignons-rouges-fond-bois.jpg" class="card-img-top img-fluid"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Oignon</h5>
          <p class="card-text">L'oignon ou ognonN 1 (Allium cepa), prononcé /ɔ.ɲɔ̃/, est une espèce de plantes herbacées
            bisannuelles largement et depuis longtemps cultivée comme plante potagère pour ses bulbes de saveur et
            d'odeur fortes ou pour ses feuilles. Il appartient à la famille des Amaryllidaceae (classification APG III
            de 2009) ou Liliacées (classification ancienne). Venez discuter des meilleures variétées pour
            agrémenter votre Kebab.</p><br>
          <div class="boutonFlex">
            <a href="../views/sujetOignon.php" class="btn btn-primary">Oignon !</a>
          </div>
        </div>
      </div>
    </div>
  </main>

<!--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script> 

  <script src="../JAVASCRIPT/recuperation2.js"></script>
-->
</body>

</html>