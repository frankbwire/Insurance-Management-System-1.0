<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<?php
include 'connect.php';
//Declare Variables
$cname='';
$cmail='';
$caddress='';
$cocity='';
$cocountry='';
$cid='';
$coumail='';
$cphone='';

//get form values
if(isset($_POST['cosubmit'])){
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$cmail=mysqli_real_escape_string($conn,$_POST['cmail']);
$caddress=mysqli_real_escape_string($conn,$_POST['caddress']);
$cocity=mysqli_real_escape_string($conn,$_POST['cocity']);
$cocountry=mysqli_real_escape_string($conn,$_POST['cocountry']);
$cid=mysqli_real_escape_string($conn,$_POST['cid']);
$coumail=mysqli_real_escape_string($conn,$_POST['coumail']);
$cphone=mysqli_real_escape_string($conn,$_POST['cphone']);

    //insert values into database
$csql="insert into company_details(co_name,co_email,co_address,co_city,co_country,co_id,co_umail,co_phone) values ('$cname','$cmail','$caddress','$cocity','$cocountry','$cid','$coumail','$cphone')";
$cquery=mysqli_query($conn,$csql);
if(!$cquery){
    die ('Data Entry Unsuccessful'. mysqli_error($conn));
}
}
    
//$cname,$cmail,$caddress,$cocity,$cocountry,$cid,$coumail,$cphone
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
                    <a class="navbar-brand logo_h" href="home.php">Narok  Insurance </a>
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
                    <form action="companyreg.php" method="post">
                        <h1 style="color: black">Update Company Details
                            <hr style="color: black">
                        </h1>
                        <p style="color: black">Fill form below to apply your employer's details.</p>
                        <div class="mt-10">
                            <input type="text" name="cname" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                        </div>


                        <div class="mt-10">
                            <input type="email" name="cmail" placeholder="Company Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <input type="text" name="caddress" placeholder="Company Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="form-select" id="default-select" align="center">
                                <select name="cocity">
                                    <option value="1">* City</option>
                                    <option>Nairobi</option>
                                    <option>Nakuru</option>
                                    <option>Mombasa</option>
                                    <option>Eldoret</option>
                                    <option>Naivasha</option>
                                </select>

                                <select style="margin-left: 20px" name="cocountry">
                                    <option value="1">* Country</option>
                                    <option>Kenya</option>
                                    <option>Uganda</option>
                                    <option>Tanzania</option>
                                    <option>Somalia</option>
                                </select>
                            </div>

                        </div>

                        <div class="mt-10">
                            <input type="text" name="cid" placeholder="Company ID Number" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="coumail" placeholder="User Email Address" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="cphone" placeholder="Company Phone Number" required class="single-input-accent" maxlength="20">
                        </div>

                        <br>
                        <div class="mt-10" align="center">
                            <button type="submit" name="cosubmit" class="genric-btn success-border">Update Details
                            </button>
                            <button style="margin-left: 50px" type="reset" name="submitreg" class="genric-btn danger-border"><a href="home.html">Cancel Update</a>
                            </button>

                        </div>
                    </form>
                </div>
                <!--==End policy Registration==-->

                <!--category section-->
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!--Category Section-->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="auto.php" class="d-flex">
                                        <p>Auto Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="cargo.php" class="d-flex">
                                        <p>Cargo Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="life.php" class="d-flex">
                                        <p>Life Insurance </p>

                                    </a>
                                </li>
                                <li>
                                    <a href="health.php" class="d-flex">
                                        <p>Health Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="realestate.php" class="d-flex">
                                        <p>Real Estate Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="incomeprotection.php" class="d-flex">
                                        <p>Income Protection Insurance</p>

                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Quick Links</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p style="color: #f84b67">Update Company Details</p>

                                    </a>
                                </li>

                                <li>
                                    <a href="policyreg.php" class="d-flex">
                                        <p>User Policy Registration</p>

                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!--End category section-->
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
