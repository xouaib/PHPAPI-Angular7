<?php
if ($_POST) {
    // Include DB Config
    include 'config/database.php';
    // Received properties's values
    const NAME = $_POST['name'];
    const DESCRIPTION = $_POST['description'];
    const PRICE = $_POST['price'];

    try {
        //code...
        $query = 'INSERT INTO products SET p_name=:name, p_description=:description, p_price=:price';
        $stmt = $con->prepare($query);

        $stmt->bindParam(':name', self::NAME);
        $stmt->bindParam(':description', self::DESCRIPTION);
        $stmt->bindParam(':price', self::PRICE);

        if ($stmt->excute()) {
            echo json_encode(array('result' => 'success'));
        } else {
            echo json_encode(array('result' => 'fail'));
        }
    } catch (PDOException $exception) {
        //throw $th;
        die('ERROR: ' . $exception->getMessage());
    }
}
