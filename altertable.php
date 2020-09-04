<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";
// Creating connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "ALTER TABLE Persons ADD amail varchar(255)";
$run = mysqli_query($conn,$sql);
if($run==true){
	echo "success";
}
?>