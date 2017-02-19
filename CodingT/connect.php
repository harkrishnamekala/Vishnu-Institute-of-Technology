<?php

$username = "hari";
$password = "govinda";
$host = "localhost";

$conn = mysqli_connect($host,$username,$password);

$db_name = "codingt";

if($conn) $select = mysqli_select_db($conn,$db_name);



?>