<?php
$conn = mysqli_connect("localhost","root","","fetchjson");
$filename = "insert.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);
echo "<pre>";
print_r($array);
echo "</pre>";
foreach($array as $row){
	$qry = "INSERT INTO data(name,number,address) VALUES('".$row["name"]."','".$row["number"]."','".$row["address"]."')";
	$run = mysqli_query($conn,$qry);
}
if($run==true){
	echo "data successfully inserted";
}

?>