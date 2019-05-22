<?php
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];

$destination = getOneRow("destination", $id);

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modification d'une destination</h1>

    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Label</label>
            <input type="text" name="label" value="<?= $destination["label"]; ?>" class="form-control" placeholder="Label" required>
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control">
            <?php if ($destination["photo"]): ?>
                <img src="../../../uploads/destinations/<?= $destination["photo"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>
        <input type="hidden" name="id" value="<?= $destination["id"]; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>