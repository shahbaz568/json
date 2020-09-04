<?php
$current_data = file_get_contents('insert.json');
		$array_data = json_decode($current_data,true);

		array_push($array_data,'product');
		$encode = json_encode($array_data);
		file_put_contents('insert.json',$encode);
?>