<?php

if(isset($_POST['submit'])){
   
$iname = $_POST['name'];
$inumber = $_POST['number'];
$iaddress = $_POST['address'];

$filedata = file_get_contents('insert.json');
$decode_date = json_decode($filedata,true);
/*echo "<pre>";
print_r($decode_date);
echo "</pre>"*/;
/*$update_array = array();*/
$p=0;
foreach($decode_date as $key => $value){

	if($value['number'] == $inumber){
		$p++;
	}
}

if($p!=0){
	?>
	<script type="text/javascript">
		alert('number already exist');
	</script>
	<?php
}


else{




	if(empty($_POST['name'])){
		$massage = "Enter the name";
	}
	if(empty($_POST['number'])){
		$mass = "Enter the number";
	}
	if(empty($_POST['address'])){
		$ma = "Enter the address";
	}
	if(file_exists('insert.json')){
		$current_data = file_get_contents('insert.json');
		$array_data = json_decode($current_data,true);
		$extra = array(
           'name' => $_POST['name'],
           'number' => $_POST['number'],
           'address' => $_POST['address']

		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		if(file_put_contents('insert.json', $final_data)){
			echo "success";
		}
	}
	else{
		echo "file not exist";
	}

  }
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
			<?php echo @$massage; ?>
			<?php echo @$mass; ?>
			<?php echo @$ma; ?>
			<h1>form</h1>
			<form action="insertjson.php" method="post">
				<input type="text" name="name" placeholder="enter the name" class="form-control" required><br><br>
				<input type="number" name="number" placeholder="enter the number" class="form-control" required><br><br>
				<input type="text" name="address" placeholder="enter the address" class="form-control" required><br><br>
				<input type="submit" name="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
</body>
</html>