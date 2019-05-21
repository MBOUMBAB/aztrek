<?php
require_once __DIR__ . "/../config/parameters.php";

// Connexion à la base de données
$connection = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);
foreach (glob(__DIR__ . "/fourtable/*.php") as $file) {
    require_once $file;
}
/**
 * Rechercher l'ensemble des lignes d'un table
 * @param string $table Nom de la table
 * @param string|null $orderby Tri
 * @param int|null $limit Limite
 * @return array Lignes retournées par la requête SQL
 */
function getAllRows(string $table, string $orderby = null, int $limit = null) {
    global $connection;

    $query = "SELECT * FROM $table";

    if ($orderby != null) {
        $query = $query . " ORDER BY $orderby";
    }
    if ($limit != null) {
        $query = $query . " LIMIT $limit";
    }

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

/**
 * Rechercher une ligne dans une table
 * @param string $table Nom de la table
 * @param int $id L'identifiant de la ligne
 * @return array Ligne retournée par la requête SQL
 */
function getOneRow(string $table, int $id) {
    global $connection;

    $query = "SELECT * FROM $table WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

/**
 * Supprimer une ligne dans une table
 * @param string $table Nom de la table
 * @param int $id Identifiant de la ligne
 */
function deleteRow(string $table, int $id) {
    global $connection;

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $exception) {
        return $exception;
    }

    return null;
}

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

//function getAllCategorieBySejour(int $id) {
//    global $connection;
//
//    $query = "
//        SELECT *
//            sejour.titre AS sejour
//        FROM categorie
//        INNER JOIN sejour_has_categorie rht ON categorie.id = rht.categogie_id
//        WHERE rht.sejour_id = :id
//    ";

//    $stmt = $connection->prepare($query);
//    $stmt->bindParam(":id", $id);
//    $stmt->execute();
//
//    return $stmt->fetchAll();
//}




function getAllDepartBySejour(int $id) {
    global $connection;

    $query = "
        SELECT
            depart.*,
           sejour.titre AS sejour
        FROM depart
        INNER JOIN sejour ON depart.sejour_id = sejour.id
        WHERE depart.sejour_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
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


