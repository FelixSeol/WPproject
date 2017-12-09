<?php

include_once("./connect.php");	

$title = $_POST["title"];
$writer = $_POST["writer"];
$content = $_POST["content"];

$query = "INSERT INTO board VALUES('', '".$title."','".$content."','".$writer."',now());";

$result = $conn->query($query);

if(!$result){
	echo 1;
}else{
	echo 0;
}

?>
