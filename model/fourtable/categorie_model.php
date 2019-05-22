<?php

function insertCategorie(string $titre) {
    global $connection;

    $query = "
        INSERT INTO categorie (titre)
        VALUES (:titre)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->execute();
}

function updateCategorie(int $id, string $titre) {
    global $connection;

    $query = "
        UPDATE categorie
        SET titre = :titre
        WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->execute();
}
function getAllCategorieBySejour(int $id) {
    global $connection;

    $query = "
        SELECT categorie.*
        FROM categorie
        INNER JOIN sejour_has_categorie shc ON categorie.id = shc.categorie_id
        WHERE shc.sejour_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
