<?php
include 'config/database.php';
if ($_POST) {

    try {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
         $price = $_POST['price'];
        
        $query = 'UPDATE products 
                    SET p_name = :name, p_description = :description, p_price = :price 
                    WHERE p_id = :id';

        $stmt = $con->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo json_encode(array('result' => 'success'));
        } else {
            echo json_encode(array('result' => 'fail'));
        }
    } catch (PDOException $exception) {
        die('ERROR: ' . $exception->getMessage());
    }
}
