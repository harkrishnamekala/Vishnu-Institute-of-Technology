<!DOCTYPE html>

<?php
    include('connect.php');
    if(isset($_POST['search'])){
    $searchquery = $_POST['search'];
    $data = mysqli_query($conn,"SELECT * FROM donors WHERE bloodgroup='$searchquery' ");
    }
    ?>
<html>

<head>
    <style>
table {
    border-collapse: collapse;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}

th, td {
    text-align: left;
    padding: 12px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Search Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-search.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>


	<header>
		<h1>Vishnu BloodBank</h1>
        <a href="http://vishnu.edu.in">Visit Vishnu EDU</a>
    </header>

     <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register as Donor</a></li>
        <li><a href="login.php">Donor Login</a></li>
        <li><a href="requestblood.php">Request Blood</a></li>
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-search.css -->

        <form class="form-search" method="POST" action="requestblood.php">
            <input type="search" name="search" placeholder="I am looking for which bloodgroup..">
            <button type="submit">Search</button>
            <i class="fa fa-search"></i>
        </form>
      <?php 
       if(isset($_POST['search'])){
            echo<<<LOOP
            
<table>
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Place</th>
    <th>BloodGroup</th>
  </tr>

LOOP;
                while($row = mysqli_fetch_assoc($data)){
                    echo "<tr>" . "<td>" .  $row['name'] . "</td>" . "<td>". $row['phone']. "</td>" . "<td>". $row['place'] ."</td>" . "<td>". $row['bloodgroup'] . "</td>" . "</tr>";
                }
                echo "</table>";
       }
       mysqli_close($conn);
       include('footer.php');
?>

    </div>

</body>

</html>
 
