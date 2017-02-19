

<!DOCTYPE html>
<?php session_start();

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
    <?php
    if(isset($_SESSION['id']))
        echo "<li class=\"w3-hide-small\"><a href=\"logout.php\" class=\"w3-hover-white\">LogOut</a></li>"; ?>


  </ul>
</div>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <?php
  if(isset($_SESSION['id'])) {?>
  <a href="accountd.php" class="w3-hover-black">Account Details</a>
  <a href="uploadspec.php" class="w3-hover-black">Upload RC Car details</a>
  <a href="accommodation.php" class="w3-hover-black">Accommodation</a>
  <a href="changepassword.php" class="w3-hover-black">Change Password</a>
  <?php } ?>
  <a href="rules.php" class="w3-hover-black">Contest Rules</a>

  <a href="contact.php" class="w3-hover-black">Contact Us</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-container">

<?php
if (isset($_SESSION['id'])) { ?>
    <form  action="contact.php" method="post" style="margin-top:200px;text-align:center">
          Subject : <input type="text" name="subject" value=""> <br>

        <textarea name="message" rows="10" cols="80">Enter the Message we will get back to you</textarea>
        <br>
        <input type="submit" name="sdsubmit" />
    </form>
<?php
}else { ?>


<form class="form-horizontal" style="margin-top:100px;text-align:center" method="post">
    <div class="form-group" >
      <label class="control-label col-sm-2" for="Name">Name :</label>
      <div class="col-sm-20">
        <input type="name" class="form-control" id="email" placeholder="Enter Name" name="cname">
      </div>
    </div>
    <div class="form-group" >
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" placeholder="Enter Email:" name="cemail">
      </div>
    </div>
    <div class="form-group" >
      <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" placeholder="Enter Phone Number:" name="cphone">
      </div>
    </div>
    <div class="form-group" >
      <label class="control-label col-sm-2" for="pwd">Subject :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" placeholder="Enter  Subject:" name="csubject">
      </div>
    </div>
    <div class="form-group" >
      <label class="control-label col-sm-2" for="pwd">Message :</label>
      <div class="col-sm-10">
        <textarea name="cmessage" class="form-control" rows="10" cols="60" placeholder="enter Message"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name= "ncdsubmit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
<?php } ?>

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
<?php
include "dbconnect.php";
function contact_insert($name,$email,$phone,$subject,$message){
  include "dbconnect.php";
  $insert_data = mysqli_query($stat,"INSERT INTO contactus (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')");

}

if(isset($_POST['ncdsubmit'])){
  $name = $_POST['cname'];
  $email = $_POST['cemail'];
  $phone = $_POST['cphone'];
  $subject = $_POST['csubject'];
  $message = $_POST['cmessage'];

contact_insert($name,$email,$phone,$subject,$message);

}
else if(isset($_POST['sdsubmit']) and isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $fetech_contact_data = mysqli_query($stat,"SELECT tlname,email,phoneone FROM details WHERE id = $id");
  $feteched_data_array = mysqli_fetch_assoc($fetech_contact_data);


  $name = $feteched_data_array['tlname'];
  $email = $feteched_data_array['email'];
  $phone = $feteched_data_array['phoneone'];

  contact_insert($name,$email,$phone,$subject,$message);

}

 ?>
