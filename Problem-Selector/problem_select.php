<?php
session_start();
if(isset($_SESSION['id'])) { // To be Replaced with the Session tID
    require "connect.php";
    $id = $_SESSION['id']; //To be uncommented once the session varialbes are started
    $CheckingSelectStatus = mysqli_query($conn,"SELECT pid FROM details WHERE tid= '$id' ");
    $fetech_pid_array = mysqli_fetch_assoc($CheckingSelectStatus);

    $pid = $fetech_pid_array['pid'];
    if($pid != -1) header('Location: problem_statement.php');

    if(isset($_POST['rad'])){
      $pid = $_POST['rad'];
      require "connect.php";
      $checkIfSelectsIfFilled = mysqli_query($conn,"SELECT selecttimes FROM problems WHERE pid=$pid");
      $Selectes_arr = mysqli_fetch_assoc($checkIfSelectsIfFilled);
      $seletedtimes = $Selectes_arr['selecttimes'];

      if($seletedtimes >= 6){
        echo "<script>
        window.alert(\"Your problem is already selected by others please select another problem\");
        </script>";
        header("Refresh:0");
      }else {
        require "connect.php";
        $UPDating_pid_for_tid = mysqli_query($conn,"UPDATE details SET pid=$pid,selects=1 WHERE tid=$id");
        $update_problem_selects_pb_database = mysqli_query($conn,"UPDATE problems SET selecttimes = selecttimes+1 WHERE pid= $pid");

        echo "<script>
        header('Location: problem_statement.php');
        </script>";
        header('Refresh:0');
      }
    }
}else{
  header('Location: index.php');
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
<style media="screen">
input[type=submit] {
  width: 15em;  height: 6em;
  color: white;
  background-color: lightgreen;
  font-size: 16px;
}
</style>
</head>

	<header>
    <h1>VIT Problem Selector</h1>
        <a href="http://vishnu.edu.in">visit VIT</a>
    </header>

     <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>

    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->
        <?php
        require "connect.php";
        $problems = mysqli_query($conn,"SELECT * FROM problems WHERE selecttimes <>	6");
         ?>

        <form  action="problem_select.php" method="post" style="margin-right:70px;margin-left:70px">
          <label>Please select one of the problems you would like to solve,Once Selected you cannot reselect the problem,</label>
          <br>
          <label>You can Submit Problem by using the button below</label>
          <br>
          <br>
          <hr>
          <?php
          while ($problems_arr = mysqli_fetch_assoc($problems)) {
            $pid = $problems_arr['pid'];
            $pheading = $problems_arr['pheading'];
            $pdescription = $problems_arr['pdescription'];
            
            echo <<<HTN
                  <input type="radio" name="rad" value="$pid" />
                  <h2>$pheading</h2>
                  <br>
                  <pre>$pdescription ...</pre>
                  <br>
                  <hr>
HTN;

          }
          ?>
          <input type="submit" name="select" value="SUBMIT" style="display:block;margin-right:auto;margin-left:auto;"/>
        </form>

    </div>
<?php
require "footer.php";
?>
</body>

</html>
