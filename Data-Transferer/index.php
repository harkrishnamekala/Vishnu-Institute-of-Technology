<!DOCTYPE html>
<html>

<head>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Vishnu Student Database - Data Insert</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>


	<header>
		<h1>Vishnu Student Database - Data Insert</h1>
        <a href="http://vishnu.edu.in">Visit Vishnu</a>
    </header>

    <ul>
        <li><a href="viewdata.php">To View Entire Database</a></li>
        <li><a href="retrive.php">Retrive Data requires URL arguments</a></li>
        <li><a href="README.md">SUPPORT</a></li>
    </ul>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" name="data-form" action="insert.php">

            <div class="form-title-row">
                <h1>Data Insertion Form</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Student ID</span>
                    <input type="text" name="studentid">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Student Name</span>
                    <input type="text" name="studentname">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Enter the Marks Down Below</span>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>English</span>
                    <input type="text" name="english">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Maths - 1</span>
                    <input type="text" name="maths1">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Maths - 2</span>
                    <input type="text" name="maths_2">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Physics</span>
                    <input type="text" name="physics">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Chemistry</span>
                    <input type="text" name="chemistry">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>drawing</span>
                    <input type="text" name="drawing">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Attendence (Including Fraction Values)</span>
                    <input type="text" name="attend">
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Submit Data</button>
            </div>

        </form>

    </div>

</body>

</html>
