<?php
use App\Controllers\BookController;
use App\Controllers\AuthController;

$router->get('/', [BookController::class, 'index']);
$router->get('/books', [BookController::class, 'index']);
$router->get('/search', [BookController::class, 'search']);

$router->get('/login', [AuthController::class, 'loginForm']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);
