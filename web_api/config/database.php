<?php
  // db properties
  CONST HOST = 'localhost';
  CONST DB_NAME = 'ng7_crud';
  CONST USERNAME = 'root';
  CONST PASSWORD = '';
  
  // Try to connect to the server
  try {
      //code...
  $con = new PDO('mysql: host={self::HOST}, dbname={self::DB_NAME}', self::USERNAME, self::PASSWORD);
  } catch (PDOException $exception) {
      //throw $th;
      echo 'Connection error: '. $exception->getMessage();
  }

