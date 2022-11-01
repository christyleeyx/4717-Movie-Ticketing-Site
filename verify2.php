<?php
include "connection.php";
session_start();
$movie_id = $_POST['movie_id'];

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
$movieQuery = "SELECT * FROM movies WHERE movie_id=$movie_id";
$result = mysqli_query($con, $movieQuery);
$row = mysqli_fetch_assoc($result);
// print_R($row);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="booking.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Book <?php echo $row['movieTitle']; ?> Now</title>
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
                echo '<img src="' . $row['image'] . '" alt="">';
                ?>
      </div>
    </div>
    <div class="booking-panel-section booking-panel-section4">
        <div class="title"><img src = "assets/steps/3.png" width=50%></div>
    
        <div id="wrapper" class="booking-form-container">
            <form action="verify3.php" method="POST">

                <input placeholder="First Name" type="text" name="fName" required>

                <input placeholder="Last Name" type="text" name="lName">

                <input placeholder="Phone Number" type="text" name="pNumber" required>

                <input placeholder="email" type="email" name="email" required>

                <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">

                <button type="submit" value="particulars_checked" name="submit" class="form-btn">Confirm</button>
            </form>
        </div>

    </div>
</div>

  <!-- <script src="scripts/jquery-3.3.1.min.js "></script>
  <script src="scripts/script.js "></script> -->
</body>

</html>