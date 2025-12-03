<?php 

class streamGo {
    private $conn;

    public function connectDB(){
        $host = "localhost";
        $db_name = "stream_go";
        $username = "root";
        $password = "";
        
        try {

            $this->conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        } catch (PDOException $e) {

            die("Kết nối thất bại: " . $e->getMessage());
        }
    }

    public function getAll(){
        $stmt = $this->conn->prepare("SELECT * FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}