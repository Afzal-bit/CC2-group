<?php  
    session_start();
    include_once('classes/Advertisement.php');  
    
    $advert = new Advertisement();
    $getId=$_GET['Id'];
    echo '<script>alert($id)</script>'; 
    $id=$getId; 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
   
    <link rel="stylesheet" href="css/car-details-style.css">
    
  </head>

  <body>
      

    <?php
            $result=$advert->getAdDetails($id);
            $images=$advert->getAdImages($id);
            $row = $result->fetch_assoc();
            



            
                
            ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><sup>Rs&nbsp;</sup><?php echo $row['Price'];?></h1>
            
          </div>
  
       
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="uploads/<?php echo $row['MainImage'];?>" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
            <?php
   

            while($imageRow = mysqli_fetch_array($images)) {
                
            ?>

              <div class="col-sm-4 col-6">
                <div>
                  <img src="uploads/<?php echo $imageRow['pathname'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <?php  }
        
		?>
              
              
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Condition</span>

                         <strong class="pull-right"><?php echo $row['CarCondition'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Brand</span>

                         <strong class="pull-right"><?php echo $row['Brand'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Model</span>

                         <strong class="pull-right"><?php echo $row['Model'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Year</span>

                         <strong class="pull-right"><?php echo $row['Year'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Mileage</span>

                         <strong class="pull-right"><?php echo $row['Mileage'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fuel</span>

                         <strong class="pull-right"><?php echo $row['Fuel'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Engine Capacity</span>

                         <strong class="pull-right"><?php echo $row['EngineCapacity'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Body</span>

                         <strong class="pull-right"><?php echo $row['Body'];?></strong>
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Transmission</span>

                         <strong class="pull-right"><?php echo $row['Transmission'];?></strong>
                    </div>
               </li>
               <br>
              <li>
              <input type="submit" value="WishList" name="Add"/>
              <?php
             // Add methods to DB
            if(isset($_POST['Add'])){
                $advert->updatewish($row['Id']);
            }
		      	?>
              </ul>
            </form>

            <br>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-8">
            <div class="tabs-content">
              <h4>Vehicle Description</h4>

              <p><?php echo $row['Description'];?></p>

              <br>
            </div>
          </div>

          <div class="col-md-4">

            <div class="tabs-content">
              <h4>Contact Details</h4>

              <p>
                <span>Name</span>
              
                <br>
              
                <strong><?php echo $row['SellerName'];?></strong>
              </p>
              
              <p>
                <span>Phone</span>
              
                <br>
                
                <strong>
                  <a href="tel:123-456-789"><?php echo $row['Contact'];?></a>
                </strong>
              </p>
              
              
              <p>
                <span>Email</span>
              
                <br>
                
                <strong>
                  <a href="mailto:admin@carrodio.com"><?php echo $row['Email'];?></a>
                </strong>
              </p>
            </div>

            <br>
          </div>
        </div>

        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>CarRodio</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
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
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    

    


    

  </body>
</html>
