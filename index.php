<?php

session_start();
require 'vendor/autoload.php';

use FrameworkSav\Router;
use FrameworkSav\Controllers\HomeController;
use FrameworkSav\Controllers\FormController;
use FrameworkSav\Controllers\AuthController;

$router = new Router();

$router->add('/', [HomeController::class, 'index']);
$router->add('/form', [FormController::class, 'show']);
$router->add('/submit', [FormController::class, 'submit']);
$router->add('/login', [AuthController::class, 'showLoginForm']);
$router->add('/login', [AuthController::class, 'login'], 'post');
$router->add('/logout', [AuthController::class, 'logout']);

$router->dispatch($_SERVER['REQUEST_URI']);
