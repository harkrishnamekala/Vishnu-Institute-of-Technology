<?php
session_start();

require "dbconnect.php";
require "mailblast.php";


if(isset($_POST['register'])){

		$tname = $_POST['tname'];
		$tlname = $_POST['tlname'];
		$email = $_POST['email'];
		$phoneone = $_POST['phoneone'];
		$phonetwo = $_POST['phonetwo'];
		$accommodation = $_POST['accommodation'];
		$password = $_POST['password'];


	$checkIfEmailExists = mysqli_query($stat,"SELECT email FROM details WHERE email = '$email'");
	$email_Array = mysqli_fetch_assoc($checkIfEmailExists);
	if($email_Array['email'] == $email) {
		echo "<script>
					window.alert('User is already Registered please use login using the login page');
					window.location.href=\"http://vnc17.in/login.php\";
					</script>";
	}
	else{

	ob_start();

	$insert_Data = mysqli_query($stat,"INSERT INTO details (tlname,tname,email,phoneone,phonetwo,password) VALUES ('$tlname','$tname','$email','$phoneone','$phonetwo','$password')");
	$fetech_id = mysqli_query($stat,"SELECT id FROM details WHERE email = '$email' ");

	if(mysqli_num_rows($fetech_id) > 0)
	$id_arr = mysqli_fetch_assoc($fetech_id);
	else
	echo "<script> window.alert(\"Server Fetech Error Please Try again after sometime\"); </script>";


	$id = $id_arr['id'];
	$_SESSION['id'] = $id;

	if ($accommodation == "YES" or $accommodation == "yes") {
		$insert_acc = mysqli_query($stat,"INSERT INTO accommodation (id) VALUES ($id)");
	}

	//To Create a Folder with the name of the Team ID
	$zip = `unzip sourcezipped/elfinder.zip -d uploads/$id/`;


	SendMail($id,1);


	echo "<script type=\"text/javascript\"> window.location.href = \"http://vnc17.in/account.php\"; </script>";

	ob_end_flush();
	}
}
else{
echo <<<smeaaa
<!doctype html>

<html>
<head>

<title>Register - VIT RC Race</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vishnu Eduacational Society Rc Race, Remote Car Race, Bhimavaram, VIT, Vishnu Institute of Technology, RC Race Event Bhimavaram, Vishnu College RC Race" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="web2/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="web2/css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1 class="header-w3ls">Register For RC Race Event</h1>
<div class="signup-w3ls">
	<div class="signup-agile1">
		<form action="register.php" method="post">
			<div class="form-control">
				<label class="header">Team Name :</label>
				<input type="text" id="firstname" name="tname" placeholder="Team Name" title="Please enter your Name of the Team" required="">
			</div>

			<div class="form-control">
				<label class="header">Team Leader :</label>
				<input type="text" id="lastname" name="tlname" placeholder="Name of your team Leader" title="Please enter the Name of Your Team Leader" required="">
			</div>

			<div class="form-control">
				<label class="header">Email Address :</label>
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>
			<div class="form-control">
				<label class="header">Phone Number 1 :</label>
				<input type="phone" id="firstname" name="phoneone" placeholder="+91-XXXXXXXXXX" title="Please enter Primary Phone Number" required="">
			</div>

			<div class="form-control">
				<label class="header">Phone Number 2 :</label>
				<input type="phone" id="firstname" name="phonetwo" placeholder="+91-XXXXXXXXXX" title="Please enter Secondary Phone Number" required="">
			</div>

			<div class="form-control">
				<label class="header">Accommodation :</label>
				<input type="text" id="firstname" name="accommodation" placeholder="YES/NO" title="Do you Require Accommodation type in YES/NO" required="">
			</div>


			<div class="form-control">
				<label class="header">Password :</label>
				<input type="password" class="lock" name="password" placeholder="password" id="password1" required="">
			</div>

			<div class="form-control">
				<label class="header">Confirm Password :</label>
				<input type="password" class="lock" name="confirm-password" placeholder="confirmpassword" id="password2" required="">
			</div>
			<input type="submit" class="register" name="register" value="Register">
		</form>
		<!--<a href="Password_forgot.php">Forgot your password</a> -->
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');
					//empty string means no validation error
			}
		</script>
	</div>
	<div class="signup-agile2">
		<h3></h3>
		<div class="social-w3ls">
		<ul class="social-icons">

			<img src="images/logo.png" width="auto" height="250px"/>
			<!--  <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
			<li><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
			<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
			<li><a href="#"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i>Google</a></li> -->
		</ul>

		</div>
	</div>
</div>
<p class="copyright">© 2017 Vishnu Institute of Technology. All Rights Reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> From CSE dept</p>
</body>
</html>

smeaaa;
}
 ?>
