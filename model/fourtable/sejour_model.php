<?php



function getAllSejours() {
    global $connection;

    $query = "
        SELECT
            sejour.*,
           destination.label AS destination
        FROM sejour
        INNER JOIN destination ON sejour.destination_id = destination.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejoursByDestination(int $id) {
    global $connection;

    $query = "
        SELECT
            sejour.*,
           destination.label AS destination
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

function updateSejour(int $id, string $titre, string $photo, string $duree, string $niveau, string $description,
                      int $destination_id, array $categorie_ids) {
    global $connection;

    $query = "
        UPDATE sejour
        SET titre = :titre,
            photo = :photo,
            duree = :duree,
            niveau = :niveau,
            description = :description,
            destination_id = :destination_id
        WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->execute();
}
