<!DOCTYPE html>
<?php
 session_start();

?>

<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Donor Login</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">

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

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="login.php">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Log in</button>
                    </div>

                </div>

                <a href="#" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="register.php" class="form-create-an-account">Create an account &rarr;</a>

            </div>

        </form>

    </div>

</body>

</html>
<?php
        
    include('connect.php');
    if(isset($_POST['password']) and isset($_POST['email'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password = md5($password);
            $data = mysqli_query($conn,"SELECT email,password FROM donors WHERE email='$email' AND password='$password' ");
            $row = mysqli_fetch_assoc($data);
            if($password == $row['password'] and $email == $row['email'] ){
                $_SESSION['email'] = $email;
                $_SESSION['loggedIn'] = false;
                header("Location: account.php");
            }
            else{
                echo "<p>Username/password Wrong</p>";
            }
        }
    /*if($_GET['arg'] == "redirect"){
        echo "<p>You already have an account please login usingyour account credentials</p>";
    }
    else{
        
    }*/
    mysqli_close($conn);
    include('footer.php');
    ?>