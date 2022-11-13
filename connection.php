<?php
//DB Connection



$host = 'localhost:3307';
$db= 'project1';
$user = 'root';
$password = 'mysql';
$dsn = "mysql: host=$host;dbname=$db;";


try{
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    throw new PDOException($e->getMessage());
}

require "crud.php";
$crud = new crud($pdo);

?>