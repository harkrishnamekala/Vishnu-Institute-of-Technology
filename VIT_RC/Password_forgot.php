
<!doctype html>
<html>
<head>
<title>Password Forgot - VIT RC Race</title>
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
<h1 class="header-w3ls">Recover your password</h1>
<div class="signup-w3ls">
	<div class="signup-agile1">
		<form action="Password_forgot.php" method="post">



			<div class="form-control">
				<label class="header">Email Address :</label>
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>


			<input type="submit" class="register" value="Recover">
		</form>

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
</div >
<p class="copyright" style="margin-top:320px">© 2016 Vishnu Institute of Technology. All Rights Reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> From CSE dept</p>
</body>
</html>
<?php
if(isset($_POST['email'])){
	$email = $_POST['email'];
	require "dbconnect.php";
	$getUserId = mysqli_query($stat,"SELECT id FROM details WHERE email = '$email'");
	if(mysqli_num_rows($getUserId) == 0)
		echo "<script>
	window.alert(\"Email Doesn't exist\");
	window.location.href=\"http://vnc17.in/register.php\";
	</script>";
	else{
		require "mailblast.php";
		$idArray = mysqli_fetch_assoc($getUserId);
		$id = $idArray['id'];
		if(SendMail($id,2)) echo "<script>
	window.alert(\"Verification Email Sent\");
	</script>";
	}
}

 ?>
