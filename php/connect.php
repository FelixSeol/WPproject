<?php

$host = "localhost";
$username = "root";
$password = "frog032";
$dbname = "soolpectrum";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed");
}



?>