<?php
	if (isset($_GET['round'])) {
		$wins = $round -1;

		require 'connect.php';
		$delete_the_lost_ones = mysqli_query($conn,"DELETE FROM details WHERE wins<$wins");
		echo "Deleted the Lost ones start the next Round with the argumented round";
	}
?>