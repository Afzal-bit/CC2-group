<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==false) {
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/homes1.css" />


</head>

<body>
<header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>CarRodio</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                    <span class="sr-only">(current)</span>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addAvert.html">Listings</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" onclick="toggle()">About</a>

                            <div class="dropdown-menu" class="myDropdown">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="faq.html">FAQ</a>
                                <a class="dropdown-item" href="terms.html">Terms</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Account">Account</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main-banner header-text" id="top">
        <div class="slideshow-container">

            
        <div class="slide slide1">
                <div class="img-fill">
                    <div class="text-slide">
                        <h6>Welcome to CarRodio</h6>
                        <h4>Sell your vehicle<br> at the best Market value<br> with easy steps </h4>
                        <p>Sell your car and upgrade to a newer car. Using CarRodio you can Sell and Buy too!</p>
                        <a href="home.html" class="round-button">contact us</a>
                    </div>
                </div>
            </div>


            <div class="slide slide2">
                <div class="img-fill">
                    <div class="text-slide">
                    <h6>Welcome to CarRodio</h6>
                        <h4>Sell your vehicle<br> at the best Market value<br> with easy steps </h4>
                        <p>Sell your car and upgrade to a newer car. Using CarRodio you can Sell and Buy too!</p>
                         <a href="contact.html" class="round-button">contact us</a>
                    </div>
                </div>
            </div>

            <div class="slide slide3">
                <div class="img-fill">
                    <div class="text-slide">
                    <h6>Welcome to CarRodio</h6>
                        <h4>Sell your vehicle<br> at the best Market value<br> with easy steps </h4>
                        <p>Sell your car and upgrade to a newer car. Using CarRodio you can Sell and Buy too!</p>
                        <a href="contact.html" class="round-button">contact us</a>
                    </div>
                </div>
            </div>

            <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
    </div>


    <!-- Search Form -->

    <div class="s007">
        <form>
            <div class="inner-form">

                <div class="advance-search">
                    <span class="desc">Advanced Search</span>
                    <div class="row">
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                      <option placeholder="" value="">ACCESSORIES</option>
                      <option>ACCESSORIES</option>
                      <option>SUBJECT B</option>
                      <option>SUBJECT C</option>
                    </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                      <option placeholder="" value="">COLOR</option>
                      <option>GREEN</option>
                      <option>SUBJECT B</option>
                      <option>SUBJECT C</option>
                    </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                      <option placeholder="" value="">SIZE</option>
                      <option>SIZE</option>
                      <option>SUBJECT B</option>
                      <option>SUBJECT C</option>
                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row second">
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                      <option placeholder="" value="">SALE</option>
                      <option>SALE</option>
                      <option>SUBJECT B</option>
                      <option>SUBJECT C</option>
                    </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                      <option placeholder="" value="">TIME</option>
                      <option>THIS WEEK</option>
                      <option>SUBJECT B</option>
                      <option>SUBJECT C</option>
                    </select>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                      <option placeholder="" value="">TYPE</option>
                      <option>TYPE</option>
                      <option>SUBJECT B</option>
                      <option>SUBJECT C</option>
                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row third">
                        <div class="input-field">
                            <button class="btn-search">Search</button>
                            <button class="btn-delete" id="delete">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ********************** About Us *************************** -->

    <div class="about-us">
        <div class="container">
            <div class="more-info">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <img src="images/bg1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="right-content">
                            <span>About Us</span>
                            <h2>Get to know who <em>we are</em></h2>
                            <p>This platform is created to make to buyer to buy and seller to sell a car with less effort and cost. 
                                 this platform only verfies valid seller Ads in order to deliver a good vehicle to buyer</p>
                                 <a href="aboutUs.html" class="round-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***************   Testimonials ****************** -->
    <div class="testimonials-clean">
        <div class="container">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>What they say <em>about us</em></h2>
                    <span>testimonials from our clients</span>
                </div>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author">
                        <h5 class="name">Afzal</h5>
                        <p class="title">Buyer</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author">
                        <h5 class="name">Poorna</h5>
                        <p class="title">Seller</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author">
                        <h5 class="name">Dulana</h5>
                        <p class="title">Buyer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ******************** Footer Starts Here ****************** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                <h4>CarRodio</h4>
                    <p>Where buyer find Quality vehicle for Fair price and seller sell their vehicel for a fair price.</p>

                </div>

                <div class="col-md-3 footer-item">
                    <h4>Quick Links</h4>
                    <ul class="menu-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item last-item">
                    <h4>Contact Us</h4>
                    <div class="contact-form">
                        <form id="contact footer-contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="round-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright © 2021
                    </p>
                </div>
            </div>
        </div>
    </div>




    <script src="js/home.js"></script>
</body>


</html>
