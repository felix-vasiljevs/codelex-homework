<?php

class Application
{
    private Video $video;
    private VideoStore $videoStore;

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies (): VideoStore
    {
        $this->
    }

    private function rent_video ()
    {
        //todo
    }

    private function return_video ()
    {

        //todo
    }

    private function list_inventory ()
    {

        //todo
    }
}

$videos = [
    new Video("The Matrix", true, 89),
    new Video("Godfather II", false, 48),
    new Video("Star Wars Episode IV: A New Hope", true, 20)
];

$video = new VideoStore($videos);

