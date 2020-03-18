<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel='stylesheet' href='https://unpkg.com/bulma@0.7.5/css/bulma.min.css'>

        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="favicon.ico">
        <title>Foire aux Questions</title>
    </head>

    <?php
    include '_navbar.php';
    $arrayQuestions = [
        'Quelles sont les meilleures périodes pour partir ?' => ["Nous vous proposons un large panel de destination de planètes qui vous ravira tout au long de l'année. Evitez cependant les périodes de pluies de météorite..."],
        'Quels documents sont nécessaires pour partir ?' => ['Pour voyager à bord de l\'une de nos navettes spatiales, il faudra vous munir d\'un passeport intergalactique à jour, avec une durée de validité supérieur à 2 années lumière, ainsi qu\'un SpaceVisa, à demander auprès du ministère des territoires de l\'Espace.'],
        'Les animaux de compagnie sont-ils admis ?' => ['Nos amis les animaux sont les bienvenus à bord de nos navettes.'],
        'Vos hôtels proposent-ils des activités de loisirs ?' => ['Rendez-vous sur notre catalogue pour découvrir toutes les activités proposées.'],
        'Quels types de chambre proposez-vous ?' => ['Nous vous proposons de séjourner en chambre standard, superieur et deluxe. Les suites deluxe vous garantissent une vue océan sur Ganymède ou Titan, selon la planète visitée.']
    ];
    ?>

      <!--      FAQ        -->
  <section class="hero is-primary has-background-pink">
    <div class="hero-body">
      <div class="columns">
        <div class="column is-12">
          <div class="container content">
            <i class="fas fa-question-circle fa-7x"></i>
            <h1 class="title">Foire aux Questions</h1>
            <h3 class="subtitle faq-sub">
              Tout ce que vous devez savoir avant de partir vers les étoiles !
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
    foreach ($arrayQuestions as $key => $value){

    echo '<section class="section">
        <div class="container">
            <div class="content is-medium">
                <div class="box">
                    <div class="box-header">
                        <h3>'.$key.'</h3>
                        <div class="toggle-icon-container">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="box-body collapsed">
                        '.$value[0].'
                    </div>
                </div>
            </div>
        </div>
    </section>';
    }?>

    <script src="faq.js"></script>

<?php
include '_footer.php';
?>