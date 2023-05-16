<?php
require_once("database.php");
$db = new database();
$id = $_POST['id'];
$name = $_POST['name'];
$contact_no = $_POST['contact_no'];
$departure = $_POST['departure'];
 $return = $_POST['return'];
$from = $_POST['from'];
$to = $_POST['to'];
$res = $db->updateUser($id,$name,$contact_no,$departure,$return,$from,$to);


header("Location:Users.php");

// if($res === true){
//     header("Location:Patients.php");
// }
// else{
//     header("Location:updatePatient.php");
// }