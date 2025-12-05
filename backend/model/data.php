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
        $stmt = $this->db->prepare("SELECT * FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     

public function create($data)
    {
        $sql = "INSERT INTO movies 
            (title, description, release_year, duration, poster_url, 
            trailer_url, video_url, imdb_rating, view_count, age_limit, 
            status, type_movie)
        VALUES 
            (:title, :description, :release_year, :duration, :poster_url,
            :trailer_url, :video_url, :imdb_rating, :view_count, :age_limit,
            :status, :type_movie)";

        $stmt = $this->db->prepare($sql);
          return $stmt->execute([
            ":title"        => $data['title'],
            ":description"  => $data['description'],
            ":release_year" => $data['release_year'],
            ":duration"     => $data['duration'],
            ":poster_url"   => $data['poster_url'],
            ":trailer_url"  => $data['trailer_url'],
            ":video_url"    => $data['video_url'],
            ":imdb_rating"  => $data['imdb_rating'],
            ":view_count"   => $data['view_count'],
            ":age_limit"    => $data['age_limit'],
            ":status"       => $data['status'],
            ":type_movie"   => $data['type_movie'],
        ]);
    }
         public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM movies WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteMovie($id)
    {
        $stmt = $this->db->prepare("DELETE FROM movies WHERE id=?");
        return $stmt->execute([$id]);
    }

    }