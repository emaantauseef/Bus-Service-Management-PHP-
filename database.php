<?php
class database{
    private $db;
    function __construct(){
        try {
            $this->db = new PDO(
                "mysql:host=localhost;dbname=ticket_management",
                "root",
                ""
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        function SignUp($name,$email,$password){
            $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ( ?, ?, ?)" ;
            $string = $this->db->prepare($query);
            $string->execute(array($name,$email,$password));
        }

        function signIn($u, $p){
            $query = "SELECT `name` , `password` from `users` where `name`='$u' AND `password`='$p' ;";
           // $st = $this->db->prepare($query);
            //$st->execute(array($u, $p));
            echo $query;
            $st=$this->db->query($query);
            
            print_r($st);
            return $st->rowCount();
            // die();
        }

        function insertuser($name,$contact_no,$departure,$return,$from,$to){
            try{
    
            $query="INSERT INTO `tickets`( `name`, `contact_no`, `departure`, `return`, `from`, `to`) VALUES (?,?,?,?,?,?)";
            $string = $this->db->prepare($query);
            $string->execute(array($name,$contact_no,$departure,$return,$from,$to));
            }
            catch(PDOException $e){
                return false;
                die($e->getMessage());
            }
    
        }




        function showUsers(){
            $query = "SELECT * from `tickets`;";
            $string = $this->db->prepare($query);
            $string -> execute(array());
            return $string;
        }

        function deleteuser($id){
            $query = "Delete from `tickets` where `id`=?;";
            $string = $this->db->prepare($query);
            $string ->execute(array($id));
            return $string;
        }

        function retrieveUser($id){
            $query = "SELECT * from `tickets` where `id`=?;";
            $string = $this->db->prepare($query);
            $string->execute(array($id));
            return $string;
        }

        function updateUser($id,$name,$contact_no,$departure,$return,$from,$to){
            try{
            $query="UPDATE `tickets` SET `name` = ?, `contact_no` = ?, `departure` = ?, `return` = ?, `from` = ?, `to` = ?, `created_at` = NULL, `updated_at` = NULL WHERE `tickets`.`id` = ?;";
            $string  = $this->db->prepare($query);
            $string -> execute(array($name,$contact_no,$departure,$return,$from,$to,$id));
            return $query;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
        }

   
    }     
?>


