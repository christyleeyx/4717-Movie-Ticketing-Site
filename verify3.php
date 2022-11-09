<?php
include "connection.php";
session_start();
$movie_id = $_POST['movie_id'];
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$mobile = $_POST['pNumber'];
$amt = $_POST['pNumber'];
//conditions
if ((!$_POST['submit'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}

// if (isset($_POST['submit'])) {
//     $result = mysqli_query($con, $qry);
// }
?>

<!DOCTYPE html>
<html lang="en">
<?php
include "connection.php";
$orderQuery = "SELECT * FROM temp_bookingtable WHERE temp_index=1";
$result = mysqli_query($con, $orderQuery);
$row = mysqli_fetch_assoc($result);
$type = $row['bookingtype'];
$theatre = $row['bookingtheatre'];
$time = $row['bookingtime'];
$date = $row['bookingdate'];
$ORDERID = $row['ORDERID'];

$movieQuery = "SELECT * FROM movies WHERE movie_id=$movie_id";
$movie_result = mysqli_query($con, $movieQuery);
$movie_row = mysqli_fetch_assoc($movie_result);
// print_R($row);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="booking.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Book <?php echo $movie_row['movieTitle']; ?> Now</title>
  <link rel="icon" type="image/png" href="img/logo.png">
  <script src="_.js "></script>
</head>

<body style="background-color: black;">
  <div class="booking-panel">
    <div class="booking-panel-section booking-panel-section1">
      <h1>BOOK YOUR TICKETS</h1>
    </div>
    <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
        <i class="fas fa-2x fa-arrow-left"></i>
    </div>
    <div class="booking-panel-section booking-panel-section3">
      <div class="movie-box">
        <?php
                echo '<img src="' . $movie_row['image'] . '" alt="">';
                ?>
      </div>
    </div>
    <div class="booking-panel-section booking-panel-section4">
        <div class="title"><img src = "assets/steps/3.png" width=50%></div>
    
        <div id="wrapper" class="seat-form-container">
            <form method="post" action="confirmed_booking.php">
                <table border="1" style="text-align: center;">
                    <tbody>
                        <tr>
                            <th>S.No</th>
                            <th>Label</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><label>ORDER_ID</label></td>
                            <td><?php echo $row['ORDERID']; ?>
                                <input type="hidden" name="ORDERID" value="<?php echo $row['ORDERID']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><label>Name</label></td>
                            <td><?php echo $_POST['fName'] . " " . $_POST['lName']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>3</td>
                            <td><label>Email</label></td>
                            <td><?php echo $email; ?></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td><label>Mobile Number</label></td>
                            <td><?php echo $mobile; ?></td>
                        </tr>
                        

                        <tr>
                            <td>5</td>
                            <td><label>Theatre</label></td>
                            <td>
                                <?php echo $row['bookingtheatre']; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td><label>Type</label></td>
                            <td>
                                <?php echo $row['bookingtype']; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td><label>Time</label></td>
                            <td>
                                <?php echo $row['bookingtime']; ?>
                            </td>
                        </tr>


                        <tr>
                            <td>8</td>
                            <td><label>Amount*</label></td>
                            <td>
                                <?php
                                if ($type == "2d") {
                                    $amt = 10.0;
                                }
                                if ($type == "3d") {
                                    $amt = 13.50 ;
                                }
                                if ($type == "imax") {
                                    $amt = 18.0;
                                }

                                ?>

                                <input type="text" name="AMOUNT" value="<?php echo $amt; ?>" readonly>
                                <input type="hidden" name="ORDERID" value="<?php echo $row['ORDERID']; ?>">
                                <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">
                                <input type="hidden" name="cust_name" value="<?php echo $_POST['fName'] . " " . $_POST['lName']; ?>">
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
                                <input type="hidden" name="bookingType" value="<?php echo $type; ?>">
                                <input type="hidden" name="bookingTime" value="<?php echo $time; ?>">
                                <input type="hidden" name="bookingTheatre" value="<?php echo $theatre; ?>">
                                <input type="hidden" name="bookingDate" value="<?php echo $date; ?>">
                                <input type="hidden" name="bookingSeats" value="A12, A13">




                            </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button value="Book Now!" type="submit" name="submit" type="button" class="form-btn">Confirm!</button>
                                <!-- <input value="CheckOut" type="submit"	onclick=""></td> -->
                        </tr>
                    </tbody>
                </table>
                * - Mandatory Fields
            </form>
        </div>

    </div>
</div>

  <!-- <script src="scripts/jquery-3.3.1.min.js "></script>
  <script src="scripts/script.js "></script> -->
</body>

</html>