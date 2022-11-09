<?php
include "connection.php";
session_start();

// variables
// $fname = $_POST['fName'];
// $lname = $_POST['lName'];
// $email = $_POST['email'];
// $mobile = $_POST['pNumber'];
$theatre = $_POST['theatre'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['hour'];
$movie_id = $_POST['movie_id'];
$order = "MM" . rand(10000, 99999999);
$cust  = "CUST" . rand(1000, 999999);

//conditions
if ((!$_POST['submit'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}

// inserting into bookings ------ COME BACK TO THIS LATER 

if (isset($_POST['submit'])) {

    // $qry = "INSERT INTO temp_bookingtable(`temp_index`, `movie_id`, `bookingtheatre`, `bookingtype`, `bookingdate`, `bookingtime`, `ORDERID`)VALUES ('1', '$movie_id','$theatre','$type','$date','$time','$order')";
    $qry = "UPDATE temp_bookingtable SET movie_id = '$movie_id', bookingtheatre = '$theatre', bookingtype = '$type', bookingdate = '$date', bookingtime = '$time', ORDERID = '$order' WHERE temp_index = 1;";
    $result = mysqli_query($con, $qry);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include "connection.php";
$movieQuery = "SELECT * FROM movies WHERE movie_id=$movie_id";
$result = mysqli_query($con, $movieQuery);
$row = mysqli_fetch_assoc($result);
print_R($row);
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
      <div class="title"><img src = "assets/steps/1.1.png" width=50%></div>
      <div class="movie-information">
       <img src = "seating plan.png" width=80%> 
      </div>
      <script type="text/javascript" src="table_script.js"></script>
      <div id="wrapper" class="seat-form-container">
        <form action="verify2.php" method="POST">
        <table align='center' cellspacing=5 cellpadding=10 id="data_table" border=1>
            <tr>
                <th>Row</th>
                <th>Column</th>
            </tr>

            <tr>
                <td><input type="text" id="new_alpha"></td>
                <td><input type="text" id="new_num"></td>
                <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
            </tr>
        </table>

        <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">

        <button type="submit" value="book_seats" name="submit" class="form-btn">Book Seats Chosen</button>
        </form> 

        

    </div>

        

      <!-- <div class="booking-form-container">
        <form action="verify2.php" method="POST">
        
        <select name="row" required>
            <option value="" disabled selected>ROW</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="K">K</option>
          </select>

          <input placeholder="Type Column No. here" type="text" name="columnno" required>

          



          <button type="submit" value="add_seat" name="add_seat" class="form-btn">Add a Seat</button>

        </form> -->
      </div>
    </div>
  </div>

  <!-- <script src="scripts/jquery-3.3.1.min.js "></script>
  <script src="scripts/script.js "></script> -->
</body>

</html>