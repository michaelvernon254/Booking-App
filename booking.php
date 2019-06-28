<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="fombook" action="bookProcess.php" method="POST">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="cname" required placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" class="form-control" name="cdate" required>
                    </div>

                    <div class="form-group">
                        <label>Service:</label>
                        <input type="text" class="form-control" name="cservice" placeholder="Service" required>
                    </div>

                    <div class="form-group">
                        <label>Time:</label>
                        <input type="text" class="form-control" name="ctime" placeholder="Time" required>
                    </div>

                    <div class="form-group">
                        <label>Cost:</label>
                        <input type="text" class="form-control" name="ccost" placeholder="Cost" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="btn_book">Book</button>
                    <a href="view_bookings.php" class="btn btn-info btn-block" name="btn_book">View Bookings</a>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>