<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$label = $_POST["label"];
$photo = $_FILES["photo"]["name"];

// Gérer l'upload du fichier
move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/destinations/" . $photo);

insertDestination($label, $photo);

header("Location: index.php");