<?php
//SESSION
session_start();

//TOOLS
include('../tools/env.php');
include('../tools/tools.php');

//PATHS
$_ENV['accueil'] = "/";
$_ENV['deconnexion'] = "/deconnexion";

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
    case $_ENV['accueil']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewAccueil("Acceuil"));
        $controller->render();
        break;
    case $_ENV['deconnexion']:
        session_destroy();
        header('location:'.$_ENV['accueil']);
        exit;
    default:
        $controller = new Controller\Controller(new Model\Model, new View\View404("404"));
        $controller->render();
        break;
};
