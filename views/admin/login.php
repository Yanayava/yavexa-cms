<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в админку</title>
</head>
<body>
<h2>Авторизация</h2>
<form method="post" action="/admin/login">
    <label>Логин:</label><br>
    <input type="text" name="username" required><br>
    <label>Пароль:</label><br>
    <input type="password" name="password" required><br><br>
    <button type="submit">Войти</button>
</form>
</body>
</html>
