<!DOCTYPE html>
<html>
<head>
	<title>json</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<table class="table table-striped">
				<tr>
					<th>Sr NO</th>
					<th>Name</th>
					<th>Number</th>
					<th>Address</th>
					<th>Delete/Edit</th>
				</tr>

				<?php

$filename = "insert.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);
echo "<pre>";
print_r($array);
echo "</pre>";
echo $encode = json_encode($array);
echo "<pre>";
print_r($encode);
echo "</pre>";
$i=1;
foreach($array as $row){
	/*$qry = "INSERT INTO data(name,number,address) VALUES('".$row["name"]."','".$row["number"]."','".$row["address"]."')";
	$run = mysqli_query($conn,$qry);*/



?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row["name"];?></td>
					<td><?php echo $row["number"];?></td>
					<td><?php echo $row["address"];?></td>
					<td><a href="delete.php?name=<?php echo $row["name"]?>" class="btn btn-primary">Delete</a><a href="updatedata.php?name=<?php echo $row["name"]?>" class="btn btn-primary">Edit</a></td>

				</tr>
				<?php
				$i++;
			   }
			?>
			</table>
		</div>
	</div>
</div>
</body>
</html>