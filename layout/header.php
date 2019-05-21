<?php
require_once "model/database.php";

$destinations = getAllRows('destination');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AZTREK-3</title>
  <link rel="shortcut icon" href="./imagescss/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/stellarnav.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="<?= $bodyClass ?>">

  <header class="page-header">

    <div class="page-header-inner container">

      <div class="header-logo">

        <div class="logo">
          <a href="index.php" title="Accueil"><img src="./imagescss/logo-vecto.png" alt="Logo"></a>
        </div>
        <h1 class="site-title hidden-text">AZTREK-3</h1>
      </div><!-- .header-logo -->

      <div class="phone-box">
        <p> <a href=""><i class="fas fa-phone-volume"></i></a> 02 38 38 38 38</p>
      </div>

      <div class="header-nav ml-auto">

        <nav class="main-nav stellarnav">
          <ul class="">
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="archive.php">NOS DESTINATIONS</a>
              <ul>
                  <?php foreach ($destinations as $destination) : ?>
                      <li>
                          <a href="destination.php?id=<?= $destination["id"]; ?>">
                              <?= $destination["label"]; ?>
                          </a>
                      </li>
                  <?php endforeach; ?>
              </ul>
            </li>


            <li><a href="#">MON COMPTE</a>
              <ul>
                <li><a href="">Gérer vos devis</a></li>
                <li><a href="">Gérer vos voyages</a></li>
                <li><a href="">Préparer vos voyages</a></li>
                <li><a href="">Vos données personnelles</a></li>
                <li><a href="">Moyens de paiement</a></li>
              </ul>
            </li>

            <li> <a href="contact.php">CONTACT</a>
              <ul>
                <li><a href="contact.php">Contact-form</a></li>
                <li><a href="">Adresse Postale</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Téléphone</a></li>
              </ul>

            </li>


            <li><a href="#">SOUVENIRS</a>
              <ul>
                <li><a href="">Petit budget</a></li>
                <li><a href="">Amoureux</a></li>
                <li><a href="">Esprit de famille</a></li>
                <li><a href="">Original</a></li>
              </ul>
            </li>

          </ul>
        </nav>


        <form class="search-form" action="#" method="get">

          <select name="dest" id="dest">
            <option value="dest-0">Départ de:</option>
            <option value="dest-1">Paris</option>
            <option value="dest-1">Mexique</option>
            <option value="dest-2">Guatemala</option>
            <option value="dest-3">Salvador</option>
            <option value="dest-4">Honduras</option>
            <option value="dest-5">Costa-Rica</option>
          </select>

          <input type="date" name="depart" value="">

          <select name="dest" id="depart">
            <option value="depart-1">Pays d'arrivée</option>
               
            <option value="depart-4">Mexique</option>
            <option value="depart-4">Guatemala</option>
            <option value="depart-5">Salvador</option>
            <option value="depart-6">Honduras</option>
            <option value="depart-7">Costa-Rica</option>
          </select>

          <button type="submit" name="submit-btn"><i class="fas fa-search"></i><span class="sr-only">Valider</span>
          </button>

        </form>

      </div><!-- .header-nav -->

    </div><!-- .page-header-inner -->

  </header><!-- .page-header -->