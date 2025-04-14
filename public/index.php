<?php

require_once __DIR__ . '/../core/Kernel.php';
require_once __DIR__ . '/../core/Router.php';

use Core\Kernel;

$app = new Kernel();
$app->run();
