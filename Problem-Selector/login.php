<?php
session_start();
 if (isset($_POST['username']) and isset($_POST['password'])) {
     $UName = $_POST['username'];
     $Upassword = $_POST['password'];
     require "connect.php";
     $check_keypair_exists = mysqli_query($conn,"SELECT tid FROM details WHERE username='$UName' AND password = '$Upassword' ");
     if(mysqli_num_rows($check_keypair_exists) == 1){
        $id_arr = mysqli_fetch_assoc($check_keypair_exists);
        $id = $id_arr['tid'];
        $_SESSION['id'] = $id;
        header('Location: problem_select.php');
     }
 }
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
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="login.php">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Login</h1>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>UserName</span>
                            <input type="text" name="username">
                        </label>
                    </div>
                    <div class="form-row">
                       <label>
                           <span>Password</span>
                           <input type="password" name="password">
                       </label>
                   </div>



                    <div class="form-row">
                        <button type="submit">Login</button>
                    </div>

                </div>



            </div>

        </form>

    </div>
<?php
require "footer.php";
?>
</body>

</html>
