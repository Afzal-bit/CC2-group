<?php  
    session_start();
    include_once('classes/Advertisement.php');  
    
    $advert = new Advertisement();  

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>PHPJabbers.com | Free Car Dealer Website Template</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/listing_style.css">

</head>

<body>




    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Car Dealer<em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="cars.html" class="active">Cars</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="team.html">Team</a>
                                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    <a class="dropdown-item" href="faq.html">FAQ</a>
                                    <a class="dropdown-item" href="terms.html">Terms</a>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Cars</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="#" id="contact">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Used/New:</label>

                                <select>
                                      <option value="">All</option>
                                      <option value="new">New vehicle</option>
                                      <option value="used">Used vehicle</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Vehicle Type:</label>

                                <select>
                                      <option value="">--All --</option>
                                      <option value="">--All --</option>
                                      <option value="">--All --</option>
                                      <option value="">--All --</option>
                                      <option value="">--All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Make:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Model:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Price:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Mileage:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Engine size:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Power:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Fuel:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Gearbox:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Doors:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Number of seats:</label>

                                <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 offset-sm-4">
                        <div class="main-button text-center">
                            <a href="#">Search</a>
                        </div>
                    </div>
                    <br>
                    <br>
                </form>
            </div>

            <!--****************************START***************************************-->

            

                <div class="row">
                <?php
            $result=$advert->adListing();

            while($row = mysqli_fetch_array($result)) {
                
            ?>

            


                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="uploads/<?php echo $row['mainimage'];?>" alt="">
                            </div>
                            <div class="down-content">
                                <span>
                                <sup>Rs&nbsp;</sup><?php echo $row['price'];?>
                            </span>

                                <h4><?php echo $row['title'];?></h4>

                                <p>
                                    <i class="fa fa-dashboard"></i> <?php echo $row['mileage'];?>Km &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cube"></i> <?php echo $row['enginecapacity'];?> cc &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> <?php echo $row['transmission'];?> &nbsp;&nbsp;&nbsp;
                                </p>

                                <ul class="social-icons">
                                    <li><a href="AdDetails.php?Id=<?php echo $row['Id'];?>">+ View Car</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php  }
        
		?>
               
                <br>

                

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>




</body>

</html>