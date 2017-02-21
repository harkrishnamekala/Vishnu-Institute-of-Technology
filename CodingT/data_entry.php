<?php

$team_name_string = "ct_team";
require 'connect.php';
for ($i=1; $i <=32 ; $i++) { 
	$teamName_ided = $team_name_string . $i;
	mysqli_query($conn,"INSERT INTO details (cfightsid) VALUES ('$teamName_ided')");
}

echo "Complted";
?>