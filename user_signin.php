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
                  <body id="page-top">

 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="container">
      <a class="navbar-brand" href="index.php">Daewoo Pakistan Express Bus Service</a>

      <div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style=" border: 1px solid; border-radius:30px;">
            <a class="nav-link js-scroll-trigger" href="index.php#about">About Us </a>
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

         
          
          
   


    </ul>
    </div>
    </div>
  </nav>
    <section class="ftco-section" style=" max-height: 660px;  background-image: url(vendor/three.jpg);background-attachment: fixed; background-repeat: no-repeat;">
    <div class="container" >
      <div class="row justify-content-center">
      
      </div>
      <div class="row justify-content-center" >
        <div class="col-md-7 col-lg-5" style="opacity: 0.6;"> 
          <div class="login-wrap" style="border: 3px solid; border-radius: 20px;">
            <h3 class="text-center mb-4" >User Login</h3>

            <form action="Do_Sign_IN.php" method="POST" class="signup-form" >
              <div class="form-group mb-3">
                <label class="label" for="name">User Name</label>
                <input type="text" style="background-color: black;" class="form-control" name="name" placeholder="">
                <span class="icon fa fa-user-o"></span>
              </div>
            
              <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input id="password" type="password" style="background-color: black;" class="form-control" name="password" placeholder="">
                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                <span class="icon fa fa-lock"></span>
              </div>

              
              <div class="form-group">
                <button type="submit" class="form-control btn btn-success submit px-3" name="submit" style="background-color: black; border-color: black;">Log In</button>
              </div>

              


            </form>
            <b><p style="color: white;"> If You Don't Have Account<br>Create Account! <a  href="user_signup.php" style="font-size: 20px;">register</a></p></b>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12" style="margin-top: 50px;">
        <h1 align="center" style="font-size:50px; color:white;" 
        > Daewoo Online Booking System</h1>

      </div>

    </div>
  </section>

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



