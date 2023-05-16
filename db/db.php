<?php 
 $genrs1 = ["Action"];
 //creazione di oggeti "movie"
 $movie1 = new Movie(1, "Avatar", "Avatar2", "USA", "2022", 9.3, "./img/avatar.webp", $genrs1);

 $genrs2 = ["Crime"];
 $movie2 = new Movie(2, "The Godfather", "The Godfather", "USA", "1972", 9.2, "./img/padrino.jpg", $genrs2);

 $movies = [$movie1, $movie2];
?>