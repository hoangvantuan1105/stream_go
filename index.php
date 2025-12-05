<?php session_start() ?>
<?php

require_once './frontend/controller/controller.php';
$controller = new controller();

$page = $_GET['page'] ?? 'home';
$id = $_GET['id'] ?? null;
switch ($page) {

    case 'home':
        $controller->index();
        break;

    case 'detail':
        $controller->detail($id);
        break;

    case 'formLogin':
        $controller->formLogin();
        break;

    case 'login':
        $controller->login();
        break;

    case 'register':
        $controller->register();
        break;

    case 'formRegister':
        $controller->formRegister();
        break;

    case 'logout':
        $controller->logout();
        break;

    case 'profile':
        $controller->profile();
        break;

    case 'forgotPass':
        $controller->forgotPass();
        break;
    case 'forgotPassAction':
        $controller->forgotPassAction();
        break;
    case 'changePassword':
        $controller->changePassword();
        break;
    case 'playVideo':
        $controller->playVideo($id);
        break;
    default:
        $controller->page404();
        break;
}
