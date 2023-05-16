<?php
require_once("database.php");
$db = new database(); 

   
if(!isset($_GET['id'])){
    echo "Error";
}
else{
  $id = $_GET['id'];
  $res = $db->retrieveUser($id);
  if($res && $res->rowCount() > 0){
    $res = $res->fetch();
}
else{
    echo "No user with the specified ID was found in the database.";
}
  }
$id = $_GET['id'];
$res = $db->retrieveUser($_GET['id']);
$res = $res->fetch();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>booknow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="vendor/one.png">

    <!-- Stylesheet -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<body id="page-top">

<!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
   <div class="container">
     <a class="navbar-brand" href="index.php">Daewoo Pakistan Express Bus Service</a>

     <div>
       <ul class="navbar-nav ml-auto">
         <li class="nav-item" style=" border: 1px solid; border-radius:30px;">
           <a class="nav-link js-scroll-trigger" href="#about">About Us </a>
         </li>
         <li class="nav-item" style="margin-left:40px; border: 1px solid; border-radius:30px;">
           <a class="nav-link js-scroll-trigger" href="#services">Company Profile</a>
         </li>
         <li class="nav-item" style="margin-left:40px; border: 1px solid; border-radius:30px;">
           <a class="nav-link js-scroll-trigger" href="#news">Latest News</a>
         </li>

         <li class="nav-item" style="margin-left:40px; border: 1px solid; border-radius:30px;">
           <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
         </li>

        
         <a  href="User_signin.php" role="button" style="margin-left: 30px; margin-top:8px; color: white;" >
         Logout
         </a>
         
  


   </ul>
   </div>
   </div>
 </nav>

 <div class="container-fluid" style="background-image: url(vendor/three.jpg);">
   
 

<div class="row" style="min-height: 750px;">
 
<div class="col-lg-12"><h2 style="margin-top: 120px; text-align: center;" >Update Booking Form</h2></div>

<div class="col-lg-12">

<form action="doedit.php" method="POST" style="width:700px; border-radius: 20px;margin-left: 420px; ">
 
 <div class="container" style="">
 <input type="hidden" id="id" name="id" value="<?php echo $res['id']?>">
   <label for="name" style="font-size: 20px; color: white;"><b>Full Name</b></label>
   <input type="text" placeholder="" name="name" required style="border-radius:20px" value="<?php echo $res[1]?>"><br><br>

   <label for="tel" style="font-size: 20px; color: white;"><b>Phone number</b></label>
   <input type="tel" placeholder="" name="contact_no" required style="border-radius: 20px; border-color: white; height: 30px;" value="<?php echo $res[2]?>"><br><br>
       
<label for="date" style="font-size: 20px; color: white;"><b> Departure date</b></label>
   <input type="date" placeholder="date" name="departure" required value="<?php echo $res[3]?>"><br>
       
<label for="text"style="font-size: 20px; color: white;" ><b> Return date</b></label>
   <input type="date" placeholder="date" name="return" style="border-radius:20px" value="<?php echo $res[4]?>">
       
   <div class="form-group mb-3" >
                          <label for="text"style="font-size: 20px; color: white; " ><b> From</b></label>
                          <select class="form-control" id="from" name="from" style="border-radius:20px color: black;" value="<?php echo $res[5]?>">
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                            <option value="Multan">Multan</option>
                          </select>
                        </div>

                        <div class="form-group mb-3" >
                          <label for="text"style="font-size: 20px; color: white; " ><b>To</label>
                          <select class="form-control" id="to" name="to" style="border-radius:20px color: black;" value="<?php echo $res[6]?>">
                            <option value="Gujrawala">Gujrawala</option>
                            <option value="Quetta">Quetta</option>
                            <option value="Peshwar">Peshwar</option>
                            <option value="Kamra">Kamra</option>
                            <option value="Karachi">Karachi</option>
                          </select>
                        </div>

   <
  <button  type="submit"  name="submit" value="Register" style="background-color:black; border-radius: 10px;" class="form-control btn btn-default submit px-3" >submit</button>

   <div class="col-lg-12" style="margin-top:20px;">
     
     <a href="Users.php" style="color: white; font-size:20px; border: 1px solid; padding: 10px; border-radius: 20px; background-color: black; border-color:black;">View your details </a>

   </div>
 
 </div>


</form>
</div>
</div>
</div>

<footer class="py-5 bg-dark">
   <div class="container">
     <p class="m-0 text-center text-white">Copyright &copy; Daewoo Pakistan Express Bus Service</p>
   </div>
   <!-- /.container -->
 </footer>

 <script src="js/jquery.min.js"></script>
 <script src="js/popper.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/main.js"></script>
  <!-- jQuery-2.2.4 js -->
   <script src="js/jquery/jquery-2.2.4.min.js"></script>
   <!-- Popper js -->
   <script src="js/bootstrap/popper.min.js"></script>
   <!-- Bootstrap js -->
   <script src="js/bootstrap/bootstrap.min.js"></script>
   <!-- All Plugins js -->
   <script src="js/plugins/plugins.js"></script>
   <!-- Active js -->
   <script src="js/active.js"></script>



   </body>
</html>

    
  </div>
</div>
  
</body>
</html>
