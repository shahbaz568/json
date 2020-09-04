<?php

$get_name = $_GET['name'];
$filedata = file_get_contents('insert.json');
$decode_data = json_decode($filedata,true);
echo "<pre>";
print_r($decode_data);
echo "</pre>";

$array_index = array();

foreach($decode_data as $key => $values){
	if($values['name'] == $get_name){
	$array_index[] = $key;
     }
}

foreach($array_index as $i){
	unset($decode_data[$i]);
}
$decode_data = array_values($decode_data);

if(file_put_contents('insert.json',json_encode($decode_data))){
	header('location:viewdata.php');
}

?>