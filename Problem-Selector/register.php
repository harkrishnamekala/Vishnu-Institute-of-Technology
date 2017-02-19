<?php
  session_start();
  if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['password2']) and isset($_POST['rsubmit'])) {
    $UName = $_POST['username'];
    $tname = $_POST['tname'];
    $tmname1 = $_POST['tmname1'];
    $tmname2 = $_POST['tmname2'];
    $Upasword = $_POST['password'];
    require "connect.php";
    $chceck_if_user_exists = mysqli_query($conn,"SELECT id FROM details WHERE username='$UName'");
    if (mysqli_num_rows($chceck_if_user_exists) > 0) {
      echo "<script>
      window.alert('UserName already exits login');
      </script>";
      header('Location: login.php');

    }else{
      $insert_data = mysqli_query($conn,"INSERT INTO details (username,tname,tmemone,tmemtwo,password) VALUES ('$UName','$tname','$tmname1','$tmname2','$Upasword')");
      $get_user_ID = mysqli_query($conn,"SELECT tid FROM details WHERE username = '$UName'");
      $id_arr = mysqli_fetch_assoc($get_user_ID);
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

        <form class="form-register" method="post" action="register.php">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Register</h1>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>UserName</span>
                            <input type="text" name="username">
                        </label>
                    </div>
                    <div class="form-row">
                       <label>
                           <span>Team Name</span>
                           <input type="text" name="tname">
                       </label>
                   </div>

                    <div class="form-row">
                       <label>
                           <span>College ID 1</span>
                           <input type="text" name="tmname1">
                       </label>
                   </div>

                   <div class="form-row">
                      <label>
                          <span>College ID 2</span>
                          <input type="text" name="tmname2">
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
                          <span>Re-enter Password</span>
                          <input type="password" name="password2">
                      </label>
                  </div>

                    <div class="form-row">
                        <button type="submit" name="rsubmit">Register</button>
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
