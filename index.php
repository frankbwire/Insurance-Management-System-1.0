<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<!--=======User Sign Up/ Registration=========-->
<?php
require 'connect.php';
require 'server.php';



$username='';
$password='';
$errors=array();
// LOGIN USER
if (isset($_POST['ulogin'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
<!--======End User Sign Up/ Registration======-->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Narok Online Insurance System</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/animate-css/animate.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body style="background-image:url(img/wildlife_conservation-wallpaper-2880x1620.jpg)">
  <div class="container" style="margin-top:150px;background-image: url(img/background/pattern1.png);">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4">
            <h2 style="color: #049; font-weight: bold">Narok Online Insurance System</h2>
            <p class="mb-4" style="color: #fff; font-weight: bold">Narok Online Insurance System is a web application which is used to tracking the details about the insurance policy, customer details and company details. The company tries to give insurance policy holders quick access to their insurance policy details, modify or update the datails and even renew an expired insurance policy. All this, with a single click on your computer, at the comfort of your home.

            </p>
          </div>
          <!--====Login form====-->
          <div class="col-lg-5 ml-auto">
            <form action="index.php" method="post" class="form-box">
              <?php include('errors.php'); ?>
              <h3 style="color: #049; font-weight: bold">User Login </h3>

                
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
              </div>
              <div class="form-group">
                <input type="submit" name="ulogin" class="btn btn-primary btn-pill" value="Login" style="margin-right: 20px">
                Don't have an account?<a href="signup.php" style="font-weight: 600"> Sign up </a>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
