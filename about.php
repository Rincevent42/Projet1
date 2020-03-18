<?php
    include '_doctype.php';
?>

<body>
    <!--                Navbar Mobile / Desktop                     -->
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.php"><img id="logo" src="./images/rocket.png" alt="logo" height="auto"
                                                      width="100px" /></a>
        <button class="navbar-toggler nav-mobile" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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

    <!--      Banner + button -        -->
    <div class="banner">
        <span class="banner-title">Notre équipage</span>
        <span class="banner-baseline">La tête dans les étoiles</span>
        <div class="overlay"></div>
        <img src="./images/banner.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
            <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>

    <!--      Contenu       -->
    <main class="container">

        <h2>Découvrez l'immensité de l'espace avec :</h2>
        <div class="about-cards">
            <div class="card equipe">
              <!-- <div class="equipe"></div> -->
                <img src="./images/photo-equip/Amina.jpg" class="card-img-top" alt="photo-amina">
                <div class="card-body">
                    <h5 class="card-title">Amina</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Christophe.jpg" class="card-img-top" alt="photo-christophe">
                <div class="card-body">
                    <h5 class="card-title">Christophe</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Guillaume.jpg" class="card-img-top" alt="photo-guillaume">
                <div class="card-body">
                    <h5 class="card-title">Guillaume</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Lucas.jpg" class="card-img-top" alt="photo-lucas">
                <div class="card-body">
                    <h5 class="card-title">Lucas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Mickael.jpg" class="card-img-top" alt="photo-mickael">
                <div class="card-body">
                    <h5 class="card-title">Mickaël</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card equipe">
                <img src="./images/photo-equip/Raphael.jpg" class="card-img-top" alt="photo-raphael">
                <div class="card-body">
                    <h5 class="card-title">Raphaël</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
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

<?php
include '_footer.php';
?>