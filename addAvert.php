<?php
session_start();
include_once('classes/Advertisement.php'); 
include_once('db/dbConnection.php'); 
$advert = new Advertisement();  

$db;
$db = new dbConnection();
$db = $db->returnConnection();
if(isset($_POST['add'])){

    $title=$_POST['vehicletitle'];
	$model=$_POST['model'];
	$brand=$_POST['brandname'];
	$price=$_POST['price'];
    $condition=$_POST['condition'];
	$year=$_POST["year"];

    $transmission=$_POST['transmission'];
	$fuel=$_POST['fueltype'];
	$mileage=$_POST['mileage'];
	$body=$_POST['body_type'];
    $engineCapacity=$_POST['eng_capacity'];
	$description=$_POST["vehicledescription"];

    $contact=$_POST['phone'];
	$location=$_POST['address'];
    $approved="No";
    $sellName=$_SESSION['name'];
    $email=$_SESSION['email'];

    if(!empty(array_filter($_FILES['fileUpload']['name'])) || empty($_POST['vehicletitle'])){
        $advert->setTitle($title);
        $advert->setModel($model);
		$advert->setBrand($brand);
        $advert->setPrice($price);
        $advert->setCondition($condition);

        $advert->setYear($year);
        $advert->setTransmission($transmission);
		$advert->setFuel($fuel);
        $advert->setMileage($mileage);
        $advert->setBody($body);

        $advert->setEngineCapacity($engineCapacity);
        $advert->setDescription($description);
        $advert->setSName($sellName);
        $advert->setEmail($email);
		$advert->setContact($contact);
        $advert->setLocation($location);
        $advert->setApproved($approved);
        
        $added = $advert->addAdvert();
        $targetDir = "uploads/"; 
        $allowTypes = array('jpg','png','jpeg'); 

        if($added !=null){
            $adId=$added['Id'];

            foreach($_FILES['fileUpload']['name'] as $key=>$val){ 
                // File upload path 
                $fileName = basename($_FILES['fileUpload']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName; 
                 
                // Check whether file type is valid 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to server 
                    if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$key], $targetFilePath)){ 
                        $query = "INSERT INTO ad_images SET Ad_Id='$adId', PathName='$fileName' " ;
                        $run = $db->query($query) or die("Error in saving image".$connection->error);
                    
                    }else{ 
                        echo '<script>alert("Error posting advertisement!")</script>';
                    } 
                }
            }
            echo "<script>alert('Add Successfully added')</script>";


        }else if(!$added){
            echo "<script>alert('Could not connect to database')</script>";
        }


    
}else{
    echo "<script>alert('Please fill all fields')</script>";
}

}

?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>HTML CSS Register Form</title>
        <link rel="stylesheet" href="css/addAdvert_style.css">
    </head>

    <body>
        <form class="signup-form" action="" method="post" enctype="multipart/form-data">

            <!-- form header -->
            <div class="form-header">
                <h1>Create Advertisement</h1>
            </div>

            <!-- form body -->
            <div class="form-body">

                <!-- Title and Brand -->
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="title" class="label-title">Title</label>
                        <input type="text" name="vehicletitle" id="title" class="form-input" placeholder="Title" required="required" />
                    </div>

                    <div class="form-group right">
                        <label class="label-title">Brand</label>
                        <select class="form-input" name="brandname" id="level" required>
                  <option placeholder="" value="">Select</option>
            <option> Honda </option>
            <option> Toyota </option>
            <option> BMW </option>
            <option> Mercedes Benz </option>
            <option> Audi </option>
            <option> Chrylser </option>
                </select>
                    </div>

                </div>

                <div class="form-group">
                    <label class="label-title">Vehicle Description</span></label>
                    <div class="col-sm-10">
                        <textarea class="form-input-text-area" name="vehicledescription" cols="100" rows="6" required></textarea>
                    </div>
                </div>


                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="title" class="label-title">Model</label>
                        <input type="text" name="model" id="model" class="form-input" placeholder="Model" required="required" />
                    </div>

                    <div class="form-group right">
                        <label class="label-title">Condition</label>
                        <select class="form-input" name="condition" id="level" required>
              <option placeholder="" value="">Select</option>
            <option> Brand New </option>
            <option> Used </option>
            <option> Reconditioned </option>
            </select>
                    </div>
                </div>



                <!-- Price and Fuel Type -->
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="price" class="label-title">Price</label>
                        <input type="text" name="price" id="price" class="form-input" placeholder="Price in Rs" required="required">
                    </div>
                    <div class="form-group right">
                        <label class="label-title">Fuel Type</label>
                        <select class="form-input" name="fueltype" id="level" required>
                  <option placeholder="" value="">Select</option>
            <option> Petrol </option>
            <option> Diesel </option>
            <option> CNG </option>
            <option> Hybrid </option>
            <option> Electric </option>
                </select>
                    </div>
                </div>

                <!-- Year and Transmission -->
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="year" class="label-title">Model Year</label>
                        <input type="text" name="year" id="year" class="form-input" placeholder="Year" required="required">
                    </div>
                    <div class="form-group right">
                        <label class="label-title">Transmission</label>
                        <select class="form-input" name="transmission" id="level" required>
                 <option placeholder="" value="">Select</option>
            <option> Manual </option>
            <option> Automatic </option>
                </select>
                    </div>
                </div>




                <!-- Images -->
                <div class="form-group">

                    <label for="choose-file" class="label-title">Upload up to 5 Images</label> <br> Image 1 &nbsp; <input type="file" class="img_up" name="fileUpload[]">


                </div>



                <div class="horizontal-group">
                    Image 2 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
                </div>
                <br>

                <div class="horizontal-group">
                    Image 3 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
                </div>
                <br>

                <div class="horizontal-group">
                    Image 4 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
                </div>
                <br>

                <div class="horizontal-group">
                    Image 5 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
                </div>
                <br>



                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="year" class="label-title">Seller Phone</label>
                        <input type="text" name="phone" id="phone" class="form-input" placeholder="Phone" required="required">
                    </div>
                    <div class="form-group right">
                        <label for="year" class="label-title">Seller City</label>
                        <input type="text" name="address" id="city" class="form-input" placeholder="City" required="required">
                    </div>
                </div>



            </div>

            <!-- form-footer -->
            <div class="form-footer">

                <button type="submit" name="add" class="btn">Post Advertisement</button>
            </div>

        </form>


    </body>

    </html>
