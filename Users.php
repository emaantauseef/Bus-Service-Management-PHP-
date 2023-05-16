<?php 
require_once("database.php");
session_start();
$db = new database();
$res = $db->showUsers();
?>
 






 <!doctype html>
<html lang="en">
  <head>
    <title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <!-- Favicon -->
    <link rel="icon" href="vendor/one.png">

    <!-- Stylesheet -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="container">
      <a class="navbar-brand" href="index.php">Daewoo Pakistan Express Bus Service</a>

      <div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style=" border: 1px solid; border-radius:30px;">
            <a class="nav-link js-scroll-trigger" href="Add_user.php?rid=1">Add New Customer </a>
          </li>
          <li class="nav-item" style="margin-left:40px; border: 1px solid; border-radius:30px;">
            <a class="nav-link js-scroll-trigger" href="index.php#services">Company Profile</a>
          </li>
          <li class="nav-item" style="margin-left:40px; border: 1px solid; border-radius:30px;">
            <a class="nav-link js-scroll-trigger" href="index.php#news">Latest News</a>
          </li>

          <li class="nav-item" style="margin-left:40px; border: 1px solid; border-radius:30px;">
            <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact Us</a>
          </li>

         
          <a  href="user_signin.php" role="button" style="margin-left: 30px; margin-top:8px; color: white;" >
          Logout
          </a>

    </ul>
    </div>
    </div>
  </nav>

<body>
<div class="container-fluid" style="min-height: 580px; background-image: url(vendor/three.jpg);">
             <div class="col-lg-12" style="margin-top:50px;">
               <h2 style="text-align: center; color:white; font-size:40px;">Booking Details </h2>
<?php session_unset(); ?>
<table class="table table" style="margin-top: 100px;color: white;">
            <tr style="font-size:25px;">
                <td>Seat_No</td>
                <td>Customer_Name</td>
                <td>Departure_Date</td>
                <td>Return_Date</td>
                <td>Source</td>
                <td>Destination</td>
                <td>Action</td>
                <td>Action</td>
            </tr>
            
            <?php
foreach ($res as $row) {
    print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>");
    print("<a href=\"deleteuser.php?id=$row[0]\"class=\"btn btn-danger\">Delete</a></td><td>");
    print("<a href=\"updateUser.php?id=$row[0]\"class=\"btn btn-success\">Update</a>");
    print('</td></tr>');
}?>
</table>
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



