<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
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
<section class="ftco-section"  style=" max-height: 680px;  background-image: url(vendor/five.jpg); background-repeat: no-repeat;">
    <div class="container">
      <div class="row justify-content-center">
      
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap">
           <b> <h3 class="text-center mb-4">Add Ticket Data</h3></b>
            <form  method="POST" action="saveUser.php" class="signup-form" >
              <div class="form-group mb-3">
                <label class="label" for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required style="background-color: black;">
                <span class="icon fa fa-user-o"></span>
              </div>
              <div class="form-group mb-3">
                <label class="label" for="contact_no">Contact_No</label>
                <input type="text" class="form-control  " id="contact_no" name="contact_no" maxlength="11" required style="background-color: black;">
                <span class="icon fa fa-user-o"></span>
              </div>
              
               <div class="form-group mb-3">
                <label class="label" for="departure">Departure</label>
                <input type="date" class="form-control" id="departure" name="departure" required style="background-color: grey;">
                <span toggle="#password" class=""></span>
                <span class=""></span>
              </div>

              <div class="form-group mb-3">
                <label class="label" for="return">Return</label>
                <input type="date" class="form-control" id="return" name="return" style="background-color: grey;">
                <span toggle="#password" class=""></span>
                <span class=""></span>
              </div>

              <div class="form-group mb-3" >
                          <label for="from">From:</label>
                          <select class="form-control" id="from" name="from" style="background-color: black;">
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                            <option value="Multan">Multan</option>
                          </select>
                        </div>

                        <div class="form-group mb-3" >
                          <label for="to">To:</label>
                          <select class="form-control" id="to" name="to" style="background-color: black;">
                            <option value="Gujrawala">Gujrawala</option>
                            <option value="Quetta">Quetta</option>
                            <option value="Peshwar">Peshwar</option>
                            <option value="Kamra">Kamra</option>
                            <option value="Karachi">Karachi</option>
                          </select>
                        </div>

              <div class="form-group"  style="background-color:black; border-radius: 10px;" >
                <button  type="submit"  name="submit" value="Register" style="background-color:black; border-radius: 10px;" class="form-control btn btn-default submit px-3" >Add User</button>
              </div>
            </form>
           
          </div>
        </div>
      </div>
    </div>
  </section>

 
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

