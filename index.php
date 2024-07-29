<?php

require 'vendor/autoload.php';

use FrameworkSav\Router;

$router = new Router();

$router->add('/', function () {
    echo "Welcome to FrameworkSav!";
});

$router->dispatch($_SERVER['REQUEST_URI']);
