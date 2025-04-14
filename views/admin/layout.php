<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: /admin/login');
    exit;
}

$user = $_SESSION['user'] ?? null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f3f3f3;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
        }
        .logout {
            text-decoration: none;
            color: #e74c3c;
        }
    </style>
</head>
<body>

<header>
    <h2>👑 Панель администратора</h2>
    <div>
        Привет, <b><?= htmlspecialchars($user['username']) ?></b> |
        <a class="logout" href="/admin/logout">Выйти</a>
    </div>
</header>

<main>
