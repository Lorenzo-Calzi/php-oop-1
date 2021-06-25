<?php 

    class Movie
    {
        public $name; 
        public $language;
        public $genre;
        public $desc;

        function __construct(string $name, string $language, string $genre, string $desc)
        {
            $this->name = $name;
            $this->language = $language;
            $this->genre = $genre;
            $this->desc = $desc;
        }
    }
?>