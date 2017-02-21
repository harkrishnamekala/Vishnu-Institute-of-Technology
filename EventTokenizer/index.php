<!DOCTYPE html>
<html>
<title>Event Tokenizer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<header class="w3-container w3-teal">
  <h1>Stratagem Event Tokenizer</h1>
</header>

<div class="w3-container w3-half w3-margin-top">

<?php 
	if (isset($_GET['playerid'])){
	$playerid = $_GET['playerid'];
	require 'connect.php';

	$get_details_based_on_playerid = mysqli_query($conn,"SELECT * FROM details WHERE playerid='$playerid'");
	$fetech_details_arr = mysqli_fetch_assoc($get_details_based_on_playerid);
	$playerids = $fetech_details_arr['playerid'];
	$playername = $fetech_details_arr['playername'];
	$opponent1 = $fetech_details_arr['opponent1'];
	$atone_star = $fetech_details_arr['atone_star'];
	$attwo_star = $fetech_details_arr['attwo_star'];
	$atone_dest = $fetech_details_arr['atone_dest'];
	$attwo_dest = $fetech_details_arr['attwo_dest'];
	$opponent2 = $fetech_details_arr['opponent2'];
	$playerphone = $fetech_details_arr['playerphone'];
	$volphone = $fetech_details_arr['volphone'];

	echo <<<MTN
	
<form class="w3-container w3-card-4">

<p>
<input class="w3-input" type="text" style="width:90%" name="playerids" value="$playerids" required>
<label class="w3-label w3-validate">TokenID</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="playername" value="$playername" required>
<label class="w3-label w3-validate">PlayerName</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="opponent1" value="$opponent1" >
<label class="w3-label w3-validate">Oppnent One Name</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="atone_star" value="$atone_star" >
<label class="w3-label w3-validate">Attack One Stars</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="atone_dest" value="$atone_dest">
<label class="w3-label w3-validate">Attack One Destruction</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="opponent2" value="$opponent2" >
<label class="w3-label w3-validate">Opponent Two Name</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="attwo_star" value="$attwo_star">
<label class="w3-label w3-validate">Attack Two Star</label></p>

<p>
<input class="w3-input" type="text" style="width:90%" name="attwo_dest" value="$attwo_dest">
<label class="w3-label w3-validate">Attack Two Destruction </label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="attwo_dest" value="$playerphone">
<label class="w3-label w3-validate">Player Phone</label></p>
<p>
<input class="w3-input" type="text" style="width:90%" name="attwo_dest" value="$volphone">
<label class="w3-label w3-validate">Voluenteer Phone</label></p>
<p>
<button class="w3-btn w3-section w3-teal w3-ripple">Update</button></p>

</form>

MTN;
	}
	else if (isset($_GET['playername'])){
		$playerid = $_GET['playerids'];
		$playername = $_GET['playername'];
		
		$opponent1 = $_GET['opponent1'];
		$atone_star = $_GET['atone_star'];
		$atone_dest = $_GET['atone_dest'];

		$opponent2 = $_GET['opponent2'];
		$attwo_star = $_GET['attwo_star'];
		$attwo_dest = $_GET['attwo_dest'];
		
		$star_add = $atone_star + $attwo_star;
		$dest_avg = ($atone_dest+$attwo_dest)/2;

		$playerphone = $_GET['playerphone'];
		$volphone = $_GET['volphone'];

		require 'connect.php';
		$update_details = mysqli_query($conn,"UPDATE details SET playername='$playername',opponent1='$opponent1',atone_star=$atone_star,atone_dest=$atone_dest,opponent2='$opponent2',attwo_star=$attwo_star,attwo_dest=$attwo_dest,star_avg=$star_add,dest_avg=$dest_avg,playerphone='$playerphone',volphone='$volphone' WHERE playerid='$playerid' ");

		header('Location: index.php');
	}
	else{

	echo <<<LTN
	<form class="w3-container w3-card-4">

<p>
<input class="w3-input" type="text" name="playerid" style="width:90%" required>
<label class="w3-label w3-validate">TokenID</label></p>
<p>
<button class="w3-btn w3-section w3-teal w3-ripple">Search</button></p>

</form>

LTN;
	}
?>

</div>

</body>
</html> 

