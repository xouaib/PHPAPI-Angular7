<?php

if ($_POST) {
    include 'config/database.php';
    try {
        $query = 'UPDATE products 
                    SET p_name = :name, p_description =: description, p_price = :price 
                    WHERE p_id = :id';

        $stmt = $con->prepare($query);

        const ID = $_POST['id'];
        const NAME = $_POST['name'];
        const DESCRIPTION = $_POST['description'];
        const PRICE = $_POST['price'];

        $stmt->bindParam(':name', self::NAME);
        $stmt->bindParam(':description', self::DESCRIPTION);
        $stmt->bindParam(':price', self::PRICE);
        $stmt->bindParam(':id', self::ID);

        if ($stmt->execute()) {
            echo json_encode(array('result' => 'success'));
        } else {
            echo json_encode(array('result' => 'fail'));
        }
    } catch (PDOException $exception) {
        die('ERROR: ' . $exception->getMessage());
    }
}
