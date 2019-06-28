<?php

if (isset($_GET['id_yetu'])){
    $receivedId = $_GET['id_yetu'];

    //Start by connecting to the db
    $conn = mysqli_connect("localhost","root","hp101","appointments");
    if (!$conn){
        echo "Connection failed";
    }else{
        $deleteQuery = "DELETE FROM booking WHERE id=$receivedId";
        $deleting = mysqli_query($conn,$deleteQuery);
        if (!$deleting){
            echo "Accepting failed";
        }else{
            header('location:view_bookings.php');
        }
    }
}


?>