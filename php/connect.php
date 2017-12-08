<?php

$host = "localhost";
$username = "root";
$password = "frog032";
$dbname = "temp";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed");
}



?>