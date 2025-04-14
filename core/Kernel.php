<?php

namespace Core;

class Kernel
{
    public function run()
    {
        $this->loadRoutes();
    }

    protected function loadRoutes()
    {
        $routesFile = __DIR__ . '/../routes/web.php';
        if (file_exists($routesFile)) {
            require_once $routesFile;
        } else {
            echo "⛔ Файл маршрутов не найден.";
        }
    }
}
