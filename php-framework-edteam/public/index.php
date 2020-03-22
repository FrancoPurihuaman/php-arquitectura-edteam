<?php

require_once __DIR__.'/../config/app.php';

use App\Libraries\Route;

$url = $_GET['url'] ?? '';
$route = ROUTES[$url] ?? false;

if($route){
    $controller = $route['controller'];
    $action = $route['action'];

    Route::any($controller, $action);
}else{
    header('HTTP/1.0 404 Not Found');
    die("Página no enconrada");
}