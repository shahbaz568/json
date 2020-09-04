<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";
// Creating connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
)";
$run = mysqli_query($conn,$sql);
if($run==true){
	echo "success";
}
?>