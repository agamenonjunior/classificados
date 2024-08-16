<?php
session_start();
define ($dbname,'classificados');
define ($user,'root');
define ($pass,'');
define ($host,'localhost');
try {
    //code...
    $pdo = new PDO("mysql:dbname =$dbname;host=$host",$user,$pass);
} catch (\PDOException $error) {
    //error
    echo $error->getMessage();
}

?>