<?php include "functions.php" ?>
<html lang="en">
<body>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
	<link rel="stylesheet" href="style.css">
	<script src="index.js"></script>
	<script src="https://kit.fontawesome.com/d4fd6bf7f6.js" crossorigin="anonymous"></script>

	<header>
		<a href="index.php" class="logo">
			<i class="fa-solid fa-meteor fa-xl mainiconcolor"></i>
			<!-- <img src="weblogo.png" class="weblogo" /> -->
			METEOR<span>MOVIES</span>
		</a>
		<b class="topnav">
			<a class="active" href="index.php">Home</a>
			<a href="checkbooking.html">Check Booking</a>
			<a href="location.html">Location</a>
		</b>
		<a href="cart.html">
			<img src="cart.png" class="weblogo" />
		</a>
	</header>
</head>

<section class="slideshow-container">
	
	<div class="home" id="home">
		<div class="mySlides fade">
			<img src="Love & Thunder Movie Banner.jpg" alt="Love & Thunder" class="banner-img">
			<div class="home-text">
				<h1 class="home-title">Love & Thunder</h1>
				<p>Releasing December 22</p>
				<a href="#" class="watch-btn">
					<i class="fa-solid fa-circle-play fa-2xl mainiconcolor"></i>
					<span>Watch the trailer</span>
				</a>
			</div>
		</div>

		<div class="mySlides fade">
			<img src="Top Gun Maverick Movie Banner.jpg" alt="Love & Thunder" class="banner-img">
			<div class="home-text">
				<h1 class="home-title">Top Gun Maverick</h1>
				<p>Releasing November 4</p>
				<a href="#" class="watch-btn">
					<i class="fa-solid fa-circle-play fa-2xl mainiconcolor"></i>
					<span>Watch the trailer</span>
				</a>
			</div>
		</div>

		<div class="mySlides fade">
			<img src="Avatar 2 Movie Banner.jpg" alt="Love & Thunder" class="banner-img">
			<div class="home-text">
				<h1 class="home-title">Avatar 2</h1>
				<p>Releasing January 31</p>
				<a href="#" class="watch-btn">
					<i class="fa-solid fa-circle-play fa-2xl mainiconcolor"></i>
					<span>Watch the trailer</span>
				</a>
			</div>
		</div>
	</div>
	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094</a>
	<a class="next" onclick="plusSlides(1)">&#10095</a>
</section>
<script src="carousel.js"></script>
<br>
<!-- The dots/circles -->
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- nowshowing + filters -->
<div class="nowshowing_filter">
	<h2 class="nowshowing_title">Now Showing</h2>
<!-- filters -->
	<select name="movies" id="movies">
		<option value="">All Genres</option>
		<option value="action">Action</option>
		<option value="horror">Horror</option>
		<option value="animation">Animation</option>
		<option value="foreign">Foreign</option>
	</select>
</div>

<!-- Now Showing Movies -->
<div class="nowshowing00">
<!-- Flex Column Movie list -->
	<!-- movie 1 -->
	<?php
		$movies = getAllGenres();
		foreach ($movies as $movie) {
			?>
		<div class="nowshowing01">
			<div class="nowshowing02">
				<img alt="" src="<?php echo $movie['image'] ?>">
				<div class="movie_details">
					<h3 class="movie_title"><?php echo $movie['title'] ?></h3>
					<p class="movie_desc"><?php echo $movie['description'] ?></p>
					<a href="booking.php?id=<?php echo $movie['movie_id'] ?>"><button class="book_tickets">Book Tickets</button></a>
				</div>
				<div class="movie_timings">
					<h5 class="movietimings_title">Timings</h5>
					<div class="timing_buttons">
						<button class="time_button">11:15 am</button>
						<button class="time_button">12:45 pm</button>
						<button class="time_button">1:15 pm</button>
						<button class="time_button">5:50 pm</button>
						<button class="time_button">9:00 pm</button>
					</div>
				</div>
			</div>
		</div>
	<?php 
	}
	?>
</div>
<script src="script.js"></script> <!-- Link to the javascript file -->

</body>

</html>