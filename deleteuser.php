<?php
require_once("database.php");
$db = new database();
$id = $_GET['id'];
$db->deleteuser($id);
header("Location:Users.php");