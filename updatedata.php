<?php

$get_name = $_GET['name'];
$file_name = "insert.json";
$data_file = file_get_contents($file_name);
$array_file = json_decode($data_file,true);




foreach($array_file as $row){

	if($row['name'] == $get_name){
		$uname = $row['name'];
		$n_number = $row['number'];
		$a_address = $row['address'];
	}
}


if(isset($_POST['submit'])){
 echo $get_name = $_GET['name'];

$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];

$filename = "insert.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);




foreach($array as $key => $value){

	if($value['name'] == $get_name){
		$array[$key]['name'] = $name;
		$array[$key]['number'] = $number;
		$array[$key]['address'] = $address;
	}
}

file_put_contents('insert.json', json_encode($array));
header('location:viewdata.php');

}
?>
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
			
			<h1>Update form</h1>
			<form action="" method="post">
<input type="text" name="name" value="<?php echo $uname;?>" placeholder="enter the name" class="form-control" required><br><br>

<input type="number" name="number" value="<?php echo $n_number;?>" placeholder="enter the number" class="form-control" required><br><br>

<input type="text" name="address" value="<?php echo $a_address;?>" placeholder="enter the address" class="form-control" required><br><br>

				<input type="submit" name="submit" value="update data" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
</body>
</html>