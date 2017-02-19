
<?php
#This is to view the entire data in the database not for the audrino
    include ("connect.php");

    $data = mysqli_query($conn,"SELECT * FROM information;");
#feteching the individual records
    while($row = mysqli_fetch_assoc($data)){
        
       echo "<table style='width:100%'>";
       echo "<tr>";
       echo "<td>";
       echo "Student ID :" . $row['id'] ."<br>"."Student Name :" . $row['name'] . "<br>" ."Englsih :". $row['english'] . "<br>". "Maths-1 :" . $row['maths1'] ."<br>". "Maths-2 :" .$row['maths2'] ."<br>". "Physics :" . $row['physics'] ."<br>". "Chemistry :" . $row['chemistry'] . "<br>".  "Drawing :" .$row['drawing'] ."<br>". "Attendence :" . $row['attend'] . "<br>";
       echo "---------------------------Divider---------------------------------------";
       echo "</td>";
       echo "</tr>";

echo "</table>";

    }
?>