<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;
    private array $movies = [];

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

        public function getPG (array $movies): array
        {
            $this->movies = $movies;
            $moviePG = [];

            foreach ($this->movies as $this->rating){
                if ($this->rating === 'PG') {
                    $moviePG []= $this->rating;
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

foreach ($movies as $movie)
{
    echo $movie->sentence() . PHP_EOL;
}

echo $movie->getPG();
