<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
 
<?php
class Movie {
public $title;
public $year;
public $genre;
public $rating = 0;

public function __construct($_title,$_year,$_genre,$_rating)
{
  $this->title = $_title;
  $this->year = $_year;
  $this->genre = $_genre;
  $this->rating = $_rating;
}

 public function setRating ($rating) {
    if ($rating > 5)
    echo 'il film è bello';
  return;
}


}


$movie_1= new Movie('casablanca',1942,'noir',10);

$movie_2= new Movie('the avengers',2012,'action',3);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <h1>titolo <br> <? echo $movie_1->title  ?></h1>
    <h2>anno <br> <? echo $movie_1->year  ?></h2>
    <h3>genere <br> <? echo $movie_1->genre  ?></h3>
    <h4>voto <? echo $movie_1->rating?></h4>
    <h4><? echo $movie_1->setRating()  ?></h4>
    <hr>
    <h1>titolo <br> <? echo $movie_2->title  ?></h1>
    <h2>anno <br> <? echo $movie_2->year  ?></h2>
    <h3>genere <br> <? echo $movie_2->genre  ?></h3>
    <h4>voto <? echo $movie_2->rating?></h4>

    
</body>
</html>