<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: login.php');
}
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
    <li class="w3-hide-small"><a href="#" class="w3-hover-white">Vishnu Institute of Technology</a></li>
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
  <a href="rules.php" class="w3-hover-black">Contest Rules</a>
  <a href="accommodation.php" class="w3-hover-black">Accommodation</a>
  <a href="contact.php" class="w3-hover-black">Contact Us</a>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

<?php
include "dbconnect.php";
$getech_posts = mysqli_query($stat,"SELECT * FROM blog");

while ($row_post = mysqli_fetch_assoc($getech_posts)) {
  $heading = $row_post['header'];
  $post = $row_post['post'];
  echo <<<HT
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">$heading</h1>
      <p>$post</p>
    </div>

  </div>
HT;
}



 ?>



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
