<?php
include 'config/database.php';
if ($_POST) {

    try {
        
        $array = [$_POST['name'], $_POST['description'], $_POST['price']];

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "INSERT INTO products SET p_name=:name, p_description=:description, p_price=:price";

        $stmt = $con->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);

        if ($stmt->execute()) {
            echo json_encode(array('result' => 'success'));
        } else {
            echo json_encode(array('result' => 'fail'));
        }
    } catch (PDOException $exception) {
        die('ERROR: ' . $exception->getMessage());
    }
}
