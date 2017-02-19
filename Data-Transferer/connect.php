<?php
    //MY SQL Details of your server
    $hostname = "Your DB Host Name";
    $username = "Your DB user Name";
    $password = "Your DB Password";

    //Trying to Connect to the My Sql Server 

$conn = new mysqli($hostname, $username, $password);

// Check connection is valid
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Selecting The database from the database server
mysqli_select_db($conn,"college");



?>