<?php 
	/*
	*设置字符集
	*/
	header("Access-Control-Allow-Origin: *");
	header("Content-type: text/html; charset=utf-8");
	/*
	*获取POST数据
	*/
	/*print_r($_POST[user]);*/
	echo "<br>"; 
	/*
	*数据库连接
	*/
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	{
	 die('Could not connect: ' . mysql_error());
	}else{
		echo "连接成功<br>";
	}
	/*
	*选择数据表（表明、数据库连接句柄）
	*/
	$db_select = mysql_select_db("testdb", $con);
	if(!$db_select){
		die('连接失败'.mysql_error());
		echo "<br>";
	}else{
		echo "数据表连接成功<br>";
	}
?>