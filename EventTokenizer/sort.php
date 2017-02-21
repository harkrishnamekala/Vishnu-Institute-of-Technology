<?php
require 'connect.php';
$get_all_tables = mysqli_query($conn,"SELECT * FROM details ORDER BY dest_avg");


?>
<!DOCTYPE html>
<html>
<head>
	<title>
	LEADER BOARD
	</title>
	<style type="text/css">
		table {
    border-collapse: collapse;
    width: 100%;
    overflow-x: auto;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
	</style>
</head>
<body>
<h1 style="text-align: center">Stratagem Leaderboard</h1>

<table>
	<tr>
	<th>PlayerId</th>
	<th>Playername</th>
	<th>Opponent 1</th>
	<th>AttackOne Star</th>
	<th>AttackOne Destruction</th>
	<th>Opponent 2</th>
	<th>AttackTwo Star</th>
	<th>AttackTwo Destruction</th>
	<th>Stars Added</th>
	<th>Destruction Average</th>
	<th>PLayer Phone</th>
	<th>Volunteer Phone</th>
	</tr>
	<?php 
	
	while ($row = mysqli_fetch_assoc($get_all_tables)) {
		echo "<tr>";
		echo "<td>" . $row['playerid'] . "</td>";
		echo "<td>" . $row['playername'] . "</td>";
		echo "<td>" . $row['opponent1'] . "</td>";
		echo "<td>" . $row['atone_star'] . "</td>";
		echo "<td>" . $row['atone_dest'] . "</td>";
		echo "<td>" . $row['opponent2'] . "</td>";
		echo "<td>" . $row['attwo_star'] . "</td>";
		echo "<td>" . $row['attwo_dest'] . "</td>";
		echo "<td>" . $row['star_avg'] . "</td>";
		echo "<td>" . $row['dest_avg'] . "</td>";
		echo "<td>" . $row['playerphone'] . "</td>";
		echo "<td>" . $row['volphone'] . "</td>";
		echo "</tr>";
	}
	
	?>
</table>
</body>
</html>