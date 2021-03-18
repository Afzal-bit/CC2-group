<?php  
    session_start();
    include_once('classes/Advertisement.php');  
       
    $advert = new Advertisement();  
?>

<!DOCTYPE html>
<html>
<head>

<title>Advertisements</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/tableStyle.css">
 
</head>

<body>

<h1>Pending Approval</h2>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>

            <th>Title</th>
            <th>Brand</th>
			<th>Model</th>
            <th>Fuel</th>
			<th>Price</th>
            <th>Seller</th>
            <th>Action</th>
           
        </tr>
        </thead>
		<?php
		
		$result=$advert->details();

		while($row = mysqli_fetch_array($result)) {
?>
			<tr>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['brand'];?></td>
			<td><?php echo $row['model'];?></td>
			<td><?php echo $row['fuel'];?></td>

            <td><?php echo $row['price'];?></td>
			<td><?php echo $row['sellername'];?></td>
			<td><a href="adConfirmation.php" id=<?php echo $row->id;?>>
            <i class="fa fa-eye" style="font-size:30px;color:purple"></i></a></td>
			
			
		<?php  }
		?>
		
        
    </table>
</div>


</body>

</html>