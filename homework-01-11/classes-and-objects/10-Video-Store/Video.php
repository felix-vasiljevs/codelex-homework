<?php

class Video
{
    private string $title;  //movie title
    private bool $flag;     //checked out or not
    private int $rating;    //movie rating

    public function __construct(string $title, bool $flag, int $rating)
    {
        $this->title = $title;
        $this->flag = $flag;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

//    public function setFlag()
//    {
//        //checked out or not
//        $this->flag = $flag;
//    }

//    public function getFlag (): bool
//    {
//        return $this->flag;
//    }

    public function getFlag (VideoStore $videos, bool $flag): VideoStore
    {
        $checkOutMovies = new VideoStore;

        foreach ($videos->getVideos() as $video) {
            if ($video->getTitle() == $flag) {
                $checkOutMovies->addVideos($video);
            }
        }
        return $checkOutMovies;
    }

//    public function setRating(int $rating): void
//    {
//        $checkRating = 0;
//        $this->rating = $rating;
//    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function getByRating(VideoStore $ratings): int
    {
        $videoRating = 0;

        foreach ($this->videos as $rating) {
            if ($this->rating == $rating) {
                $videoRating += $rating;
            }
        }

        return $videoRating;
    }
}