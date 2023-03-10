<?php

require_once __DIR__ . '/bootstrap.php';

use App\Http\Application;
use App\Http\Controllers\HomeController;

$app = new Application();

$app->router->get('/', [HomeController::class, 'main']);

$app->run();
