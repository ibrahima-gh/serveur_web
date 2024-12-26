<?php

require_once __DIR__ . '/../controllers/MainController.php';

$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$router->setBasePath($basePath);

// Routes
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/catalogue', 'MainController#catalogue', 'catalogue');
$router->map('GET', '/panier', 'MainController#panier', 'panier');
$router->map('GET', '/connexion', 'MainController#connexion', 'connexion');
$router->map('GET', '/inscription', 'MainController#inscription', 'inscription');  // Correction ici
$router->map('GET', '/produit', 'MainController#produit', 'produit');

// Retourne l'objet router
return $router;
