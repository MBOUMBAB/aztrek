<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$label = $_POST["label"];
$photo = $_FILES["photo"]["name"];

if ($photo) {
    // Gérer l'upload du fichier
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/destinations/" . $photo);
} else {
    $destination = getOneRow("destination", $id);
    $photo = $destination["photo"];
}

updateDestination($id, $label, $photo);

header("Location: index.php");