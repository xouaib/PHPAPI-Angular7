<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

include 'config/database.php';

try {
    $query = 'DELETE FROM products WHERE p_id = ?';

    $stmt = $con->prepare($query);

    $stmt->bindParam(1, $id);

    if ($stmt->execute()) {
        echo json_encode(array('result' => 'success'));
    } else {
        echo json_encode(array('result' => 'fail'));
    }
} catch (PDOException $exception) {
    die('ERROR: ' . $exception->getMessage());
}
