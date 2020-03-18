<?php
    include '_doctype.php';
?>

  <body>
    <!--                Navbar Mobile / Desktop                     -->
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark ">
      <a class="navbar-brand" href="index.php"><img id="logo" src="./images/rocket.png" alt="logo" height="auto" width="100px"/></a>
      <button class="navbar-toggler nav-mobile" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:black; font-size: 1.5em;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="catalogue.php">Nos Destinations</a>
          <a class="nav-item nav-link" href="about.php">L'Équipage</a>
          <a class="nav-item nav-link" href="contact.php">Contact</a>
        </div>
      </div>
    </nav>
    <div class="banner-large">
        <h1 class="banner-title">Déjeunez sur <span id="changeText">Mars</span></h1>
        <span class="banner-baseline">L'immensité de l'espace à votre portée !</span>
        <div class="overlay"></div>
        <img src="images/home2.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
            <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>

    <main class="container">

        <h2 class="title-home">Bienvenue chez Voyager !</h2>
        <p class="text-home">Voyager vous permet de réaliser votre rêve d'explorer l'espace et les spots les plus mythiques de la galaxie ou d'ailleurs !</p>

        <div class="container">
            <h3>Nos Meilleurs voyages</h3>
            <div class="home-cards">
                <a href="mars.php" class="">
                  <div class="card bg-dark text-white hover-card">
                    <img src="./images/planetes/mars/mars.jpg" class="card-img" alt="Mars">
                    <div class="card-img-overlay">
                      <h5 class="card-title-home">Visiter Mars</h5>
                      <p class="card-text-home">3M€/pers *</p>
                    </div>
                  </div>
                </a>
                <a href="coruscant.php" class="">
                  <div class="card bg-dark text-white hover-card">
                      <img src="./images/planetes/coruscant/Coruscant.jpg" class="card-img" alt="Coruscant">
                      <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Coruscant</h5>
                        <p class="card-text-home">20M€/pers *</p>
                      </div>
                  </div>
                </a>
                <a href="arrakis.php" class="">
                  <div class="card bg-dark text-white hover-card">
                      <img src="./images/planetes/arrakis/arrakis_planete.jpg" class="card-img" alt="Arrakis">
                      <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Arrakis</h5>
                        <p class="card-text-home">25M€/pers *</p>
                      </div>
                  </div>
              </a>
            </div>
        </div>

        <h3>Ils nous font confiance</h3>
        <div class="brands">
            <img src="./images/spacex.png" alt="spacex">
            <img src="./images/nasa.png" alt="nasa">
            <img src="./images/amazon.png" alt="amazon">
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Réservez votre voyage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Prénom et Nom</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-number" class="col-form-label">Nombre de personnes</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Réserver</button>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>

    <?php
    include '_footer.php';
    ?>

