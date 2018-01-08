<?php 
	header("Access-Control-Allow-Origin: *");
	require 'common.inc.php';
	$phone = $_POST['phone'];
	$pwd = $_POST['pwd'];
	$user_name = $_POST['user_name'];
	echo "<br>";

	$sql = "INSERT INTO user_one(phone,pwd,user_name)
	VALUES('$phone','$pwd','$user_name')";
	if(!mysql_query($sql,$con)){
		echo "插入失败".mysql_error();
	}else{
		echo "插入成功";
	}
	mysql_close($con); 
?>