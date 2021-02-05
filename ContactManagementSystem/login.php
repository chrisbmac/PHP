<?php

require 'config.php';
require 'salthash.php';
session_start();
$_SESSION["login"] = FALSE;

saltHash();
// table
$dbTable = "musicLogin";

//user creds
$email = $_POST['email'];
$password = $_POST['password'];
//echo $email . $password;

// query - check pass and username
$query = $CONNECTION_STRING->prepare('SELECT * FROM logincms WHERE email=:email');
$query->execute(array(':email' => $email));
$info = $query->fetch();
//print_r($info[1]);

if(password_verify($password, $info[1])){
    $_SESSION["login"] = TRUE;
    header("Location: my_menu.php");
} else {
    $_SESSION["login"] = FALSE;
    header("Location: index.php");
}