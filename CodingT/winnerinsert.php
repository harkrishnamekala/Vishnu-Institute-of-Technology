<?php
if (isset($_POST['cfightsid'])) {

	$round = $_POST['round'];

	$cfightsidm  = $_POST['cfightsid'];
	
	require 'connect.php';

	$get_tid_based_on_cid = mysqli_query($conn,"SELECT tid FROM details WHERE cfightsid = '$cfightsidm' ");
	$tid_arr = mysqli_fetch_assoc($get_tid_based_on_cid);

	$tid = $tid_arr['tid'];
	$table_name = "Round" . $round;
	$update_the_rounds = mysqli_query($conn,"UPDATE $table_name SET winner=$tid WHERE tidone = $tid OR tidtwo = $tid");
	$get_exiting_wins = mysqli_query($conn,"SELECT wins FROM details WHERE tid = $tid");

	$get_tid_arr = mysqli_fetch_assoc($get_exiting_wins);

	$wins = $get_tid_arr['wins'];
	$wins += 1;

	$update_details = mysqli_query($conn,"UPDATE details SET wins=$wins WHERE tid = $tid");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		To update winner form
	</title>
</head>
<body>
 <h1 style="text-align: center">Winners UPdate </h1>
 <form action="winnerinsert.php" method="POST" style="text-align: center">
 <label>ENter the CFights Id</label>
 	<input type="text" name="cfightsid" />
 	<br>
 	<label>ENter the Round</label>
 	<input type="text" name="round"/>
 	<br>
 	<input type="submit" name="upsubmit"/>
 </form>
</body>
</html>