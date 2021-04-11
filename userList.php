<?php  
    session_start();
    include_once('classes/User.php');  
       
    $advert = new User();  
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

            <th>Username</th>
            <th>Email</th>
			<th>Level</th>
            <th>Phone</th>
			
        </tr>
        </thead>
		<?php
		


		$result=$advert->details();

		while($row = mysqli_fetch_array($result)) {
?>
			<tr>
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Level'];?></td>
			<td><?php echo $row['Phone'];?></td>

            
			
			
		<?php  }
		?>
		
        
    </table>
</div>


</body>

</html>