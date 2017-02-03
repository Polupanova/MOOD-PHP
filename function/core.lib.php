<?php

function run_controller(string $uri) {
    $routes = include '../config/router.config.php';
    if (isset($routes[$uri])) {
        include '../controllers/' . $routes[$uri] . '.ctrl.php';
        call_user_func($routes[$uri] . '_controller');
    } else {
        echo 'Error:404';
    }
}