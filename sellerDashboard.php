<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==false) {
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/seller.css">
    <link rel="stylesheet" href="css/fontawesome.css">

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
                        
                     
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" onclick="toggle()">Advertisements</a>

                            <div class="dropdown-menu" id="myDropdown">
                            <a class="dropdown-item" href="addAvert.php">Add</a>
                                <a class="dropdown-item" href="AdDetails.php">Approved</a>
                                <a class="dropdown-item" href="pendingAds.html">Pending Approval</a>
                
                            </div>
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
            <br>
                    <br>
                    <h1> seller all ads </h1>
                    
        </div>
    </div>
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

    <script src="js/seller.js"></script>
</body>

</html>
