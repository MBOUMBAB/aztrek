<?php
function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;

    $query = "
        SELECT *
        FROM utilisateur
        WHERE utilisateur.email = :email
        AND utilisateur.password = SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}
