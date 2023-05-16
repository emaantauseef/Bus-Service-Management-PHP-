<?php

require_once("database.php");
$db = new database();

$u = $_POST['name'];
$p = $_POST['password'];
$rows=$db->signIn($u, $p);
if($rows>0){
    header("Location:Users.php?id=1");
}else{
    header("Location:user_signin.php");
}

?>
<?php











