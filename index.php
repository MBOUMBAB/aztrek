<?php
require_once "functions.php";
require_once "model/database.php";

$destinations = getAllRows('destination');
$temoignages = getAllRows("temoignage", "date_creation DESC", 3);
getHeader("Accueil", "home");
?>

    <main>


        <section class="destinations">
            <a href="archive.php">
                <h1>AZTREK VOYAGE</h1>
            </a>
            <h2>Un nouveau pas à chaque destination</h2>

            <section class="destinations owl-carousel">

                <article class="destinations-article container">
                    <div class="destinations-infos">
                        <a href="#">
                            <h2>Destination 1: Mexique</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sequi, dolorem officiis.
                            Eligendi ea porro laudantium voluptate? Omnis inventore culpa
                            maxime dolores. Soluta optio odit magnam.</p>
                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                    <div class="destinations-img">
                        <a href="#">
                            <img src="./imagescss/mec.jpg" alt="Destinations"/></a>
                    </div>
                </article>

                <article class="destinations-article container">
                    <div class="destinations-infos">
                        <a href="#">
                            <h2>Destination 2: Guatémala</h2>
                        </a>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, quasi?
                            Quasi veniam omnis eius, at quas nemo
                            fugiat error quo quae reiciendis similique sint temporibus commodi saepe totam. Voluptas,
                            modi?</p>

                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                    <div class="destinations-img">
                        <a href="#">
                            <img src="./imagescss/salvador6-800x450.jpg" alt="Destinations"/></a>
                    </div>
                </article>

                <article class="destinations-article container">
                    <div class="destinations-infos">
                        <a href="#">
                            <h2>Destination 3: Salvador</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum rerum
                            doloribus dignissimos dolore ipsum possimus aliquid, ullam voluptate voluptates, est eos
                            harum sequi
                            laboriosam esse architecto quae sapiente officiis quod facere! Sit aut ex optio iure,
                            voluptates ea.
                            Excepturi, commodi?</p>

                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                    <div class="destinations-img">
                        <a href="#">
                            <img src="./imagescss/costa-rica-1-800x450.jpg" alt="Destinations"/></a>
                    </div>
                </article>
                <article class="destinations-article container">
                    <div class="destinations-infos">
                        <a href="#">
                            <h2>Destination 4: Honduras</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloribus maiores iste aliquid ad minus debitis totam ex architecto
                            impedit quasi, nisi quo commodi laboriosam qui provident molestiae minima?
                            Impedit dolor quidem sunt consequatur dolorem nobis eveniet neque veritatis velit odit!</p>

                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                    <div class="destinations-img">
                        <a href="#">
                            <img src="./imagescss/my-one.png" alt="Destinations"/></a>
                    </div>
                </article>

                <article class="destinations-article container">

                    <div class="destinations-infos">
                        <a href="#">
                            <h2>Destination 5: Costa Rica</h2>
                        </a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At incidunt maxime veniam modi ut
                            cum cumque,
                            aliquid harum, optio fugiat, expedita ex aliquam commodi est eaque laudantium repellat
                            mollitia?
                            Doloribus ea quia aliquid hic eius ducimus, natus laboriosam qui consequuntur laudantium
                            saepe repellat
                            eum
                            neque!</p>

                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                    <div class="destinations-img">
                        <a href="#">
                            <img src="./imagescss/sableblanc-800x450.jpg" alt="Destinations"/></a>
                    </div>
                </article>

            </section><!-- .destinations-carousel-->
        </section>

        <section class="destinations">

            <article class="article-destinations container">

                <header class="content-header">

                    <h1>NOS DESTINATIONS</h1>
                </header>

                <div class="row">
                    <?php foreach ($destinations as $destination) : ?>
                        <div class="col-md-6 col-lg-4 pt-3 pb-2">
                            <img src="uploads/destinations/<?= $destination["photo"]; ?>" alt="">
                            <a href="destination.php?id=<?= $destination["id"]; ?>">
                                <?= $destination["label"]; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="btn"><a href="archive.php">Toutes nos destinations</a></div>
                </div>


            </article><!-- .article-destinations -->

        </section><!-- .destinations -->

        <div class="temoignages-bg  pt-2 pb-4">
            <section class="temoignages container">

                <header class="content-header">

                    <h1>Témoignages</h1>
                </header>

                <section class="temoignages-content d-flex m-3 px-4 justify-content-between">

                    <?php foreach ($temoignages as $temoignage) : ?>
                        <article class="article-temoignages">
                            <p><?= $temoignage["contenu"]; ?></p>
                            <h3>
                                <?= $temoignage["prenom"]; ?>
                                <?= $temoignage["nom"]; ?>
                            </h3>
                            <time><?= $temoignage["date_creation"]; ?></time>
                        </article>
                    <?php endforeach; ?>

                </section><!-- .temoignages-content -->
                <div class="btn"><a href="">Tous nos témoignages</a></div>

            </section><!-- .temoignages -->
        </div>
        <section class="home-newsletter">
            <div class="container">
                <div class="row pt-3 pb-3">
                    <div class="col-sm-12">
                        <div class="single">
                            <h2>Souscrire à nos Newsletter</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Entrez votre email">
                                <span class="input-group-btn">
                <button class="btn btn-theme" type="submit">Souscrire</button>
              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php getFooter(); ?>