<?php
//SESSION
session_start();

//TOOLS
include('../tools/env.php');
include('../tools/tools.php');

//PATHS
/* Home */
$_ENV['home'] = "/";
$_ENV['mentionsLegales'] = "/mentions-legales";
$_ENV['confidentialite'] = "/confidentialite";
$_ENV['utilisation'] = "/conditions-utilisation";
$_ENV['accessibilite'] = "/accessibilite";

/* User */
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
/* Home */
    case $_ENV['home']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewHome("Accueil"));
        $controller->render();
        break;
    case $_ENV['mentionsLegales']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewMentionsLegales("Mentions légales"));
        $controller->render();
        break;
    case $_ENV['confidentialite']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewConfidentialite("Politique des confidentialité"));
        $controller->render();
        break;
    case $_ENV['utilisation']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewUtilisation("Conditions d'utilisation"));
        $controller->render();
        break;
    case $_ENV['accessibilite']:
        $controller = new Controller\Controller(new Model\Model, new View\ViewAccessibilite("Déclaration d'accessibilité"));
        $controller->render();
        break;
/* User */
    case $_ENV['logout']:
        session_destroy();
        header('location:' . $_ENV['home']);
        exit;
/* 404 */
    default:
        $controller = new Controller\Controller(new Model\Model, new View\View404("Erreur 404"));
        $controller->render();
        break;
};
