<?php

use App\Controllers\HomeController;
use App\Controllers\PostController;

define('ROOT_PATH', realpath(__DIR__));

// Inclure vos contrôleurs
include 'app/controllers/HomeController.php';
include 'app/controllers/PostController.php';

// Définir les routes
$routes = [
    //HOMEPAGE
    '/' => [HomeController::class, 'index'],
    // POSTS
    '/posts' => [PostController::class, 'index'],
    '/posts/(\d+)' => [PostController::class, 'show'],
    '/posts/create' => [PostController::class, 'create'],
    '/posts/store' => [PostController::class, 'store'],
    '/posts/(\d+)/edit' => [PostController::class, 'edit'],
    '/posts/(\d+)/update' => [PostController::class, 'update'],
    // '/posts/(\d+)/delete' => [PostController::class, 'delete'],
    // '/posts/(\d+)/destroy' => [PostController::class, 'destroy'],
];

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Vérifier si l'URL correspond à une des routes
foreach ($routes as $routePattern => $routeCallback) {
    if (preg_match('#^' . $routePattern . '$#', $path, $matches)) {
        array_shift($matches); // Retirer le match complet
        $controller = $routeCallback[0];
        $method = $routeCallback[1];
        $object = new $controller;
        $object->$method(...$matches);
        exit;
    }
}

echo '404 Not Found';