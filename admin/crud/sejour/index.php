<?php
require_once __DIR__ . "/../../../model/database.php";

$sejours = getAllSejours();

require_once __DIR__ . "/../../layout/header.php";
?>

<h1>Gestion des sejours</h1>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<!-- Affichage des erreurs -->
<?php if (isset($_GET["errcode"])): ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php if ($_GET["errcode"] == 23000): ?>
            Erreur lors de la suppression.
        <?php else: ?>
            Une erreur est survenue...
        <?php endif; ?>
    </div>
<?php endif; ?>

<hr>

<table class="table table-striped table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Titre du séjour</th>
            <th>destination</th>
            <th>Catégorie</th>
            <th>Photo</th>
            <th>description</th>
            <th>Durée</th>
            <th>Niveau</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sejours as $sejour) : ?>
            <?php $categories = getAllCategorieBySejour($sejour["id"]); ?>
            <tr>
                <td><?= $sejour["titre"]; ?></td>
                <td><?= $sejour["destination"]; ?></td>
                <td>
                    <ul>
                        <?php foreach ($categories as $categorie) : ?>
                            <li><?= $categorie["titre"]; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>

                <td>
                    <img src="../../../uploads/sejours/<?= $sejour["photo"]; ?>" class="img-thumbnail" alt="">
                </td>
                <td><?= $sejour["description"]; ?></td>
                <td><?= $sejour["duree"]; ?></td>
                <td><?= $sejour["niveau"]; ?></td>

                <td class="actions">
                    <a href="update.php?id=<?= $sejour["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="post">
                        <input type="hidden" name="id" value="<?= $sejour["id"]; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>