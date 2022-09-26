<?php
class Movie
{
  public $title;
  public $director;
  public $year;
  public $genre;
  public $rating;

  function __construct($title, $director, $year, $genre, $rating)
  {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
    $this->genre = $genre;
    $this->rating = $rating;
  }
  public function setActors($actor1, $actor2)
  {
    $this->actors = [
      $actor1,
      $actor2,
    ];
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function printMovie(){
    return $this->title . ' è stato diretto da ' . $this->director . ' ed è uscito nei cinema nel ' . $this->year . '. Il genere é ' . $this->genre . '<br>'; 
  }
  
}
