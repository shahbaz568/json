<!DOCTYPE html>
<html>
<head>
	<title>json</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","","fetchjson");

$qry = "SELECT * FROM data";
$array_data = array();
$run = mysqli_query($conn,$qry);

while($data = mysqli_fetch_assoc($run)){
      $array_data[] = $data;
}
echo "<pre>";
print_r($array_data);
echo "</pre>";

$alldata = json_encode($array_data);

if(file_put_contents('insert.json', $alldata)){
	echo "inserted into json file";
}
?>
</body>
</html>