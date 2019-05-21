<?php
require_once "functions.php";
require_once "model/database.php";

$departs = getOneDepart($id);
getHeader($sejour["titre"])
?>




<main>

<div class="depart-bg  pt-2 pb-4">
                            <section class="depart container">

                                <header class="content-header">
                                    <h1><?= $sejour["titre"]; ?></h1>

                                </header>

                                <section class="depart-content d-flex m-3 px-4">

                                    <?php foreach ($departs as $depart) : ?>

                                        <article class="article-departs">
                                            <p><?= $depart["date_depart"]; ?></p>
                                            <p><?= $depart["prix"]; ?></p>
                                            <p><?= $depart["nb_places"]; ?></p>

                                        </article>
                                    <?php endforeach; ?>

                                </section>
                                <div class="btn"><a href="">tous nos departs</a></div>

                            </section>
                        </div>





</main>