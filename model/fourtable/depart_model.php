<?php

function getAllDepartsBySejour(int $id) {
    global $connection;

    $query = "
        SELECT
            depart.*,
            pays.nom AS pays
        FROM depart
        INNER JOIN pays ON pays.id = depart.pays_id
        WHERE depart.sejour_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}