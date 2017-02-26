<?php
namespace Mini\Model;

use Mini\Core\Model;

class Song extends Model
{
    public function getAllSongs()
    {
        $sql = "SELECT imageID, imageName, imagePath, imageText FROM images";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function addImage($name, $path, $text)
    {
        $sql = "INSERT INTO images (imageName, imagePath, imageText) VALUES (:name, :path, :text)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':path' => $path, ':text' => $text);
        $query->execute($parameters);
    }

    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(imageID) AS amount_of_songs FROM images";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch()->amount_of_songs;
    }
}
