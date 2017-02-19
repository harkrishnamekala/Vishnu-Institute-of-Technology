<?php
require "dbconnect.php";
if (isset($_GET['token'])){
  $token = $_GET['token'];
  $query = mysqli_query($stat,"SELECT * FROM verifylog WHERE checksum='$token'");
  if(mysqli_num_rows($query) == 0)
    header('Location: index.php');
  else{
    $Id_Aray = mysqli_fetch_assoc($query);
    $id = $Id_Aray['id'];
    $data_Update = mysqli_query($stat,"UPDATE details SET emailv=1 WHERE id = '$id '");
    session_start();
    $_SESSION['id'] = $id;
    header('Location: accountd.php');  
  }
  
}
  
 ?>
