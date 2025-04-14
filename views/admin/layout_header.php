<?php
session_start();
$user = $_SESSION['user'] ?? ['username' => 'Гость'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Yavexa Admin</title>
    <link rel="stylesheet" href="/assets/admin.css">
    <link rel="stylesheet" href="/assets/vexaui.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/admin">Главная</a></li>
            <li><a href="/admin/languages">Языки</a></li>
            <li><a href="/admin/feedback">Обратная связь</a></li>
            <li><a href="/admin/pages">Страницы</a></li>
            <li><a href="/admin/logout">Выйти</a></li>
        </ul>
    </nav>
</header>
<main>
