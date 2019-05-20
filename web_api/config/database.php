<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

const HOST = 'localhost';
const DB_NAME = 'ng7_crud';
const USERNAME = 'root';

try {
    $con = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USERNAME, '');
} catch (PDOException $exception) {
    echo 'Connection error: ' . $exception->getMessage();
}
