<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width" , initial-scale="1.0">
        <link rel="stylesheet" href="style.css">
        <script src="index.js"></script>
        <script src="https://kit.fontawesome.com/d4fd6bf7f6.js" crossorigin="anonymous"></script>
<header>

<body>
  <?php 
      include("connection.php");
      function createMovie($con)
      {
        if (isset($_POST['title'])) {
          $title = mysqli_real_escape_string($con, $_POST['title']);
        }
        if (isset($_POST['image'])) {
          $image = mysqli_real_escape_string($con, $_POST['image']);
        }
        if (isset($_POST['imdb rating'])) {
          $imdb_rating = mysqli_real_escape_string($con, $_POST['imdb rating']);
        }
        if (isset($_POST['description'])) {
          $genre = mysqli_real_escape_string($con, $_POST['description']);
        }
        if (isset($_POST['genre'])) {
            $genre = mysqli_real_escape_string($con, $_POST['genre']);
        }

        $query = "INSERT INTO `movies` (title, image, `imdb rating`, description, genre) values ('$title', '$image', '$imdb_rating', '$description', '$genre')"; 
        mysqli_query($con, $query);
        echo '<script type="text/javascript">';
        echo 'alert("Movie Created")';
        echo '</script>';
        unset($_POST);
      }

      function createShow($con)
      {
        if (isset($_POST['showdate'])) {
          $showDate = mysqli_real_escape_string($con, $_POST['showdate']);
        }
        if (isset($_POST['showtiming'])) {
          $showtiming = mysqli_real_escape_string($con, $_POST['showtiming']);
        }
        if (isset($_POST['titleDropdown'])) {
            $titleDropdown = mysqli_real_escape_string($con, $_POST['titleDropdown']);
        }
        $query = "INSERT INTO `Show` (movie_id, showdate, showtiming) values ('$titleDropdown', '$showdate', '$showtiming')"; 
        mysqli_query($con, $query);

        $getQuery = "SELECT show_ID FROM `SHOW` WHERE movie_id='$titleDropdown'  AND date='".$showdate."' AND showtiming='".$showtiming."' ";
        $result = mysqli_query($con, $getQuery);
        $array = mysqli_fetch_assoc($result);
        $show_ID=$array['show_ID'];
        mysqli_free_result($result);
        // HARDCODED WAY
        // $seatquery = "INSERT INTO `Show Seat` (seatName, status, show_ID, price) VALUES ('A1', 1, $show_ID)";
        $seatquery = "INSERT INTO `show_seat` (seat, seatstatus, show_ID)
        VALUES 
            ('A1', 1, $show_ID),('A2', 1, $show_ID),('A3', 1, $show_ID),('A4', 1, $show_ID),('A5', 1, $show_ID),('A6', 1, $show_ID),('A7', 1, $show_ID),('A8', 1, $show_ID),
            ('B1', 1, $show_ID),('B2', 1, $show_ID),('B3', 1, $show_ID),('B4', 1, $show_ID),('B5', 1, $show_ID),('B6', 1, $show_ID),('B7', 1, $show_ID),('B8', 1, $show_ID),            
            ('C1', 1, $show_ID),('C2', 1, $show_ID),('C3', 1, $show_ID),('C4', 1, $show_ID),('C5', 1, $show_ID),('C6', 1, $show_ID),('C7', 1, $show_ID),('C8', 1, $show_ID),
            ('D1', 1, $show_ID),('D2', 1, $show_ID),('D3', 1, $show_ID),('D4', 1, $show_ID),('D5', 1, $show_ID),('D6', 1, $show_ID),('D7', 1, $show_ID),('D8', 1, $show_ID),
            ('E1', 1, $show_ID),('E2', 1, $show_ID),('E3', 1, $show_ID),('E4', 1, $show_ID),('E5', 1, $show_ID),('E6', 1, $show_ID),('E7', 1, $show_ID),('E8', 1, $show_ID),
            ('F1', 1, $show_ID),('F2', 1, $show_ID),('F3', 1, $show_ID),('F4', 1, $show_ID),('F5', 1, $show_ID),('F6', 1, $show_ID),('F7', 1, $show_ID),('F8', 1, $show_ID);
        ";
        mysqli_query($con, $seatquery);
        echo '<script type="text/javascript">';
        echo 'alert("Show Created")';
        echo '</script>';
      }

      if(isset($_POST['createMovie']))
      {
        createMovie($con);
      } 

      if(isset($_POST['createShow']))
      {
        createShow($con);
      } 
      mysqli_close(($con));
    ?>

  <div class="container">
    <h1>Create Movie</h1>
    <form id="movie-form" method="POST">
      <div class="input-container">
        <label for="title"><span>*</span>Movie title:</label>
        <input id="title" name="title" placeholder="Movie Name" required />
      </div>
      <div class="input-container">
        <label for="image"><span>*</span>Movie's Image Url:</label>
        <input id="image" name="image" placeholder="Movie Image URL" required />
      </div>
      <div class="input-container">
        <label for="imdb rating"><span>*</span>Movie Rating:</label>
        <input id="imdb rating" name="imdb rating" placeholder="Movie Rating" required />
      </div>
      <div class="input-container">
        <label for="genre"><span>*</span>Genre:</label>
        <input type="text" id="genre" name="genre" placeholder="genre" required />
      </div>
      <input type="submit" class="create-button" name="createMovie" value="Create Movie">
    </form>
    
    <h1>Create Show Time</h1>
    <form id="show-form" method="POST">
      <div class="input-container">
        <label for="showDate"><span>*</span>Show Date:</label>
        <input type="date" id="showDate" name="showDate" placeholder="Show Date" required />
      </div>
      <div class="input-container">
        <label for="showtiming"><span>*</span>Screening Time:</label>
        <input type="time" id="showtiming" name="showtiming" placeholder="Screening Time" required />
      </div>
      <div class="input-container">
        <label for="titleDropdown"><span>*</span>Movie Name:</label>
        <select name="titleDropdown" class="dropdown-list" id="titleDropdown">
          <?php
            include("connection.php");
            $query = "SELECT * FROM `movies`";
            $result = mysqli_query($con, $query) ;
            $moviess = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
            mysqli_close(($con));
            foreach($moviess as $movies) {
              echo '<option value="'.$movies['movie_id'].'">'.$movies['title'].'</option>';    
            }
          ?>
        </select>
      </div>
      <input type="submit" class="create-button" name="createShow" value="Create Show">
    </form>
  </div>
</body>

</html>
