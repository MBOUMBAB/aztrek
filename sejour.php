<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"];

$sejour = getOneSejour($id);
$departs= getAllDepartBySejour($id);

getHeader($sejour["titre"]);
?>

<main>
        <section class="news-section container">

                <a href="sejour.php">
                    <h2><?= $sejour["destination"]; ?></h2>
                </a>


                <div class="news-section-inner container">
            
                  <article class="news-article">
                    <a href="detsejour.php">
                      <figure><img src="uploads/sejours/<?= $sejour["photo"]; ?>" alt="<?= $sejour["label"]; ?>"></figure>
                      <h3><?= $sejour["titre"]; ?></h3>

                    </a>

                      <div class="depart-bg  pt-2 pb-4">
                      <section class="depart container">

                          <header class="content-header">
                              <h1><?= $sejour["titre"]; ?></h1>
                              <p> <?= $sejour["description"]; ?></p>

                          </header>

                          <section class="depart-content">
                              <?php foreach ($departs as $depart) : ?>

                              <article class="article-departs">
                                      <p>Date :<?= $depart["date_depart"]; ?></p>
                                      <p><?= $depart["prix"]; ?>Euros</p>
                                      <p>Nombre de place: <?= $depart["nb_places"]; ?></p>
                              </article>
                              <?php endforeach; ?>

                          </section>


                          <div class="btn"><a href="">tous nos departs</a></div>

                      </section>
                </div>



            </article>
            
                </div><!-- .news-section -->
            
              </section>



</main>



<?php getFooter(); ?>