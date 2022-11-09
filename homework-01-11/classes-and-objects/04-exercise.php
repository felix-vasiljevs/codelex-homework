<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

        public function __construct(string $title, string $studio,string $rating)
        {
            $this->title = $title;
            $this->studio = $studio;
            $this->rating = $rating;
        }

        public function getTitle(): string
        {
            return $this->title;
        }

        public function getStudio(): string
        {
            return $this->studio;
        }

        public function getRating(): string
        {
            return $this->rating;
        }

        public function sentence (): string
        {
            return "{$this->title} " . " {$this->studio} " . " {$this->rating} ";
        }

        public static function getPG (array $movies): array
        {
            $moviePG = [];

            foreach ($movies as $movie){
                if ($movie->getRating() === 'PG') {
                    $moviePG []= $movie;
                }
            }
            return $moviePG;
        }
}

$movies = [
    new Movie("Casino Royale", "Eon Production", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Intro the Spider-Verse", "Columbia Pictures", "PG"),
];

$moviesPg = Movie::getPG($movies);

var_dump($moviesPg);
