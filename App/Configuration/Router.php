<?php
// Get the current URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the route is defined, call the controller and method
if (isset($routes[$url])) {
    $controller = new $routes[$url][0];
    $method = $routes[$url][1];
    $controller->$method();
} else {
    echo '404 Not Found';
}