<?php
session_start();
    if (isset($_SESSION['id']))
        $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>VIT Problem Selector</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-register.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

	<header>
    <h1>VIT Problem Selector</h1>
        <a href="http://vishnu.edu.in">visit VIT</a>
    </header>

     <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>

    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->
        <?php
        require "connect.php";
        $get_user_selected_problem = mysqli_query($conn,"SELECT pid FROM details WHERE tid = $id");
        $fetch_id_array = mysqli_fetch_assoc($get_user_selected_problem);
        $pid = $fetch_id_array['pid'];

        $get_problem_based_on_pid = mysqli_query($conn,"SELECT pheading,pdescription FROM problems WHERE pid=$pid");
        $probleM_arr = mysqli_fetch_assoc($get_problem_based_on_pid);
        $pheading  = $probleM_arr['pheading'];
        $pdescription = $probleM_arr['pdescription']; 
        ?>
        <h2 style="text-align: center;"><?php echo $pheading; ?></h2>
        <pre style="margin-right: 75px; margin-left: 75px; margin-bottom: 200px">
            <?php echo $pdescription; ?>
        </pre>
    </div>
<?php
require "footer.php";
?>
</body>

</html>
