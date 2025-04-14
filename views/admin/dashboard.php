<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /admin/login');
    exit;
}
$user = $_SESSION['user'];
?>

<?php require_once __DIR__ . '/layout_header.php'; ?>

<h1>🎉 Добро пожаловать, <?= htmlspecialchars($user['username']) ?>!</h1>
<p>Вы успешно вошли в админ-панель.</p>

<?php require_once __DIR__ . '/layout_footer.php'; ?>
