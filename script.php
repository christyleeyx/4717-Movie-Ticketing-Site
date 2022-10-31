<?php 
	require "functions.php";

	if(isset($_POST['genre'])){
		$genre = $_POST['genre'];

		if($genre === ""){
			$movies = getAllGenres();
		}else{
			$movies = getMoviesByGenre($genre);
		}
		// convert $products to a json format, echo statement sends to the javascript file server requests
		echo json_encode($movies);
	}