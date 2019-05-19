<?php
const HOST = 'localhost';
const DB_NAME = 'ng7_crud';
const USERNAME = 'root';

try {
    $con = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USERNAME, '');
} catch (PDOException $exception) {
    echo 'Connection error: ' . $exception->getMessage();
}
