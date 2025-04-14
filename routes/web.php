<?php

use Core\Router;
use Core\DB;

session_start();

$router = new Router();

$router->get('/admin/login', function () {
    require_once __DIR__ . '/../views/admin/login.php';
});

$router->post('/admin/login', function () {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        echo "<h3>❌ Все поля обязательны</h3>";
        return;
    }

    $user = DB::fetch("SELECT * FROM users WHERE username = ?", [$username]);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header('Location: /admin');
        exit;
    } else {
        echo "<h3>❌ Неверный логин или пароль</h3>";
    }
});

$router->get('/admin', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /admin/login');
        exit;
    }

    $user = $_SESSION['user'];
    require_once __DIR__ . '/../views/admin/dashboard.php';
});

$router->get('/admin/logout', function () {
    session_destroy();
    header('Location: /admin/login');
    exit;
});

$router->get('/admin/languages', function () {
    require_once __DIR__ . '/../views/admin/languages.php';
});

$router->get('/admin/feedback', function () {
    require_once __DIR__ . '/../views/admin/feedback.php';
});

$router->get('/admin/pages', function () {
    require_once __DIR__ . '/../views/admin/pages.php';
});

$router->post('/admin/languages/edit', function () {
    $key = $_POST['key'] ?? '';
    $lang = $_POST['lang'] ?? '';
    $value = $_POST['value'] ?? '';

    if ($key && $lang && $value) {
        DB::query("INSERT INTO translations (lang, `key`, value) VALUES (?, ?, ?)
                   ON DUPLICATE KEY UPDATE value = VALUES(value)", [$lang, $key, $value]);
        echo "✅ Перевод сохранён!";
    } else {
        echo "❌ Все поля обязательны!";
    }
});



$router->dispatch();
