<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<?php
include 'connect.php';
require 'server.php';
?>
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

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area" style="background-color: black">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="home.php">Narok  Insurance</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                             <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="policyreg.php">Personal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="companyreg.php">Company</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="price.html">Pricing</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Policies</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="auto.php">Auto/Vehicle</a></li>
                                    <li class="nav-item"><a class="nav-link" href="health.php">Health</a></li>
                                    <li class="nav-item"><a class="nav-link" href="life.php">Life</a></li>
                                    <li class="nav-item"><a class="nav-link" href="realestate.php">Real Estate</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cargo.php">Cargo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="incomeprotection.php">Income Protection</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li><a class="sign_up" href="index.php">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--================Policy Registration =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <form action="policyreg.php" method="post">
                        <h1 style="color: black">User Policy Registration
                            <hr style="color: black">
                        </h1>
                        <p style="color: black">You can easily apply for an insurance policy of your own choice. Complete the form below, giving accurate information.</p>
                        <div class="mt-10">
                            <input type="text" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="date" name="dob" placeholder="Date of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="form-select" id="default-select" align="center">
                                <select name="city">
                                    <option value="1">* City</option>
                                    <option>Nairobi</option>
                                    <option>Nakuru</option>
                                    <option>Mombasa</option>
                                    <option>Eldoret</option>
                                    <option>Naivasha</option>
                                </select>

                                <select style="margin-left: 20px" name="country">
                                    <option value="1">* Country</option>
                                    <option>Kenya</option>
                                    <option>Uganda</option>
                                    <option>Tanzania</option>
                                    <option>Somalia</option>
                                </select>
                            </div>

                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="form-select" id="default-select2" align="center">
                                <select name="ptype">
                                    <option value="1">* Policy Type</option>
                                    <option>Life Insurance</option>
                                    <option>Health Insurance</option>
                                    <option>Auto/Vehicle Insurance</option>
                                    <option>Real Estate Insurance</option>
                                    <option>Cargo Insurance</option>
                                    <option>Income Protection Insurance</option>
                                </select>
                                <select style="margin-left: 20px" name="pricing">
                                    <option value="1">* Pricing Policy </option>
                                    <option>Standard</option>
                                    <option>Business</option>
                                    <option>Premium</option>
                                    <option>Ultimate</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="annual" placeholder="Annual Income (Kenya shillings)" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="idno" placeholder="ID Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required class="single-input-accent" maxlength="20">
                        </div>
                        <div class="mt-10" style="margin-left: 25px">
                            Male
                            <input type="radio" id="primary-radio" value="Male" name="gender" checked>
                            Female
                            <input type="radio" id="primary-radio" placeholder="female" value="female" name="gender">
                        </div>
                        <br>
                        <div class="mt-10" align="center">
                            <button type="submit" name="submitreg" class="genric-btn success-border">Apply Policy
                            </button>
                            <button style="margin-left: 50px" type="reset" name="submitreg" class="genric-btn danger-border"><a href="home.html">Cancel Registration</a>
                            </button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--================Blog Area end =================-->


    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Theme:</h4>
                    <p>Assuring you a hopeful future</p>
                    <div class="footer-logo">
                        <h3 style="color: white; font-weight: bolder">Narok Online Insurance System</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                        <p>Address : 6789 Street <br> Narok</p>
                        <span>Phone : +123 456789</span>
                        <span>Email : narokims@gmail.com</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Subscribe to receive our lates news letters</p>

                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                                <div class="input-group-append">
                                    <button class="btn click-btn" type="submit">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
