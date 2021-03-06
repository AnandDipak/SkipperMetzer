<?php
/*
Template Name: Contact us
*/
?>

<!doctype html>
<html lang="en">

<head>
    <title>Skipper Metzer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp-content/themes/SkipperMetzer/Css/Style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f3aebf1c73.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                defaultLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        .goog-te-gadget-simple {
            background-color: #fff;
            border-left: none;
            border-top: none;
            border-bottom: none;
            border-right: none;
            font-size: 12px;
            display: inline-block;
            padding-top: 0px;
            padding-bottom: 0px;
            cursor: pointer;
            zoom: 1;
            display: inline;
        }

        .goog-te-gadget img {
            display: none;
        }

        .goog-te-menu-value span {
            color: red;
        }

        .goog-te-menu-value span:nth-child(3) {
            display: none;
        }

        .goog-te-menu-value span:nth-child(5) {
            display: none;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <header class="bg-white mainNav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img src="/wp-content/themes/SkipperMetzer/Images/Logo-photo/skipper-metzer-logo.png" alt="Skipper Metzer" style="width: 120px;"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav ms-auto text-uppercase">
                                        <a class="nav-link " href="/">Home</a>
                                        <a class="nav-link" href="/about-us">About us</a>
                                        <a class="nav-link" href="/lin-light-flat-integral-dripper">Products</a>
                                        <a class="nav-link" href="/gallery">Gallery</a>
                                        <a class="nav-link active" aria-current="page" href="/contact-us">Contact us</a>
                                        <a class="nav-link" href="#">
                                            <div id="google_translate_element"></div>
                                        </a>
                                        <a class="nav-link" href="tel:+9118005722997">Toll Free: 1800 572 2997</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="topBanner">
                <div class="center-items" style=" background: #ffffffb3;width: 400px; text-align:center">
                    <h1 class=" mt-2 text-uppercase p-5">Contact Us</h1>
                </div>
            </section>

            <section class="ContactPage" style="background:transparent;">
                <div class="overlay">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <div class="p-5">
                                    <h1 class=""><span>Leave</span> me message</h2>
                                    <p class=" mt-5">
                                    We are eager to discuss your business needs, </br>
                                    And answer any questions you may have
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="p-5">
                                    <form class="ContactForm" id="ContactForm" method="post">
                                        <div class="row">
                                            <div class="col-md-12 mb-5">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" />
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <input type="text" name="phoneno" id="phoneno" class="form-control" placeholder="Phone Number" />
                                            </div>
                                            <div class="col-md-12 mb-5">
                                                <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-md-12 mb-5">
                                                <input type="submit" value="Submit" class="btn  w-100">
                                            </div>
                                            <div class="col-md-12 mb-5">
                                                <div class="response_msg "></div>
                                                <img src="/wp-content/themes/Skippermetzer/images/loading.gif" id="loading-img" style="display:none;">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="addressSec">
                <div class="demo">
                    <div class="container-fluid">
                        <div class="row mt-5 ">
                            <div class="col-md-12 text-center">
                                 <h2 class="h2Title">Our <span>Locations</span></h2>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div id="address-slider" class="owl-carousel">
                                    <div class="address">
                                        <div class="address-content">
                                            <h3 class="title">Anantapur Office</h3>
                                            
                                            <p class="description desAdd">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Door No. 2/208-2,
                                                Opp. Ayurvedic 
                                                Hospital, 2nd road,
                                                Anantapur- 
                                                515001, Andhra Pradesh
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-phone-alt"></i>
                                                +91 9959091614
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-envelope"></i>
                                                customercare@skippermetzer.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address">
                                        <div class="address-content">
                                            <h3 class="title">Kurnool</h3>
                                            
                                            <p class="description desAdd">
                                                <i class="fas fa-map-marker-alt"></i>
                                                H. No. 18/961,Telecom Nagar,
                                                Near Bishop Church,
                                                Kurnool – 
                                                518001, Andhra Pradesh
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-phone-alt"></i>
                                                +91 9959091614
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-envelope"></i>
                                                customercare@skippermetzer.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address">
                                        <div class="address-content">
                                            <h3 class="title">Chittoor </h3>
                                            
                                            <p class="description desAdd">
                                                <i class="fas fa-map-marker-alt"></i>
                                                H. No. 3-3-10,Padagamanu Street,
                                                Greamspet,
                                                Chittoor – 517002, 
                                                Andhra Pradesh
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-phone-alt"></i>
                                                +91 9959091614
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-envelope"></i>
                                                customercare@skippermetzer.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address">
                                        <div class="address-content">
                                            <h3 class="title">Kadapa</h3>
                                            
                                            <p class="description desAdd">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Door No. 43/26-1-1,
                                                Prakash Nagar,
                                                Kadapa – 516004, Andhra Pradesh
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-phone-alt"></i>
                                                +91 9959091614
                                            </p>
                                            <p class="description">
                                                <i class="fas fa-envelope"></i>
                                                customercare@skippermetzer.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="mainfooter mt-5">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-3 rightB">
                        <div class="innerBox">
                            <img src="/wp-content/themes/SkipperMetzer/Images/Logo-photo/ind-israel_logo.png" alt="" class="img-responsive" style="max-width:260px" />
                            <p><strong>Skipper Metzer India LLP</strong> is an Indo-Israeli joint venture between M/s Skipper Limited, India
                                and M/s Metzer, Israel, to foray into Micro Irrigation
                                market in India with an objective to become a key
                                player and bring in new technologies in the
                                growing irrigation market to help farmers.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 rightB">
                        <div class="innerBox">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about-us">About Us </a></li>
                                <li><a href="/lin-light-flat-integral-dripper">Products</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 rightB">
                        <div class="innerBox">
                            <h4>Our Products</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><a href="/">LIN</a></li>
                                        <li><a href="/">Vardit Pc Dripper </a></li>
                                        <li><a href="/">Adi</a></li>
                                        <li><a href="/">Compact </a></li>
                                        <li><a href="/">Online Drippers </a></li>
                                        <li><a href="/">Brass Sprinklers </a></li>
                                        <li><a href="/">Compact Drip Laterals </a></li>
                                        <li><a href="/">Disc Filter </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a href="/">Gali </a></li>
                                        <li><a href="/">HDPC Pipes & Fittings </a></li>
                                        <li><a href="/">Hydro Cyclone Filter</a></li>
                                        <li><a href="/">Lin Drip Line</a></li>
                                        <li><a href="/">Gravel Filter</a></li>
                                        <li><a href="/">Mini Sprinkler</a></li>
                                        <li><a href="/">Screen Filter</a></li>
                                        <li><a href="/">Lateral 32mm</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 rightB">
                        <div class="innerBox">
                            <h4>Contact Us</h4>
                            <address>
                                <p class="addresss"><i class="fas fa-map-marker-alt"></i>
                                    Skipper Metzer India LLP
                                    44-67, Sy. No 367/1/A, IDA, MoulaAli,
                                    Hyderabad-500040, Telangana, India.
                                </p>
                                <p class="addresss">
                                    <i class="fas fa-phone-alt"></i>
                                    +91 40 27243427, +91 9989773604
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border-bottom w-100"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="innerBox">
                            <address>
                                <p><i class="fas fa-envelope me-3"></i> customercare@skippermetzer.com</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="innerBox text-center">
                            <h4 class="text-info">Call Us On</h4>
                            <p class="text-white fs-3">18005722997</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="innerBox">
                            <div class="social-icons">
                                <div class="social-icon"><i class="fab fa-facebook-f"></i></div>
                                <div class="social-icon"><i class="fab fa-twitter"></i></div>
                                <div class="social-icon"><i class="fab fa-instagram"></i></div>
                                <div class="social-icon"><i class="far fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12 text-center">
                        <p style="font-size:14px;" class="p-2">Copyright 2021 Skipper Metzer, Designed & Developed by Annamraju Designs & Technologies</p>
                    </div>
                </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>    
    <script type="text/javascript">
         
          $(document).ready(function(){
          
            $("#address-slider").owlCarousel({
                items:4,
                itemsDesktop:[1000,4],
                itemsDesktopSmall:[980,3],
                itemsTablet:[768,2],
                itemsMobile:[650,1],
                pagination:true,
                navigation:false,
                slideSpeed:1000,
                autoPlay:true
            });
        });

        $(document).ready(function(){
            $("#ContactForm").on("submit",function(e){
            e.preventDefault();

            $("#loading-img").css("display","block");
            var sendData = $(this).serialize();
                $.ajax({
                type: "POST",
                url: "/wp-content/themes/Skippermetzer/scripts/get_response.php",
                data: sendData,
                success: function(data){
                        $("#loading-img").css("display","none");
                        $(".response_msg").text(data);
                        $(".response_msg").slideDown().fadeOut(4000);
                        $("#ContactForm").find("input[type=text], input[type=email], textarea").val("");
                    }
                });
            });
        });
         </script>
</body>

</html>