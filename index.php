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
		<a href="index.html" class="logo">
			<i class="fa-solid fa-meteor fa-xl mainiconcolor"></i>
			<!-- <img src="weblogo.png" class="weblogo" /> -->
			METEOR<span>MOVIES</span>
		</a>
		<b class="topnav">
			<a class="active" href="index.html">Home</a>
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
	<select name="genres" id="genres">
		<option value="">All Genres</option>
		<option value="books">Action</option>
		<option value="games">Horror</option>
		<option value="tablets">Animation</option>
		<option value="phones">Foreign</option>
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
					<button class="book_tickets">Book Tickets</button>
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
	<!-- movie 2 -->
	<!-- <div class="nowshowing01">
		<div class="nowshowing02">
			<img alt="walter mitty" src="https://m.media-amazon.com/images/M/MV5BN2M3Y2NhMGYtYjUxOS00M2UwLTlmMGUtYzY4MzFlNjZkYzY2XkEyXkFqcGdeQXVyODc0OTEyNDU@._V1_FMjpg_UX1000_.jpg">
			<div class="movie_details">
				<h3 class="movie_title">Barbarian</h3>
				<p class="movie_desc">A young woman discovers the rental home she booked is already 
					occupied by a stranger. Against her better judgment, she decides to spend the night 
					but soon discovers there's a lot more to fear than just an unexpected house guest.</p>
				<button class="book_tickets">Book Tickets</button>
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
	</div> -->
	<!-- movie 3 -->
	<!-- <div class="nowshowing01">
		<div class="nowshowing02">
			<img alt="walter mitty" src="https://m.media-amazon.com/images/M/MV5BMDU2ZmM2OTYtNzIxYy00NjM5LTliNGQtN2JmOWQzYTBmZWUzXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg">
			<div class="movie_details">
				<h3 class="movie_title">Bullet Train</h3>
				<p class="movie_desc">Ladybug is an unlucky assassin who's determined 
					to do his job peacefully after one too many gigs has gone off the rails. 
					Fate, however, may have other plans as his latest mission -- on the world's fastest train.</p>
				<button class="book_tickets">Book Tickets</button>
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
	</div> -->
</div>
<script src="script.js"></script> <!-- Link to the javascript file -->

</body>

</html>