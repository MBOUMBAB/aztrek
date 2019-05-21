<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$destination = getOneRow("destination", $id);
$sejours = getAllSejoursByDestination($id);

getHeader($destination["label"]);
?>

   

    <div class="content-header destination-header">
        <img src="uploads/destinations/<?= $destination["photo"]; ?>" alt="<?= $destination["label"]; ?>">
        <h1><?= $destination["label"]; ?></h1>
    </div>

    <section class="container">

        <div class="destinations-grid">

            <?php foreach ($sejours as $sejour) : ?>
                <article>
                    <h2><?= $sejour["titre"]; ?></h2>
                    <img src="uploads/sejours/<?= $sejour["photo"]; ?>" alt="">

<!---->
<!--                    <ul>-->
<!--                        --><?php //foreach ($sejours as $sejour) : ?>
<!--                            <li>--><?//= $sejour["label"]; ?><!--</li>-->
<!--                            <p>destination: --><?//= $sejour["destination"]; ?><!--</p>-->
<!---->
<!--                        --><?php //endforeach; ?>
<!--                    </ul>-->


                    <a href="sejour.php?id=<?= $sejour["id"]; ?>">
                        Voir le détail du séjour
                    </a>
                </article>
            <?php endforeach; ?>

        </div>

    </section>

<?php getFooter(); ?>