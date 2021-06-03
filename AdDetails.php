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
        <br>
        <br>
        <br>
        <div class="container">
    			
		<div class="row">
			<div class="col-sm-3">
				<div class="rating-block">
					<h4>Average user rating</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div class="col-sm-3">
				<h4>Rating breakdown</h4>
		
			</div>			
		</div>			
		
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">
					<div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">carguy</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">good advert</div>
							<div class="review-block-description">this was nice in advert</div>
						</div>
					</div>
          
					<hr/>
			
				</div>
			</div>
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
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021 CarRodio
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/seller.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    


    

  </body>
</html>
