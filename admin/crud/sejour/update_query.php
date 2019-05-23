<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$titre = $_POST["titre"];
$destination_id = $_POST["destination_id"];
$categorie_ids = $_POST["categorie_ids"];
$photo = $_FILES["photo"]["name"];
$description = $_POST["description"];
$duree = $_POST["duree"];
$niveau = $_POST["niveau"];
if ($photo) {
    // Gérer l'upload du fichier
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/sejours/" . $photo);
} else {
    $sejour = getOneRow("sejour", $id);
    $photo = $sejour["photo"];
    $description = $_POST["description"];
    $duree = $_POST["duree"];
    $niveau = $_POST["niveau"];
}

updateSejour($id, $titre, $photo, $duree, $niveau, $description, $destination_id, $categorie_ids);

header("Location: index.php");