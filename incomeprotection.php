<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<?php
include 'connect.php';
require 'comment.php';
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
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="blog_details">
                           <h1 style="color: black">Income Protection Insurance</h1>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i> Health, Lifestyle</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> source www.myinsurance.co.ke </a></li>
                            </ul>
                            <p class="excert">
                                Workers' compensation, or employers' liability insurance, is compulsory in some countries Coverage typically includes:
                            </p>
                            <ul>
                            <li>* Workers' compensation insurance replaces all or part of a worker's wages lost and accompanying medical expenses incurred because of a job-related injury.</li>
                                <li>* Disability insurance policies provide financial support in the event of the policyholder becoming unable to work because of disabling illness or injury. It provides monthly support to help pay such obligations as mortgage loans and credit cards. Short-term and long-term disability policies are available to individuals, but considering the expense, long-term policies are generally obtained only by those with at least six-figure incomes, such as doctors, lawyers, etc. Short-term disability insurance covers a person for a period typically up to six months, paying a stipend each month to cover medical bills and other necessities.</li>
                                <li>* Long-term disability insurance covers an individual's expenses for the long term, up until such time as they are considered permanently disabled and thereafter Insurance companies will often try to encourage the person back into employment in preference to and before declaring them unable to work at all and therefore totally disabled.</li>
                                <li>* Disability overhead insurance allows business owners to cover the overhead expenses of their business while they are unable to work.</li>
                                <li>* Total permanent disability insurance provides benefits when a person is permanently disabled and can no longer work in their profession, often taken as an adjunct to life insurance.</li>
                            </ul>
                               <a href="policyreg.php" class="genric-btn success circle" style="background-color: black"><strong>Apply Policy</strong></a>
                        </div>
                    </div>

          <!--Comment Area-->
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="incomeprotection.php" method="post" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="comname" id="name" type="text" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="comemail" id="email" type="email" placeholder="Email" required >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submitcom" class="button button-contactForm">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Comment-->
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
                        <!--Category Section-->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="auto.php" class="d-flex">
                                        <p >Auto Insurance</p>
                                     
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
                                        <p style="color: #f84b67">Income Protection Insurance</p>
                                     
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
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
</body></html>