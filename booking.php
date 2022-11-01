<!DOCTYPE html>
<html lang="en">
<?php
$id = $_GET['id'];
//conditions
if ((!$_GET['id'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}
include "connection.php";
$movieQuery = "SELECT * FROM movies WHERE movie_id=$id";
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
      <h1>RESERVE YOUR TICKET</h1>
    </div>
    <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
      <i class="fas fa-2x fa-times"></i>
    </div>
    <div class="booking-panel-section booking-panel-section3">
      <div class="movie-box">
        <?php
                echo '<img src="' . $row['image'] . '" alt="">';
                ?>
      </div>
    </div>
    <div class="booking-panel-section booking-panel-section4">
      <div class="title"><?php echo $row['title']; ?></div>
      <div class="movie-information">
        <table>
          <tr>
            <td>GENRE</td>
            <td><?php echo $row['genre']; ?></td>
          </tr>
          <tr>
            <td>Summary</td>
            <td><?php echo $row['description']; ?></td>
          </tr>
          <tr>
            <td><img src=https://cdn.freebiesupply.com/images/large/2x/imdb-logo-transparent.png width = 50px></td>
            <td><?php echo $row['imdb rating']; ?></td>
          </tr>
        </table>
      </div>
    
        <div class="trailer-box">
            <iframe width="600" height="350" src = "<?php echo $row['trailer']?>"> </iframe>
        </div>
    

      <div class="booking-form-container">
        <form action="verify.php" method="POST">


          <select name="theatre" required>
            <option value="" disabled selected>THEATRE</option>
            <option value="main-hall">Main Hall</option>
            <option value="vip-hall">Gold Class Hall</option>
          </select>

          <select name="type" required>
            <option value="" disabled selected>TYPE</option>
            <option value="3d">3D</option>
            <option value="2d">2D</option>
            <option value="imax">IMAX</option>
          </select>

          <select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="1-11">November 1,2022</option>
            <option value="2-11">Nobember 2,2022</option>
            <option value="3-11">Nobember 3,2022</option>
            <option value="4-11">Nobember 4,2022</option>
            <option value="5-11">Nobember 5,2022</option>
          </select>

          <select name="hour" required>
            <option value="" disabled selected>TIME</option>
            <option value="09-00">09:00 AM</option>
            <option value="12-00">12:00 PM</option>
            <option value="15-00">03:00 PM</option>
            <option value="18-00">06:00 PM</option>
            <option value="21-00">09:00 PM</option>
            <option value="24-00">12:00 AM</option>
          </select>

          <input placeholder="First Name" type="text" name="fName" required>

          <input placeholder="Last Name" type="text" name="lName">

          <input placeholder="Phone Number" type="text" name="pNumber" required>
          <input placeholder="email" type="email" name="email" required>
          <input type="hidden" name="movie_id" value="<?php echo $id; ?>">



          <button type="submit" value="save" name="submit" class="form-btn">Book a seat</button>

        </form>
      </div>
    </div>
  </div>

  <script src="scripts/jquery-3.3.1.min.js "></script>
  <script src="scripts/script.js "></script>
</body>

</html>