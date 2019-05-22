<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$titre = $_POST["titre"];
$destination_id = $_POST["destination_id"];
$categorie_ids = $_POST["categorie_ids"];
$description = $_POST["description"];
$duree = $_POST["duree"];
$niveau = $_POST["niveau"];
$photo = $_FILES["photo"]["name"];

// Gérer l'upload du fichier
move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/sejours/" . $photo);

insertSejour($titre, $destination_id, $categorie_ids, $photo, $description, $duree, $niveau);

header("Location: index.php");