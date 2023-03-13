<?php
require_once "config.php";
if(!isset($_POST['first_name']) || !isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['email'])){
    
    header('Location: ../user.php');
    exit();
}

$pre = $pdo->prepare("INSERT INTO user(first_name,name,emailpassword) VALUES(:first_name,:name,:email,:password)");
$pre->execute(array(
    ':first_name' =>$_POST['first_name'],
    ':name'   => $_POST['name'],
    ':password'=> sha1(md5($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"),
    ':email'=> $_POST['email'],
    ));
$_SESSION["user"] = array(
    'first_name' => $_POST['first_name'],
    'name'   => $_POST['name'],
    'email'=> $_POST['email'],
);
$_SESSION["output"] = "Vous êtes bien connecté";
header('Location: ../index.php');

?>