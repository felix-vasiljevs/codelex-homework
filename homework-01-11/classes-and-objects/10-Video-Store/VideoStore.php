<?php

class VideoStore
{
    private array $videos = [];
    private array $inventory = [];
    private array $ratings = [];
//    private Video $video;

    public function __construct(array $videos, array $inventory)
    {
        $this->videos = $videos;
        $this->inventory = $inventory;
    }

    public function addVideosByTitle (Video $video): void      //bytitle
    {
        $this->videos []= $video;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function addInventory (Video $video): Video
    {
        $addToInventory = [];

        foreach ($this->getTitle())
        $this->inventory []= $video;
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }

    public function getRatings(): array
    {
        return $this->ratings;
    }
}