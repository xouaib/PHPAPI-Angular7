<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.'); // raise error if there is param as id with value
include 'config/database.php';

try {
    $query = 'SELECT p_id, p_name, p_description, p_price FROM products WHERE p_id = ? LIMIT 0,1';

    $stmt = $con->prepare($query);

    $stmt->bindParam(1, $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $json = json_encode($row);
    echo $json;
} catch (PDOException $exception) {
    die('ERROR: ' . $exception->getMessage());
}
