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

function __construct($_title,$_year,$_genre)
{
  $this->title = $_title;
  $this->year = $_year;
  $this->genre = $_genre;
}


}

$movie_1= new Movie('casablanca','1942','noir');
$movie_2= new Movie()

echo $movie_1->title



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>titolo <br> <? echo $movie_1->title  ?></h1>
    <h2>anno <br> <? echo $movie_1->year  ?></h2>
    <h3>genere <br> <? echo $movie_1->genre  ?></h3>
</body>
</html>