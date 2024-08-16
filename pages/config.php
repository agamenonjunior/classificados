<?php
session_start();
$dbname ='classificados';
$user ='root';
$pass ='';
$host ='localhost';
try {
    //code...
    $pdo = new PDO("mysql:dbname =$dbname;host=$host",$user,$pass);
} catch (\PDOException $error) {
    //error
    echo $error->getMessage();
}

?>