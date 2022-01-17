<?php

class Movie{
  public $title;
  public $genre;
  public $year;
  public $director;
  public $description;
  public $cast;

  function __construct($_title, $_genre, $_year, $_director)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->director = $_director;
  }

  public function getExceptedDescription($lenght = 50){
    return substr($this->description, 0, $lenght)."...";
  }

}