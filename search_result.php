<?php  


    include_once('classes/Advertisement.php');
    include_once('db/dbConnection.php');  
    
    $advert = new Advertisement(); 
    $db;
    $db = new dbConnection();
    $db = $db->returnConnection(); 
    $query='select * from advertisement';
    $where='where';
    $and='';
    $q;
    $result;
    if(isset($_POST["search"])){
        $cbody=$_POST["cBody"];
    if(!empty($_POST["cCondition"]) || !empty($_POST["cBody"]) ||
    !empty($_POST["mileage"]) || !empty($_POST["transmission"])){
        
    
        if(!empty($_POST["cCondition"])){
            $and.=' AND CarCondition=$_POST["cCondition"]';

        }
        if(!empty($_POST["body"])){
            //$and.=' Body=$_POST["body"]';
        }
        if(!empty($_POST["mileage"])){
            $and.=' AND Mileage=$_POST["mileage"]';
        }
        if(!empty($_POST["transmission"])){
            $and.=' AND Transmission=$_POST["transmission"]';
        }
        
        //$q=$query.''.$where.''.$and;
        $q="select Id, MainImage,Title,Price,Mileage,EngineCapacity,Transmission,Body from advertisement where Body=$cbody";
        $result = mysqli_query($db, $q);

    }else{
        $q='select * from advertisement';
        $result = mysqli_query($db, $q);

    }
        
    }
    if($result==NULL){
        $q='select * from advertisement LIMIT 2';
        $result = mysqli_query($db, $q);
    }
        



    

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

    <title>Search Results</title>

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
                       
                       <a href="index.html" class="logo">Car<em>Rodio</em></a>
                   
                       <ul id="toggle_nav" class="nav" >
                           <li><a href="sellerDashboard.php" class="active">Home</a></li>
                           <li><a href="listing.php">Listings</a></li>
                           <li><a href="logout.php">Logout</a></li>
                           


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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>Search Results</em></h2>
                        <p>Your searches will appear here!</p>
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
            
            <!--****************************START***************************************-->

            

                <div class="row">
                <?php
        

            while($row = mysqli_fetch_array($result)) {
                
            ?>

            


                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="uploads/<?php echo $row['MainImage'];?>" alt="">
                            </div>
                            <div class="down-content">
                                <span>
                                <sup>Rs&nbsp;</sup><?php echo $row['Price'];?>
                            </span>

                                <h4><?php echo $row['Title'];?></h4>

                                <p>
                                    <i class="fa fa-dashboard"></i> <?php echo $row['Mileage'];?>Km &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cube"></i> <?php echo $row['EngineCapacity'];?> cc &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> <?php echo $row['Transmission'];?> &nbsp;&nbsp;&nbsp;
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
                        Copyright © 2021 CarRodio
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <script src="js/seller.js"></script>
</body>

</html>