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

    public $title;
    public  $genre;


    public function __construct($_title,$_genre) {

      $this->title = $_title;
      $this->genre = $_genre;

    }
   
    public function getFilmTitle(){
      
      return $this->title;

    }


    public function getFilmGenre(){
      
      return $this->genre;

    }


    


  }


  
  
  
  
  
  
  
  
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
    
    
    
    <h1> 
      <?php
      $matrix = new Movie('matrix', 'fantascienza');
      echo $matrix->getFilmTitle() ?>
      <br>
     <?php echo  $matrix->getFilmGenre() ?>
  </h1>
</body>
</html>
