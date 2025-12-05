<?php  
require_once __DIR__ . '/../model/data.php';
class controllerAdmin {
    private $adminCon;
    public function __construct()
    {
        
    }
    public function main(){
      include __DIR__ .'/../view/header.php';
      include __DIR__ .'/../view/main.php';
    }
   
    public function catalog(){
       $movieModel = new Movie();
        $movies = $movieModel->getAll();
        
        
        
      include __DIR__ .'/../view/header.php';
      include __DIR__ .'/../view/catalog.php';
    }
    public function subform(){
      include __DIR__ .'/../view/header.php';
      include __DIR__ .'/../view/subform.php';
    }
    public function saveMovie(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'title'        => $_POST['title'],
                'description'  => $_POST['description'],
                'release_year' => $_POST['release_year'],
                'duration'     => $_POST['duration'],
                'poster_url'   => '', // Xử lý upload file sau
                'trailer_url'  => $_POST['trailer_url'] ?? '',
                'video_url'    => $_POST['video_url'] ?? '',
                'imdb_rating'  => $_POST['imdb_rating'] ?? 0,
                'view_count'   => $_POST['view_count'] ?? 0,
                'age_limit'    => $_POST['age_limit'] ?? 0,
                'status'       => $_POST['status'] ?? 'active',
                'type_movie'   => $_POST['type_movie'] ?? 'movie',
            ];
    
            $movieModel = new Movie();
            $movieModel->create($data);
    
            header('Location: admin.php?page=catalog');
            exit();
        }
    }
  
 public function deleteMovie()
{
    if (!isset($_GET['id'])) {
        echo "<h3 style='color:red'>Không tìm thấy ID phim!</h3>";
        return;
    }

    $id = (int)$_GET['id'];
    $movieModel = new Movie();
    $ok = $movieModel->deleteMovie($id);

    if ($ok) {
        // Redirect về catalog sau khi xóa
        header("Location: admin.php?page=catalog&deleted=1");
        exit;
    } else {
        echo "<h3 style='color:red'>Xóa phim thất bại!</h3>";
    }
}

}
