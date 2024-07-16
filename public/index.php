<?php
$route = $_SERVER['REQUEST_URI'];
if (isset($route)) {
    switch ($route) {
        case '/':
            require_once "../views/Home.php";
            break;

        case '/login':
            require_once "../views/auth/Login.php";
            break;

        case '/register':
            require_once "../views/auth/Register.php";
            break;

        case '/todo-list':
            require_once "../views/Todolist.php";
            break;

        default:
              require_once "../views/404.php";
    }
} else {
    require_once "../views/404.php";
}
