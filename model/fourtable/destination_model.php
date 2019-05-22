<?php



function insertDestination(string $label, string $photo, string $description) {
    global $connection;

    $query = "
        INSERT INTO destination (label, photo, description)
        VALUES (:label, :photo, :description)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}

function updateDestination(int $id, string $label, string $photo) {
    global $connection;

    $query = "
        UPDATE destination
        SET label = :label,
            photo = :photo
        WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
}
