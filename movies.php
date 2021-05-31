<?php 

//CLASSE

class Movie {
    
    //ATTRIBUTI
    public $title;
    public $genre;
    public $year;
    public $director;
    public $about;

    // COSTRUTTORE
    function __construct($title, $genre, $year, $director, $about) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
        $this->about = $about;
    }

    // METODO GET EXCERPT
    public function getExcerpt() {
        $sub = substr($this->about, 0, 100);
        return $sub;
    }

}

// ISTANZA 1

//  $movie1 = new Movie('Star Wars', 'Fantascienza', '1977', 'George Lucas', 'Long time ago in a galaxy far far away..');

//  var_dump($movie1);

// $movie2 = new Movie('Lord of the Rings');


// $movie3 = new Movie('Jaws');
