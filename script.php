<?php 
	require "functions.php";

	if(isset($_POST['genre'])){
		$genre = $_POST['genre'];

		if($genre === ""){
			$genre = getAllGenres();
		}else{
			$genre = getMoviesByGenre($genre);
		}
		echo json_encode($genre);
	}