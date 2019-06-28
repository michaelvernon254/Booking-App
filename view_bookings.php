<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookings</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Service</th>
            <th>Time</th>
            <th>Cost</th>
            <th>Accept</th>
        </tr>
        <?php
        //Start by connecting to the db
        $conn = mysqli_connect("localhost","root","hp101","appointments");
        if (!$conn){
            echo "Connection failed";
        }else{
            $selectQuery = "SELECT * FROM booking";
            $viewing = mysqli_query($conn,$selectQuery);
            while ($row = mysqli_fetch_assoc($viewing)){
                extract($row);
                echo "
                    <tr>
                        <td>$name</td>      
                        <td>$date</td>      
                        <td>$service</td>      
                        <td>$time</td>      
                        <td>$cost</td>      
                        <td><a href='delete.php?id_yetu=$id' class='btn btn-primary'>Accept</a></td>      
                    </tr>";
            }
        }
        ?>
    </table>
</body>
</html>