<?php

// index.php
require 'vendor/autoload.php';


use App\Configuration\Helpers;
use App\Controllers\PostController;
use App\Controllers\WelcomeController;

// Define the base path of the views
define('VIEW', __DIR__ . '/Views/');
define('BASEDIR', __DIR__ . '/');
define('MAIN_CSS', '/Assets/css/main.css');

include 'App/Configuration/functions.php';




// Define the routes
$routes = [
    '/' => [WelcomeController::class, 'index'],
    '/posts' => [PostController::class, 'index'],
    // Add more routes as needed
];

include_once 'App/Configuration/Router.php';