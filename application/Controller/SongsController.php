<?php
namespace Mini\Controller;

use Mini\Model\Song;

class SongsController
{
    public function index()
    {
        // Instance new Model (Song)
        $Image = new Song();
        // getting all songs and amount of songs
        $images = $Image->getAllSongs();
        $amount_of_songs = $Image->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/songs/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addImage()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_image"])) {
            // Instance new Model (Song)
            $Image = new Song();
            // do addSong() in model/model.php
            $Image->addImage($_POST["name"], $_POST["path"],  $_POST["text"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'songs/index');
    }
}
