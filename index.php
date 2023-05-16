<?php 

class movie 
{

public $id;
public $title;
public $original_title;
public $nationality;
public $date;
public $vote;
public $image;

public function __construct($id, $title, $original_title, 
$nationality, $date, $vote, $image)

{
    $this->id = $id;
    $this->title = $title;
    $this->original_title = $original_title;
    $this->nationality = $nationality;
    $this->date = $date;
    $this->vote = $vote;
    $this->image = $image;

}

}
 //creazione di oggeti "movie"
 
 $movie1 = new Movie(1, "avatar", "Avatar2", "USA", "2023", 9.3, "image1.jpg");
 $movie2 = new Movie(2, "The Godfather", "The Godfather", "USA", "1972", 9.2, "image2.jpg");

//stampa di oggeto $movie1
echo "Movie 1:\n";
echo "ID: " . $movie1->id;
echo "Title: " . $movie1->title;
echo "Original Title: " . $movie1->original_title;
echo "Nationality: " . $movie1->nationality;
echo "Date: " . $movie1->date;
echo "Vote: " . $movie1->vote;
echo "Image: " . $movie1->image;

//stampa di oggeto $movie2
echo "Movie 2:\n";
echo "ID: " . $movie2->id;
echo "Title: " . $movie2->title;
echo "Original Title: " . $movie2->original_title;
echo "Nationality: " . $movie2->nationality;
echo "Date: " . $movie2->date;
echo "Vote: " . $movie2->vote;
echo "Image: " . $movie2->image;

?>

