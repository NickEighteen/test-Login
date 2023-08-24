<?php
function dbconnect() {
	$host = "localhost";
	$dbname = "root";
	$dbpass = "";
	$con = mysqli_connect($host,$dbname,$dbpass,"admin");
	mysqli_query($con,"SET CHARACTER SET UTF8");
	if (mysqli_connect_errno($con)){ 
	    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
	}
	return  $con;	
}
function generateAccessToken() {
    return bin2hex(random_bytes(32));
}
?>