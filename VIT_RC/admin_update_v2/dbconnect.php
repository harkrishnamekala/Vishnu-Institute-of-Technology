<?php

$username = "hari";
$password = "govinda";
$host = "localhost";

$stat = mysqli_connect($host,$username,$password);

if($stat){
	$stat2 = mysqli_select_db($stat,"vit_rc");
	if($stat2){
		//echo "Database connection establisehd";
	}else{
		echo "cannot select database";
	}
}else{
	echo "cannot connect to the database " . mysql_error();
}
?>
