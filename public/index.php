<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/models/ProductModel.php';
require_once __DIR__ . '/../src/controllers/MainController.php';
require_once __DIR__ . '/../src/controllers/CatalogueController.php';


$router = require_once __DIR__ . '/../src/router/routes.php';
$match = $router->match();

if ($match) {
    [$controllerName, $method] = explode('#', $match['target']);
    
    
    if ($controllerName === 'CatalogueController') {
        $controller = new $controllerName($pdo);
    } else {
        $controller = new $controllerName();
    }
    
    if (method_exists($controller, $method)) {
        $controller->$method();
    } else {
        (new MainController())->notFound();
    }
} else {
    (new MainController())->notFound();
}