<?php
require_once __DIR__ . '/../model/db.php';
class controller
{
    private $movieModel;

    public function __construct()
    {

        $this->movieModel = new streamGo();

        $this->movieModel->connectDB();
    }

    public function index()
    {

        $allInfoMovie = $this->movieModel->getAll();
        include __DIR__ . "/../view/header.php";

        include __DIR__ . '/../view/home.php';

        include __DIR__ . '/../view/footer.php';
    }

    public function streamVideo()
    {
        include __DIR__ . "/../view/header.php";
        include __DIR__ . "/../view/streamVideo.php";
        include __DIR__ . '/../view/footer.php';
    }
}
