<?php

try {
include('pdoconnection.php');

$sql = "INSERT INTO persons (PersonID, LastName, FirstName,Address,City,amail)
VALUES ('1','shahbaz','hussain','delhi','delhi','amail')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

}
catch(PDOException $e)
{
echo $e->getMessage();
}

?>      