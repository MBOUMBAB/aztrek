<?php
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];

$sejour = getOneRow("sejour", $id);

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modification d'un sejour</h1>

    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>titre</label>
            <input type="text" name="titre" value="<?= $sejour["titre"]; ?>" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label>Destination</label>
                <select name="destination_id" class="form-control">
                    <?php foreach ($destinations as $destination) : ?>
                        <option value="<?= $destination["id"]; ?>">
                            <?= $destination["label"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Categorie</label>
                <select name="categorie_ids[]" class="form-control" multiple>
                    <?php foreach ($categories as $categorie) : ?>
                        <option value="<?= $categorie["id"]; ?>">
                            <?= $categorie["titre"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Durée</label>
                <input type="number" name="duree" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Niveau</label>
                <input type="number" name="niveau" class="form-control" required>
            </div>

            <input type="hidden" name="id" value="<?= $sejour["id"]; ?>">
            <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>