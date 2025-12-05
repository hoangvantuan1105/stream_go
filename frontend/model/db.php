<?php

class streamGo
{
    private $conn;

    public function connectDB()
    {
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

    public function getAll()
    {
        $stmt = $this->conn->prepare("SELECT * FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function checkEmailExists($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }
    public function registerModel($name, $email, $password)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $result = $stmt->execute([$name, $email, $password]);
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi đăng ký: " . $e->getMessage();
            return false;
        }
    }


    // login
    public function loginModel($email, $pass)
    {
        $pdo = $this->conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
        $pdo->execute([$email, $pass]);
        return $pdo->fetch(PDO::FETCH_ASSOC);
    }

         public function searchMovies($keyword)
{
    $sql = "SELECT * FROM movies WHERE title LIKE ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(["%{$keyword}%"]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
