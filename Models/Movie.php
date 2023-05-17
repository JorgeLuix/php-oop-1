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
public $genero;

public function __construct($id, $title, $original_title, 
$nationality, $date, $vote, $image, $genero)

{
    $this->id = $id;
    $this->title = $title;
    $this->original_title = $original_title;
    $this->nationality = $nationality;
    $this->date = $date;
    $this->vote = $vote;
    $this->image = $image;
    $this->genero = $genero;

}

public function  getRating() {
    return ceil($this->vote / 2);
  }

}
?>