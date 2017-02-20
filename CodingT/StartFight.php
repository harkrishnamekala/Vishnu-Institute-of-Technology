<?php
 if (isset($_POST['round'])) {
 	$round_number = $_POST['round'];

 	$round_name = "Round" . $round_number;
 	
 	require 'connect.php';

 	$TableCreate = mysqli_query($conn,"CREATE TABLE '$round_name' (roundid INT(255) NOT NULL AUTO_INCREMENT,
 		tidone INT(255),
 		tidtwo INT(255), 
 		winner INT(255) DEFAULT 0,
 		PRIMARY KEY(roundid) ");
 	//TODO: Check if the previous Round Exists in the unit test

 	$get_individual_count = mysqli_query($conn,"SELECT COUNT(*) AS tid_max FROM details");

 	$get_ar_count = mysqli_fetch_assoc($get_individual_count);

 	$tid_max = $get_ar_count['tid_max'];

 	$tid_max_pairs = $tid_max/2;

 	$get_tids = mysqli_query($conn,"SELECT tid FROM details");

 	for ($i=0; $i < $tid_max_pairs; $i++) { 
 		$chicken_team = mysqli_fetch_assoc($get_tids);
 		$mutton_team = mysqli_fetch_assoc($get_tids);

 		$chicken_team_id = $chicken_team['tid'];
 		$mutton_team_id = $mutton_team['tid'];
 		$insert_team_pairs = mysql_query($conn,"INSERT INTO '$round_name' (tidone,tidtwo) VALUES ($chicken_team_id,$mutton_team_id)" );

 	}
 	header('Location: test.php?round=$round_number');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fight Starter</title>
</head>
<body>
<h1 style="text-align: center">Round Starter</h1>
<form action="StartFight.php" action="POST">
	<label>Enter The Round  :</label>
	<input type="text" name="round"/>
	<br>
	<input type="submit" name="rsubmit"/>
</form>
</body>
</html>