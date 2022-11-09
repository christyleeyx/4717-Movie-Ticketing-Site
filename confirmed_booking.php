<?php
include "connection.php";
session_start();

// from post
$movie_id = $_POST['movie_id'];
$cust_name = $_POST['cust_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$order_id = $_POST['ORDERID'];
$booking_amt = $_POST['AMOUNT'];
$bookingTheatre = $_POST['bookingTheatre'];
$bookingType = $_POST['bookingType'];
$bookingTime = $_POST['bookingTime'];
$bookingDate = $_POST['bookingDate'];
$bookingSeats = $_POST['bookingSeats'];

if ((!$_POST['submit'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO orders(`orderID`, `cust_name`, `bookingTheatre`, `bookingType`,  `bookingDate`, `bookingTime`, `bookingSeats`, `movie_id`, `bookingMobile`, `bookingEmail`, `bookingAmount`)
    VALUES ('$order_id', '$cust_name', '$bookingTheatre', '$bookingType', '$bookingDate', '$bookingTime', '$bookingSeats', '$movie_id', '$mobile', '$email', '$booking_amt')";

    $result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include "connection.php";

   // from databases
   $orderQuery = "SELECT * FROM temp_bookingtable WHERE temp_index=1";
   $order_result = mysqli_query($con, $orderQuery);
   $row = mysqli_fetch_assoc($order_result);

   $movieQuery = "SELECT * FROM movies WHERE movie_id=$movie_id";
   $movie_result = mysqli_query($con, $movieQuery);
   $movie_row = mysqli_fetch_assoc($movie_result);

   $bookingTheatre = $row['bookingtheatre'];
   $bookingType = $row['bookingtype'];
   $bookingTime = $row['bookingtime'];
   $bookingDate = $row['bookingdate'];

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
    <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-5); return false;">
        <i class="fas fa-2x fa-times"></i>
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
            <form method="post" action="pgRedirect.php">
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
                            <td><?php echo $cust_name; ?></td>
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
                                <?php echo $bookingTheatre; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td><label>Type</label></td>
                            <td>
                                <?php echo $bookingType; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td><label>Time</label></td>
                            <td>
                                <?php echo $bookingTime; ?>
                            </td>
                        </tr>


                        <tr>
                            <td>8</td>
                            <td><label>Amount</label></td>
                            <td>
                                <?php echo $booking_amt; ?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">Your booking is confirmed! An email with your order ID has been sent!</td>
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