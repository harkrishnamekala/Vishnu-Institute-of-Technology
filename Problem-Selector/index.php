<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>VIT Problem Selector</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-register.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

	<header>
    <h1>VIT Problem Selector</h1>
        <a href="http://vishnu.edu.in">visit VIT</a>
    </header>

     <ul>
        <li><a href="index.php">Home</a></li>
        
        <?php if(!isset($_SESSION['id'])){
            echo "<li><a href=\"login.php\">Login</a></li>";
            echo "<li><a href=\"register.php\">Register</a></li>";
            }else
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            ?>
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->
        <img src="logo.png" alt="" style="display:block;margin-right:auto;margin-left:auto"/>
    </div>
<?php
require "footer.php";
?>
</body>

</html>
