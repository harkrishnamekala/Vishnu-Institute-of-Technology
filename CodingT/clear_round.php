<?php
	if (isset($_GET['round'])) {
		$round = $_GET['round'];
		$wins = $round -1;
		echo $wins;
		require 'connect.php';
		
		$delete_the_lost_ones = mysqli_query($conn,"DELETE FROM details WHERE wins<$wins");


		if($delete_the_lost_ones) echo "Deleted the Lost ones start the next Round with the argumented round";
	}
?>