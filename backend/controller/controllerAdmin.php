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
}