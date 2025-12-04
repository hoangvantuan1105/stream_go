<?php
require_once __DIR__ . '/../model/data.php';
class controllerAdmin
{
  private $adminCon;
  public function __construct() {}
  public function main()
  {
    include __DIR__ . '/../view/header.php';
    include __DIR__ . '/../view/main.php';
  }

  public function catalog()
  {
    $movieModel = new Movie();
    $movies = $movieModel->getAll();
    include __DIR__ . '/../view/header.php';
    include __DIR__ . '/../view/catalog.php';
  }
  public function checkAdminAuth()
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    if (!isset($_SESSION['admin'])) {
      header("Location: index.php?page=adminLogin");
      exit;
    }
    $this->adminCon = $_SESSION['admin']['role'] ?? 'admin';
    $this->adminCon = $_SESSION['admin']['name'] ?? 'Unknown';
  }
  public function danh_sach_users(){
    $movieModel = new Movie();
    $danh_sach_user = $movieModel->all_users();
    
    include __DIR__ . '/../view/header.php';
    include __DIR__ . '/../view/quanlyuse.php';
}

}
