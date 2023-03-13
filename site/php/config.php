<?php
session_start();
$pdo;
try{
    $pdo = new PDO("mysql:host=localhost;dbname=site_logiciel", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch  (PDOException $e){
    echo $e;
}
?>