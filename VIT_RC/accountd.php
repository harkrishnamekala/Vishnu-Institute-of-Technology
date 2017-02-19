<!DOCTYPE html>
<?php
require 'mailblast.php';
require 'dbconnect.php';
session_start();
if(!isset($_SESSION['id'])){
  header('Location: login.php');
}
$id = $_SESSION['id'];
?>
<html>
<title>Vishnu Nitro Championship :: Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
.w3-navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-theme w3-top w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </li>
    <li><img src="images/logo.png"  width="50" height="50" class="w3-theme-l1" /></li>
    <li class="w3-hide-small"><a href="account.php" class="w3-hover-white">Vishnu Institute of Technology</a></li>
    <li class="w3-hide-small"><a href="http://www.vishnu.edu.in" class="w3-hover-white">About VIT</a></li>
    <li class="w3-hide-small"><a href="logout.php" class="w3-hover-white">LogOut</a></li>

  </ul>
</div>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <a href="accountd.php" class="w3-hover-black">Account Details</a>
  <a href="uploadspec.php" class="w3-hover-black">Upload RC Car details</a>
  <a href="changepassword.php" class="w3-hover-black">Change Password</a>
  <a href="rules.php" class="w3-hover-black">Contest Rules</a>
  <a href="accommodation.php" class="w3-hover-black">Accommodation</a>
  <a href="contact.php" class="w3-hover-black">Contact Us</a>
</nav>
<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-container">
  <h2>Info Table</h2>
<?php

 $id =  $_SESSION['id'];
  $dyn_ht = mysqli_query($stat,"SELECT * FROM details WHERE id = $id");
  $da = mysqli_fetch_assoc($dyn_ht);

  if($da['emailv'] == 0){
    echo <<<HTN

    <div class="w3-panel w3-red" id="btn" style="width:60%">
  <h3 id="eheading">Email Verification Required!</h3>
  <p id="etitext">You still did not verify your account please Click the below button to Resend the Verification email.</p>
</div>
    <div class="w3-container">
      <button id="btn-btn"class="w3-btn w3-padding-xxlarge" type="button" name="Resend Verification Email" onclick="PHPMAILCALL()" style="margin-left: 75%;">Resend Email</button>
    </div>
    <script>
    function PHPMAILCALL(){
    document.getElementById("btn").className = "w3-panel w3-green";
    document.getElementById("etitext").innerHTML = "Verification Email Has Been Sent Again";
    document.getElementById("btn-btn").style.display = "none";
    document.getElementById("eheading").innerHTML = "Please verify Email";
    window.open("http://vnc17.in/mailblast.php?clicked=Y");
    window.close();

  }


    </script>
HTN;

  }
  ?>

  <table class="w3-table w3-blue w3-xlarge" style="margin-bottom: 100px; width: 75%; margin: 50px 50px;padding: 40%;">
    <tr>
      <th>Team Details</th>
    </tr>
    <tr>
      <td>Team Name :</td>
      <td><?php echo $da['tname']; ?></td>

    </tr>
    <tr>
      <td>Team ID :</td>
      <td><?php echo $_SESSION['id']; ?></td>

    </tr>
    <tr>
      <td>Team Leader :</td>
      <td><?php echo $da['tlname']; ?></td>

    </tr>
    <tr>
      <td>Team Email :</td>
      <td><?php echo $da['email']; ?></td>

    </tr>
    <tr>
      <td>Primary Phone :</td>
      <td><?php echo $da['phoneone']; ?></td>

    </tr>
    <tr>
      <td>Secondary Phone :</td>
      <td><?php echo $da['phonetwo']; ?></td>

    </tr>
    <tr>
      <td>Application Status :</td>
      <td><?php if($da['applications'] == 0) echo "Waiting For Review"; else if($da['applications'] == -1) echo "Rejected"; else echo "Accepted"; ?></td>

    </tr>

  </table>
</div>


  <footer id="myFooter" style="margin-top: 200px">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>© 2016 Vishnu Institute of Technology. All Rights Reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> From CSE dept</h4>
    </div>


  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
