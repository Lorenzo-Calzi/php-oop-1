<?php 

    class Movie
    {
        public $name; 
        public $language;
        public $genre;
        public $desc;
        public $vote;
        public $img;

        function __construct(string $name, string $language, string $genre, string $desc, float $vote = null, string $img = "https://picsum.photos/250/297")
        {
            $this->name = $name;
            $this->language = $language;
            $this->genre = $genre;
            $this->desc = $desc;
            $this->vote = $vote = null;
            $this->img = $img;
        }

        public function setVote(float $vote)
        {
            $this->vote = $vote;
        }
    }

?>
