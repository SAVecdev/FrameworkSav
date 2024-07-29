<?php

require 'vendor/autoload.php';

use FrameworkSav\Router;
use FrameworkSav\Controllers\HomeController;

$router = new Router();

$router->add('/', [HomeController::class, 'index']);

$router->dispatch($_SERVER['REQUEST_URI']);
