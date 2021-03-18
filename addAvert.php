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
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/seller.css" />
    <title>Animated Login</title>
</head>

<body class="advert_body">
    <h2>Add Advertisement</h2>
    <br>
    <form class="addAdvert_form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="row-1">Vehicle Title</label>
            <div class="col-sm-4">
                <input type="text" name="vehicletitle" class="form-control" maxlength="30" required>
            </div>
            <label class="col-sm-2 control-label">Brand</label>
            <div class="col-sm-4">
            <select class="selectpicker" name="brandname" required>
            <option placeholder="" value="">Select</option>
            <option> Honda </option>
            <option> Toyota </option>
            <option> BMW </option>
            <option> Mercedes Benz </option>
            <option> Audi </option>
            <option> Chrylser </option>
            
            
            </select>
            </div>

            <label class="col-sm-2 control-label">Condition</label>
            <div class="col-sm-4">
                <select class="selectpicker" name="condition" required>
            <option placeholder="" value="">Select</option>
            <option> Brand New </option>
            <option> Used </option>
            <option> Reconditioned </option>
            
            </select>
            </div>

        </div>
        <br>
        <br>

        <div class="hr-dashed"></div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Vehicle Description</span></label>
        <div class="col-sm-10">
        <textarea class="form-control-text" name="vehicledescription" cols="100" rows="6" required></textarea>
        </div>
    </div>
    <br>
    <br>

        <div class="form-group">
            <label class="row-1">Price (in Rs)</label>
            <div class="col-sm-4">
                <input type="text" name="price" class="form-control" required>
            </div>
            <label class="col-sm-2 control-label">Fuel Type</label>
            <div class="col-sm-4">
                <select class="selectpicker" name="fueltype" required>
            <option placeholder="" value="">Select</option>
            <option> Petrol </option>
            <option> Diesel </option>
            <option> CNG </option>
            <option> Hybrid </option>
            <option> Electric </option>
            
            
            
            </select>
            </div>

            <label class="row-1">Model</label>
            <div class="col-sm-4">
                <input type="text" name="model" class="form-control" required>
            </div>

        </div>
        <br>
        <br>
        <div class="form-group">
            <label class="row-1">Model Year</label>
            <div class="col-sm-4">
                <input type="text" name="year" class="form-control" required>
            </div>
            <label class="col-sm-2 control-label">Transmission</label>
            <div class="col-sm-4">
                <select class="selectpicker" name="transmission" required>
            <option placeholder="" value="">Select</option>
            <option> Manual </option>
            <option> Automatic </option>
            
            
            
            </select>
            </div>

            <label class="row-1">Mileage</label>
            <div class="col-sm-4">
                <input type="text" name="mileage" class="form-control" required>
            </div>

        </div>
        <br>
        <br>

        <div class="form-group">
            <label class="row-1">Engine Capacity</label>
            <div class="col-sm-4">
                <input type="text" name="eng_capacity" class="form-control" required>
            </div>
            <label class="col-sm-2 control-label">Body Type</label>
            <div class="col-sm-4">
                <select class="selectpicker" name="body_type" required>
            <option placeholder="" value="">Select</option>
            <option> Hatchback </option>
            <option> Sedan </option>
            <option> SUV </option>
            <option> Coupe </option>
            <option> Convertible </option>
            <option> Wagon </option>
            <option> Saloon </option>
            <option> MPV </option>

            
            
            
            </select>
            </div>

        </div>
        <br>
        <br>

        <p>Upload Images</P><br>
        <div class="form-group">
<div class="col-sm-4">
Image 1 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
</div>
<div class="col-sm-4">
Image 2 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
</div>
<div class="col-sm-4">
Image 3 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
</div>
</div>

<br>
<div class="form-group">
<div class="col-sm-4">
Image 4 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
</div>
<div class="col-sm-4">
Image 5 &nbsp; <input type="file" class="img_up" name="fileUpload[]">
</div>

</div>

<p>Contact Details</P><br>

<div class="form-group">
            <label class="row-1">Phone</label>
            <div class="col-sm-4">
                <input type="text" name="phone" class="form-control" required>
            </div>
</div>

<div class="form-group">
            <label class="row-1">City</label>
            <div class="city_cont">
                <input type="text" name="address" class="form-control" required>
            </div>
</div>

<input type="submit" name="add" value="post">
    </form>
    <script src="js/seller.js"></script>
</body>

</html>