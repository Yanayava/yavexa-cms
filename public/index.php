<?php

session_start();
require_once '../core/Kernel.php';
require_once '../core/Router.php';
require_once '../core/DB.php';
require_once '../routes/web.php';
require_once '../core/functions.php';
require_once '../core/Translations.php';


use Core\Kernel;

$app = new Kernel();
$app->run();
