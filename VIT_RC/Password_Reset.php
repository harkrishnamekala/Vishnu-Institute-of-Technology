<!doctype html>
<html>
<head>

<title>Password Reset - VIT RC Race</title>
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
<h1 class="header-w3ls">Reset your Password</h1>
<div class="signup-w3ls">
	<div class="signup-agile1">
		<form action="Password_Reset.php" method="post">
			

			<div class="form-control">
				<label class="header">Password :</label>
				<input type="password" class="lock" name="password" placeholder="password" id="password1" required="">
			</div>

			<div class="form-control">
				<label class="header">Confirm Password :</label>
				<input type="password" class="lock" name="confirm-password" placeholder="confirmpassword" id="password2" required="">
			</div>
			<input type="submit" class="register" value="Register">
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
<?php
	require 'dbconnect.php';
	if (isset($_COOKIE['hash']) and isset($_POST['password'])) {
		$hash = $_COOKIE['hash'];
		$password = $_POST['password'];
		$checkCookie = mysqli_query($stat,"SELECT id,checksum FROM verifylog WHERE checksum='$hash'");
		if(mysqli_num_rows($checkCookie)>0){
			$id_checksum_array = mysqli_fetch_assoc($checkCookie);
			$id = $id_checksum_array['id'];
			
			$updatePassword = mysqli_query($stat,"UPDATE SET password='$password' WHERE id = '$id'");
			$deleteHash = mysqli_query($stat,"DELETE FROM verifylog WHERE checksum='$hash'");
			setcookie('hash','$hash',time()-3600);
			echo "<script type=\"text/javascript\">
	window.alert(\"Your password Has been reset please login now\");
	window.location.href=\"http://vnc17.in/login.php\";
	</script>";
		}
	}else if ($_GET['hash']) {
		$hash = $_GET['hash'];
		$checkHashInDB = mysqli_query($stat,"SELECT * FROM verifylog WHERE checksum='$hash'");
		if(mysqli_num_rows($checkHashInDB) == 0){
			echo "<script type=\"text/javascript\">
	window.alert(\"Ah! Ah! Ah! No Hacking Here Buddy\");
	window.location.href=\"http://vnc17.in/index.php\";
	</script>";
		}else{
			$hash = $_GET['hash'];
			setcookie('hash',$hash,time()+3600);	
		}
	}
 ?>
