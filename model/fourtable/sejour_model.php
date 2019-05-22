<?php


function getAllSejoursByDestination(int $id) {
    global $connection;

    $query = "
        SELECT
            sejour.*,
           destination.label ASdestination
        FROM sejour
        INNER JOIN destination ON sejour.destination_id = destination.id
        WHERE sejour.destination_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneSejour(int $id) {
    global $connection;

    $query = "
        SELECT
            sejour.*,
            destination.label AS destination
        FROM sejour
        INNER JOIN destination ON sejour.destination_id = destination.id
        WHERE sejour.id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertSejour(string $titre, int $destination_id, array $categories_id, string $photo, string $description, int $duree, string $niveau)
{
    global $connection;

    $query = "
        INSERT INTO sejour (titre, photo, description, duree, niveau, destination_id)
        VALUES (:titre, :photo, :description, :duree, :niveau, :destination_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":niveau", $niveau);

    $stmt->execute();

    $sejour_id = $connection->lastInsertId();

    foreach ($categories_id as $categorie_id) {
        insertSejourCategorie($sejour_id, $categorie_id);
    }
}

function insertSejourCategorie(int $sejour_id, int $categorie_id)
{
    global $connection;

    $query = "
        INSERT INTO sejour_has_categorie (sejour_id, categorie_id)
        VALUES (:sejour_id, :categorie_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->execute();
}

function getAllSejoursByPays(int $id) {
    global $connection;

    $query = "
        SELECT
            sejour.*,
           pays.nom AS pays
        FROM sejour
        INNER JOIN pays ON sejour.pays_id = pays.id
        WHERE sejour.pays_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}