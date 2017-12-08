<?php

include_once("./connect.php");	

$div = $_POST["div"];


if($div == "start") {

	$query = "select * from sellerlist";
	$result = $conn->query($query);
	$arr = array();
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;
	}

	echo json_encode($arr);
	//print_r($arr);


}


?>