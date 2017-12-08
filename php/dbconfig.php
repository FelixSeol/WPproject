<?php
$host = "localhost"; //호스트 이름
$user = "root";  //사용자 계정
$passwd = "raspberry";   //비밀번호
$dbname = "temp";  //디비 이름
try{
	 $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $passwd);
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	 print $e->getMessage();
}

try {
	$flag="NO";
	$result = $pdo->query("SHOW TABLES");
	while ($row = $result->fetch(PDO::FETCH_NUM)) {
		if($row[0]=="contacts")
		{
			$flag="OK";
			break;
		}
	}
}
catch (PDOException $e) {
	echo $e->getMessage();
}
if($flag != "OK")
{
	$sql ="create table contacts (
		no int primary key not null auto_increment,
		user varchar(12) not null,
		name varchar(12) not null,
		phonenum varchar(15) not null,
  		sex varchar(10),
 		email varchar(30),
 		date varchar(20),
   		notes text)";

	$pdo->exec($sql);
	print "<font size=4><br><center> DB이름은 ".$dbname." 입니다.</font></center>";
	print "<font size=4><br><center>contacts 테이블을 성공적으로 만들었습니다.</font></center><hr>";
}
else
{
	print "<font size=4><br><center> DB이름은 ".$dbname." 입니다.</font></center>";
	 print "<font size=4><br><center>contacts 테이블은 이미 존재합니다.</font></center><hr>";
}
