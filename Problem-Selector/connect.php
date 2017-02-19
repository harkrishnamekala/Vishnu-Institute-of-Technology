<?php

$username = "hari";
$password = "govinda";
$host = "localhost";

$conn = mysqli_connect($host,$username,$password);

if($conn){
	$stat2 = mysqli_select_db($conn,"problem-selector-db");
	if($stat2){
		//echo "Database connection establisehd";
	}else{
		echo "cannot select database";
	}
}else{
	echo "cannot connect to the database " . mysql_error();
}
?>
