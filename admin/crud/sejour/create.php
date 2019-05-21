<?php require_once __DIR__ . "/../../layout/header.php"; ?>

<h1>Ajout d'un sejour</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Label</label>
        <input type="text" name="label" class="form-control" placeholder="Label" required>
    </div>
    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>