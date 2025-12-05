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
    case 'subform':
        $controller->subform();
    break;
    case 'saveMovie':
        $controller->saveMovie();
    break;
    case 'deleteMovie':
        $controller->deleteMovie();
        break;
    
}
