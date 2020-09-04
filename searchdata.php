<!DOCTYPE html>
<html>
<head>
	<title>search</title>
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
		<div class="col-md-6">
			<form action="" method="post">
			 <input type="text" name="search" class="form-control mt-4" placeholder="Enter the search name">
			 <br>
			 <center><input type="submit" name="submit" class="btn btn-primary"></center>
			 </form>			
		</div>
	</div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){

	$searchdata = $_POST['search'];

	$file_name = file_get_contents('insert.json');
	$json_de = json_decode($file_name,true);
	/*echo "<pre>";
	print_r($json_de);*/
  /*  $check = 0; */
    /* foreach($json_de as $json){
     	if($json['name']==$searchdata){
     		 $num = $json['number'];
     		 $check = 1;
     	}

     }*/

     /*if($check == 1){
        echo $num;
    }
    else{
    	echo "Enter the right name";
    }*/

    $results = array_filter($json_de, function($pp) use ($searchdata){
    	return $pp['name'] == $searchdata;
    });
  /*  print_r($results);*/

    echo $results[0]['number'];
}

?>