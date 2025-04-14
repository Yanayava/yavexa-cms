<?php

use Core\Translations;

$lang = $_GET['lang'] ?? 'en'; // пока просто через GET
$translations = Translations::load($lang);

?>

<h2>Переводы</h2>
<p>Тут будет список ключей переводов.</p>
