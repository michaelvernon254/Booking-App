<?php
    if (isset($_POST['btn_book'])){
        $name = $_POST['cname'];
        $date = $_POST['cdate'];
        $service = $_POST['cservice'];
        $time = $_POST['ctime'];
        $cost = $_POST['ccost'];

        //Start by connecting to the db
        $conn = mysqli_connect("localhost","root","hp101","appointments");
        if (!$conn){
            echo "Connection failed";
        }else{
            $insertQuery = "INSERT INTO `booking`(`id`, `name`, `date`, `service`, `time`, `cost`) VALUES (null ,'$name','$date','$service','$time','$cost')";
            $saving = mysqli_query($conn,$insertQuery);
            if (!$saving){
                echo "Booking failed";
            }else{
                echo "Successfully booked <br> <a href='booking.php'>Ok</a>";
            }
        }
    }

?>