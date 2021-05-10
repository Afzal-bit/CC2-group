<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==false) {
    header('Location: index.php');
    exit;
}else if($_SESSION['level']=="Admin"){
    header('Location: adimin.php');
    exit;

 

}else if($_SESSION['level']=="Buyer"){
    header('Location: buyer.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/seller.css">


</head>

<body>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                       
                        <a href="index.html" class="logo">Car<em>Rodio</em></a>
                    
                        <ul id="toggle_nav" class="nav" >
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="listing.php">Listings</a></li>
                            <li class="dropdown">
                                <a id="sub_menu" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Advertisements</a>
                              
                                <div id="myDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="addAvert.php">Add Advertisement</a>
                                    
                                    <a class="dropdown-item" href="approved.php">Approved</a>
                                    <a class="dropdown-item" href="terms.html">Pending Approval</a>
                                </div>
                            </li>


                            
                            <li><a href="listings.php.php">Fleet</a></li> 

                            <li class="dropdown">
                                <a id="sub_menu1" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                              
                                <div id="myDropdown1" class="dropdown-menu">
                                    <a class="dropdown-item" href="myAccount.php">My Account</a>
                                   
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                            </li>

                        </ul>        
                        <a id="ham_icon" class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
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

