<?php
require_once __DIR__ . "/../stream_go/frontend/view/middleware.php";
?>

<?php

require_once './backend/controller/controllerAdmin.php';
$controller = new controllerAdmin();

$page = $_GET['page'] ?? 'main';
switch ($page) {
    case 'main':
        $controller->main();

        break;
    case 'catalog':
        $controller->catalog();
        break;
}
