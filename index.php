<?php
session_start();
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/View.php';
require_once __DIR__ . '/core/Auth.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$routes = yaml_parse_file(__DIR__ . '/config/routes.yaml');

foreach ($routes as $route => $handler) {
    if ($route === "$method $uri") {
        list($controllerName, $methodName) = explode('@', $handler);
        require_once __DIR__ . "/controllers/$controllerName.php";
        $controller = new $controllerName();
        echo $controller->$methodName();
        exit;
    }
}
echo 'Página não encontrada';
