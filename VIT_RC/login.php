<?php
session_start();

if (isset($_POST['password']) and isset($_POST['email'])) {

	$mail = $_POST['email'];
	$passwd = $_POST['password'];

	include "dbconnect.php";

	/*$check_email = mysqli_query($stat,"SELECT id,password FROM details WHERE email='$mail' ");
	$check_password = mysqli_query($stat,"SELECT id,email FROM details WHERE password = '$passwd' ");
	$mail_array = mysqli_fetch_assoc($check_email);
	$password_array = mysqli_fetch_assoc($check_password);

	$email_id =  $mail_array['id'];
	$password_id = $password_array['id'];
	echo "Email id is : " . $email_id . "Password Id is " . $password_id;*/
	//print_r($check_ID);
	$quer = mysqli_query($stat,"SELECT id FROM details WHERE email='$mail' AND password='$passwd' ");

	if(mysqli_num_rows($quer)  > 0){
		$id_arr = mysqli_fetch_assoc($quer);
		$id = $id_arr['id'];

		$_SESSION['id'] = $id;

		header('Location: account.php');
	}else{
		echo "<script>
		window.alert(\"Username/Password Wrong\");
		</script>";
	}


}
 ?>
<!doctype html>
<html>
<head>
<title>Login - VIT RC Race</title>
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
<h1 class="header-w3ls">Login to RC Race Event</h1>
<div class="signup-w3ls">
	<div class="signup-agile1">
		<form action="login.php" method="post">



			<div class="form-control">
				<label class="header">Email Address :</label>
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>


			<div class="form-control">
				<label class="header">Password :</label>
				<input type="password" class="lock" name="password" placeholder="password" id="password1" required="">
			</div>


			<input type="submit" class="register" value="Login">
		</form>
		<a href="Password_forgot.php">Forgot Password?</a>

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
</div >
<p class="copyright" style="margin-top:320px">© 2017 Vishnu Institute of Technology. All Rights Reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> From CSE dept</p>
</body>
</html>
