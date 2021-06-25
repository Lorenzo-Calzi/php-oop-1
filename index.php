<?php 

    class Movie
    {
        public $name; 
        public $language;
        public $genre;
        public $desc;
        public $vote;

        function __construct(string $name, string $language, string $genre, string $desc, float $vote = null)
        {
            $this->name = $name;
            $this->language = $language;
            $this->genre = $genre;
            $this->desc = $desc;
            $this->vote = $vote = null;
        }

        /**
         * setVote function
         */
        public function setVote(float $vote)
        {
            $this->vote = $vote;
        }
    }


    $film_1 = new Movie('Interstellar', 'English', 'Science fiction', 'Astronauti alla scoperta di un buco nero');
    $film_1->setVote(8);
    var_dump($film_1);


    $film_2 = new Movie('Avengers - End Game', 'English', 'Action/Sci-fi', "L'ultimo scontro per la salvezza dell'universo");
    $film_2->setVote(8.3);
    var_dump($film_2);

    
?>