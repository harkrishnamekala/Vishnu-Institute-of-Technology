<!DOCTYPE html>

<?php
        include('connect.php');
        session_start();
       if(!isset($_SESSION['loggedIn'])){
           header("Location: login.php");
       }else{
           $email = $_SESSION['email'];
           $data = mysqli_query($conn,"SELECT * FROM donors WHERE email='$email' ");
           $row = mysqli_fetch_assoc($data);
       }
?>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Form With Labels On Top</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-labels-on-top.css">

</head>


	<header>
		<h1>Vishnu BloodBank</h1>
        <a href="http://vishnu.edu.in">Visit Vishnu EDU</a>
    </header>

     <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="requestblood.php">Request Blood</a></li>
        <li><a href="Logout.php">Donor Logout</a></li>
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-labels-on-top.css -->

        <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<table>
  <tr>
    <th>Details</th>
    <th>Student Data</th>
  </tr>
  <tr>
    <td>Student ID</td>
    <td><?php echo $row['id'];  ?></td>
  </tr>
  <tr>
  <tr>
    <td>Name</td>
    <td><?php echo $row['name'];  ?></td>
  </tr>
  <tr>
    <td>Phone No</td>
    <td><?php echo "+91-" . $row['phone']; ?></td>
  </tr>
  <tr>
  <tr>
    <td>Place</td>
    <td><?php echo $row['place']; ?></td>
  </tr>
  <tr>
    <td>Blood Group</td>
    <td><?php echo $row['bloodgroup']; ?></td>
  </tr>
</table>

</body>

</html>

<?php mysqli_close($conn);
include('footer.php');
?>