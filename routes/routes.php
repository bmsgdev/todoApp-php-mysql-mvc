<?php
require_once "../controllers/TaskController.php";
require_once "../controllers/UserController.php";
require_once "../controllers/RegisterController.php";
require_once "../controllers/LoginController.php";
require_once "../controllers/HomeController.php";
$route = $_SERVER['REQUEST_URI'];

$route=explode('-', $route);
// var_dump($route);
$controller= $route[0] ?? '/'; //la route 
$controller = substr($controller, 1) ;
echo $controller.'<br>';
$action= $route[1] ?? 'home' ; //la méthode ou l'action 
echo $action.'action';

if (isset($controller)) {
    switch ($controller) {
        case '':
            $contnrollerInstance = new HomeController();
            break;
        case 'login':
            //appel du controller de login
            $contnrollerInstance = new LoginController();
            break;
        case 'register':
            //appel du controller de register
            $contnrollerInstance = new RegisterController();
            break;
        case 'todos':
            //appel le controller des tâches
            $contnrollerInstance = new TaskController();
            break;

        default:
            require_once "../views/404.php";
    }
 } 
if(isset($action)){
    switch ($action) {
        case "home":
            $contnrollerInstance ->homePage();
            break;
        default:
        require_once "../views/404.php";
    }
}