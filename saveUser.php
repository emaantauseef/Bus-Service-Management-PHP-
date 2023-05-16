<?php

require_once("database.php");
$db = new database();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $departure = $_POST['departure'];
    $return = $_POST['return'];
    $from = $_POST['from'];
    $to = $_POST['to'];
$res = $db->insertuser($name,$contact_no,$departure,$return,$from,$to);

    header("Location:Users.php?id=1");

}
// if($res === true ){
//     header("Location:Patients.php?id=1");
// }
// else{
//     header("Location:insertPatient.php?rid=2");
else{
    header("Location:Add_user.php?rid=2");

}






