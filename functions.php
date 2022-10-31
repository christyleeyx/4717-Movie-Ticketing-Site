<?php 
	function connect(){
		$mysqli = new mysqli('localhost', "root", "", "movies");
		if($mysqli->connect_errno != 0){
			return $mysqli->connect_error;
		}else{
			$mysqli->set_charset("utf8mb4");	
		}
		return $mysqli;
	}

	function getAllGenres(){
		$mysqli = connect();
		$res = $mysqli->query("SELECT * FROM movies ORDER BY RAND()");
		while($row = $res->fetch_assoc()){
			$movies[] = $row;
		}
		return $movies;
	}

	function getMoviesByGenre($genre){
		$mysqli = connect();
		$res = $mysqli->query("SELECT * FROM movies WHERE genre = '$genre'");
		while($row = $res->fetch_assoc()){
			$movies[] = $row;
		}
		return $movies;
	}
