<!-- 
  
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


-->


<?php  

  class Movie {
    // dichiaro le mie variabili d'istanza
    public $title;
    public  $genre;

    // passo i parametri nel construct che poi passero' nei parametri di Movie
    public function __construct($_title,$_genre) {

      $this->title = $_title;
      $this->genre = $_genre;

    }
    // funzione che mi ritorna il titolo  
    public function getFilmTitle(){
      
      return $this->title;

    }

    // funzione che mi ritorna il genere
    public function getFilmGenre(){
      
      return $this->genre;

    }

  }
  // istanzio due oggetti Movie
  $matrix = new Movie('matrix', 'fantascienza');
  $fantozzi = new Movie('fantozzi', 'comico');
  
  ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
  </head>
  <body>
    
    <h1> 
      <?php
        echo $matrix->getFilmTitle();
        echo '<br>';
        echo  $matrix->getFilmGenre();
        echo '<br>';
        echo $fantozzi->getFilmTitle();
        echo '<br>';
        echo  $fantozzi->getFilmGenre();
      ?>
  </h1>
</body>
</html>
