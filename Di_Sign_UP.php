<?php
require_once("database.php");
$db = new database();
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$res = $db->SignUp($name,$email,$password);

    header("Location:Users.php?id=3");

?>