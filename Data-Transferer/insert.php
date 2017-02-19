<?php 
    include ("connect.php");

    //Checking if the student ID is present
    if(isset($_POST['studentid'])){
        $studentid = $_POST['studentid'];
    $studentname = $_POST['studentname'];
    $english = $_POST['english'];
    $maths1 = $_POST['maths1'];
    $maths2 = $_POST['maths_2'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $drawing = $_POST['drawing'];
    $attend = $_POST['attend'];
    }
    //Selecting the databased on the student ID
    $checking = mysqli_query($conn,"SELECT id FROM information WHERE id='$studentid'");
    //Decision where to display marks or attendence based on the argument
    $dat = mysqli_fetch_assoc($checking);
     if($studentid == $dat['id']){
        $insert = mysqli_query($conn,"UPDATE information SET english=$english, maths1=$maths1, maths2=$maths2, physics=$physics, chemistry=$chemistry, drawing=$drawing ,attend=$attend WHERE id='$studentid'");
        if($insert){
            //if the data is already present the data is updated in the database
            echo "Data of the Student is Already Present Hence it is updated";
        }
        else{
            //If there is a problem with the connection data updation fails
            echo "Data of this studnet already exits But Data updation Failed". mysqli_error($conn);
        }
    }
    else{ 
        //If the record is not presnt the New Record is created and the data is inserted       
        $sql = "INSERT INTO information (id, name, english, maths1, maths2, physics, chemistry, drawing, attend) VALUES ('$studentid', '$studentname', $english, $maths1, $maths2, $physics, $chemistry, $drawing, $attend)";
        if(mysqli_query($conn,$sql)){
            echo "Data Inserted";
        } 
        else{ 
        //If there is a error with the data connection the the error is diaplayed
         die("Data not inserted".mysqli_error($conn));
        }
    }
    $conn->close();
    ?>