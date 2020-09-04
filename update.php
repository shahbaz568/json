<?php
$get_name = $_GET['name'];
$filedata = file_get_contents('insert.json');
$decode_date = json_decode($filedata,true);
echo "<pre>";
print_r($decode_date);
echo "</pre>";
/*$update_array = array();*/

foreach($decode_date as $key => $value){

	if($value['name'] == 'shahbaz'){
		$decode_date[$key]['address'] = "delhi";
	}
}

if(file_put_contents('insert.json', json_encode($decode_date))){
	echo "success";
}

?>
