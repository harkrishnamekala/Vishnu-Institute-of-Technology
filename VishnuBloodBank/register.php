<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Donor Registration Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-register.css">
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

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="register.php">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Register As Donor</h1>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>College ID</span>
                            <input type="text" name="studentid">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="studentname">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="studentemail">
                        </label>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>Phone Number</span>
                            <input type="text" name="studentphone">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>City</span>
                            <input type="text" name="studentplace">
                        </label>
                    </div>


                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">

                <label>
                    <span>Blood Group</span>
                    <select name="dropdown">
                        <option>Choose Blood Group Type</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </label>

            </div>

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>

                <a href="login.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

        </form>

    </div>

</body>

</html>
<?php

include('connect.php');

if(isset($_POST['studentid'])){

    $studentid = $_POST['studentid'];
    $studentname = $_POST['studentname'];
    $studentemail = $_POST['studentemail'];
    $studentphone = $_POST['studentphone'];
    $studentplace = $_POST['studentplace'];
    $password = md5($_POST['password']);
    $bloodgroup = $_POST['dropdown'];
    $data = mysqli_query($conn,"SELECT id,email FROM donors WHERE id='$studentid' AND email='$studentemail' ");
    
    $row = mysqli_fetch_assoc($data);
     if($row['id'] == $studentid and $row['email'] == $studentemail){
        header("Location: login.php");
    }
    else{
        $insert = mysqli_query($conn,"INSERT INTO donors (id, name, email, phone, place, password, bloodgroup) VALUES ('$studentid', '$studentname', '$studentemail', $studentphone, '$studentplace', '$password','$bloodgroup')");
        if($insert){
        session_start();
        $_SESSION['email'] = $studentemail;
        $_SESSION['loggedIn'] = false;
        header("Location: account.php");
        }
        else{
        echo "<p> Data Insert Failed </p>". mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
    

   include('footer.php');
    

?>