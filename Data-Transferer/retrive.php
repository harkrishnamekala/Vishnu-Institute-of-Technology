<?php
    //Getting the connection information
    include("connect.php");
    //We are using the GET method coz we kinda need the input from the URL
    $id = $_GET['id'];
    $query = $_GET['query'];
    if($query == "attendence"){
        //Selecting the required data from the database
        $sql = "SELECT attend FROM information WHERE id='$id'";
        $data = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($data);
        //Encoding the data into JSON
        echo json_encode($row);
    }
    //Created the two cluases inorder to reduce the time complexity and increase the page return speeds
    else if ($query = "marks"){
        $sql = "SELECT english,maths1,maths2,physics,chemistry,drawing FROM information WHERE id='$id'";
        $data = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($data);
        echo json_encode($row);

    }
?>