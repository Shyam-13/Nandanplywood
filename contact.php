<?php
//including the database connection file
include_once("DB_Message.php");


if(isset($_POST['Submit'])) { 
  $First_Name = mysqli_real_escape_string($mysqli, $_POST['First_Name']);
  $Last_Name = mysqli_real_escape_string($mysqli, $_POST['Last_Name']);
  $Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
  $Phone_Number = mysqli_real_escape_string($mysqli, $_POST['Phone_Number']);
  $Message = mysqli_real_escape_string($mysqli, $_POST['Message']);
  
    
  // checking empty fields
  if(empty($First_Name) || empty($Last_Name) || empty($Email) || empty($Phone_Number) || empty($Message)   ) {
    
    if(empty($Full_Name)) {
      echo "<font color='red'>Name field is empty.</font><br/>";
    }
    if(empty($Last_Name)) {
      echo "<font color='red'>Name field is empty.</font><br/>";
    }
    
    if(empty($Email)) {
      echo "<font color='red'>email field is empty.</font><br/>";
    }
    
    if(empty($Phone_Number)) {
      echo "<font color='red'>subject field is empty.</font><br/>";
    }
    
    if(empty($Message)) {
      echo "<font color='red'>messgae field is empty.</font><br/>";
    }

    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  } else { 
    // if all the fields are filled (not empty) 
      
    //insert data to database 
    $result = mysqli_query($mysqli, "INSERT INTO  np_contact_message(First_Name,Last_Name,Email,Phone_Number,Message) VALUES('$First_Name','$Last_Name','$Email','$Phone_Number','$Message')");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Work Field - Corporate Category Bootstrap Responsive Web Template - Contact Us : W3Layouts</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                   <img src="assets/images/Nandan-Logo-Png.png" alt="" width="160" height="62" style="filter: brightness(140%);">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                     <form action="https://www.google.com/search" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit">Search</button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                </ul>
            </div>
        </div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container pt-md-5 pt-4">
            <div class="title-heading-w3 text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h3 class="title-style">Contact Us</h3>
            </div>
            <div class="main-grid-contact">
                <div class="row">
                    <!-- map -->
                    <div class="col-lg-6 mt-lg-0 mt-3 order-lg-first order-last">
                        <div class="map">
                             <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.341076487268!2d70.7941946!3d22.2835131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb007a0c896f%3A0x7786cd752f65e71f!2sNandan%20Plywood!5e0!3m2!1sen!2sin!4v1710000000000" 
  width="600" 
  height="450" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>


                        </div>
                    </div>
                    <!-- contact form -->
                    <div class="col-lg-6 content-form-right p-0 order-lg-last order-first">
                        <div class="form-w3ls p-5" style="background: #293148;">
                            <h4 class="mb-4 sec-title-w3">Send us a message</h4>
                            <form id="contact" action="contact.php" method="POST" enctype="multipart/form-data"> 
                                <div class="row mb-3">
                                    <div class="col-sm-6 form-group mb-sm-0 mb-3">
                                        <input class="form-control" type="text" name="First_Name" id="First_Name" class="First_Name" placeholder="First Name" required="">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" type="text" name="Last_Name" id="Last_Name" class="Last_Name"
                                            placeholder="Last Name" required="">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="email" name="Email" id="Email" Class="Email"
                                        placeholder="Email" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="text" name="Phone_Number" id="Phone_Number" Class="Phone_Number" placeholder="Phone Number" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Message" id="Message" Class="Message"
                                        placeholder="Message" required=""></textarea>
                                </div>
                                <div class="input-group1 text-end mt-4" >
                                    <!-- input type="button" name="Submit" value="submit" id="btn" style="background-color: white; color: #293148;"> -->
                                    <button class="btnsubmit btnsubmit-style" name="Submit" value="submit" id="btn">Submit</button>
                                    <!-- <button class="btn btn-style" type="submit">Submit </button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <!-- support -->
    <div class="support pt-5 pb-2" id="support">
        <div class="container">
            <h3 class="title-style text-center mb-5">About our Shop</h3>
            <div class="row support-bottom text-center mb-5 justify-content-center">
                <div class="col-lg-4 col-sm-6 support-grid">
                    <span class="fa fa-shopping-cart"></span>
                    <h5 class="text-uppercase mt-4 mb-2">Support</h5>
                    <p>Opp.Atul motors(marutishowroom),beside silver chambers , Tagore rode, Rajkot</p>
                    
                </div>
                <div class="col-lg-4 col-sm-6 support-grid mt-sm-0 mt-5">
                    <span class="fa fa-comments"></span>
                    <h5 class="text-uppercase mt-4 mb-2">Online Support</h5>
                    <p>Nandanplaywood9590@gmail.com</p>
                    
                </div>
                <div class="col-lg-4 col-sm-6 support-grid mt-lg-0 mt-5">
                    <span class="fa fa-phone fa-rotate-30 " fa-rotate-270 aria-hidden="true"></span>
                    <h5 class="text-uppercase mt-4 mb-2">Any Questions, Call hear</h5>
                    <p>+91 98248 56196</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- support -->

    <!-- footer -->
    <footer class="w3l-footer">
        <div class="shape-footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                             M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
        <div class="w3l-footer-16 py-5">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-5 pe-lg-6">
                        <h3>About Us</h3>
                        <p class="mt-3">We cordially invite you to visit our shop and experience the wonderful products and services we have to offer. At Nandan Plywood, we strive to create a memorable shopping experience for our valued customers.</p>
                        <div class="columns-2 mt-4 pt-1">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li><a href="#github"><i class="fab fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-6">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Quick Link</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="about.php">Our Clients</a></li>
                                    <li><a href="contact.php">Location</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-7 column">
                                <h3>Contact Info</h3>
                                <ul class="footer-contact-list">
                                    <li class="">Opp.Atul motors(marutishowroom),beside silver chambers , Tagore rode, Rajkot</li>
                                    <li class="mt-2">+91 98248 56196</li>
                                    <li class="mt-2">Nandanplaywood9590@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
        
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>