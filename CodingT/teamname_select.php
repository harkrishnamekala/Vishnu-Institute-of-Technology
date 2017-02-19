<?php
if (isset($_POST['FSubmit'])) {
	$TeamName = $_POST['tname'];
	$PNumber = $_POST['pnumber'];

	require 'connect.php';
	
	$Profile_lean = mysqli_query($conn,"SELECT tid,pnumber FROM details WHERE pnumber = 0 LIMIT 1");
	
	$Profile_linear_arr = mysqli_fetch_assoc($Profile_lean);
	
	$tid = $Profile_linear_arr['tid'];

	$update_profile = mysqli_query($conn,"UPDATE details SET pnumber = $PNumber , tname = '$TeamName' WHERE tid = $tid");
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Team Name Selection
	</title>
	<style type="text/css">
		body{
			background-image: url('cricket-html-template-master/css/background.jpg');
		}

	</style>
</head>
<body>
<h1 style="text-align: center;">Team Name Selector </h1>
<form  action="teamname_select.php" method="POST" style="text-align: center;">
	<label style="font-size: 24px">Enter the Team Name : </label>
	<input type="text" name="tname"/>
	<br>
	<br>
	<label style="font-size: 24px">Select Number of Participants : </label>
	
	<select name="pnumber">
		<option value="1">1</option>
		<option value="2">2</option>
	</select>
	<br>
	<br>
	<input type="submit" name="FSubmit"/>
</form>
</body>
</html>