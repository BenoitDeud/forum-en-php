
<?php require_once "../includes/head1.php" ?>

<body>
  <header>
    <h1>Un kebab chef !</h1>

  </header>

  <main class="mainIndex">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner kebab">
        <div class="carousel-item active">
          <img src="/IMAGES/burger-grille-ketchup-oignon-frites-genere-par-ia.jpg" class="d-block w-100 kebabImage img-fluid" alt="kebab">
        </div>
        <div class="carousel-item">
          <img src="/IMAGES/doner-viande-dans-pain-planche-bois.jpg" class="d-block w-100 kebabImage img-fluid" alt="kebab2">
        </div>
        <div class="carousel-item">
          <img src="/IMAGES/vue-laterale-doner-pita-frites-concombre-frais-tomate.jpg" class="d-block w-100 kebabImage img-fluid"
            alt="kebab3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="boutons">
      <div>
        <a href="../views/form.php">
          <p class="boutonsK">S'inscrire</p>
        </a>
      </div>
      <div>
        <a href="../views/login.php">
          <p class="boutonsK">Se Connecter</p>
        </a>
      </div>
    </div>

  </main>


 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="JAVASCRIPT/script.js"></script>-->
</body>

</html>