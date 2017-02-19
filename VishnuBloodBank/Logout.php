<!DOCTYPE html>
<?php
    session_start();

    
    session_unset();

    session_destroy();
    
?>

<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Search Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-search.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>


	<header>
		<h1>Vishnu BloodBank</h1>
        <a href="http://vishnu.edu.in">Visit Vishnu EDU</a>
    </header>

     <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register as Donor</a></li>
        <li><a href="login.php">Donor Login</a></li>
        <li><a href="requestblood.php">Request Blood</a></li>
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-search.css -->

        <h1> You have successfully Logged Out</h2>
    </div>

</body>

</html>
<?php
include('footer.php');
?>