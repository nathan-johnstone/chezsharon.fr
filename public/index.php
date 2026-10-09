<?php
//SESSION
session_start();

//TOOLS
include('../tools/env.php');
include('../tools/tools.php');

//PATHS
$_ENV['home'] = "/";
$_ENV['logout'] = "/logout";

//AUTOLOADER
spl_autoload_register(function (string $class) {
    if (str_starts_with($class, 'Controller')) {
        $class = explode('\\', $class);
        include(dirname(__DIR__) . "/controller/" . $class[1] . ".php");
    } elseif (str_starts_with($class, 'Model')) {
        $class = explode('\\', $class);
        include(dirname(__DIR__) . "/model/" . $class[1] . ".php");
    } elseif (str_starts_with($class, 'View')) {
        $class = explode('\\', $class);
        include(dirname(__DIR__) . "/view/" . $class[1] . ".php");
    }
});

//ROUTEUR
$url = parse_url($_SERVER['REQUEST_URI']);
$path = isset($url['path']) ? $url['path'] : '/';
switch ($path) {
    case $_ENV['home']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewHome("Accueil"));
        $controller->render();
        break;
    case $_ENV['logout']:
        session_destroy();
        header('location:' . $_ENV['home']);
        exit;
    default:
        $controller = new Controller\Controller(new Model\Model, new View\View404("Erreur 404"));
        $controller->render();
        break;
};
