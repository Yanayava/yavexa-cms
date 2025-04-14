<?php

use Core\Router;

$router = new Router();

$router->get('/', function () {
    echo "<h1>🔥 Yavexa Framework запущен!</h1>";
});

$router->dispatch();
