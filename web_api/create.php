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
        InsertProduct();
    } catch (PDOException $exception) {
        //throw $th;
        die('ERROR: ' . $exception->getMessage());
    }

    function InsertProduct()
    {
        # code...
        $query = 'INSERT INTO products SET p_name=:name, p_description=:description, p_price=:price';
        $stmt = $con->prepare($query);

        $stmt->bindParam(':name', NAME);
        $stmt->bindParam(':description', DESCRIPTION);
        $stmt->bindParam(':price', PRICE);

        if ($stmt->excute()) {
            echo json_encode(array('result' => 'success'));
        } else {
            echo json_encode(array('result' => 'fail'));
        }
    }
}
