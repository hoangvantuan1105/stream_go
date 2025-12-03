<?php 

require_once './backend/controller/controllerAdmin.php';
$controller = new controllerAdmin();

$page = $_GET ['page'] ?? 'main';
switch($page){
    case 'main':
        $controller->main();
        
    break;
    case 'catalog':
        $controller->catalog();
    break;
}
