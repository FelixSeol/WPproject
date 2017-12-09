<?php
$host = "localhost"; //호스트 이름
$user = "root";  //사용자 계정
$passwd = "raspberry";   //비밀번호
$dbname = "temp";  //디비 이름

$conn = new mysqli($host, $user, $passwd, $dbname);

if($conn->connect_error){
	die("Connection failed");
}

?>
