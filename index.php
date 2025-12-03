<?php 

require_once './frontend/controller/controller.php';
$controller = new controller();

$page = $_GET ['page'] ?? 'home';
switch($page){
    case 'home':
        $controller->index();
    break;
    case 'streamVideo':
        $controller->streamVideo();
    break;
}
