<?php

class Movie
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=stream_go;charset=utf8", "root", "");
    }

    public function getAll()
    {
        $sql = "SELECT id, title, imdb_rating, poster_url, type_movie 
                FROM movies ORDER BY id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM movies WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($title, $year, $poster)
    {
        $sql = "INSERT INTO movies(title, year, poster) VALUES (?,?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$title, $year, $poster]);
    }

    public function updateMovie($id, $title, $year, $poster)
    {
        $sql = "UPDATE movies SET title=?, year=?, poster=? WHERE id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$title, $year, $poster, $id]);
    }

    public function deleteMovie($id)
    {
        $stmt = $this->db->prepare("DELETE FROM movies WHERE id=?");
        return $stmt->execute([$id]);
    }
    public function all_users() {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function get_id_user($id)  {
       $stmt = $this->db->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id) {

    $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
    
    return $stmt->execute([$id]);
}
   
}
