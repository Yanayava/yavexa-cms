<?php

namespace Core;

class Translations
{
public static function load($lang = 'en'): array
{
$result = DB::fetchAll("SELECT key_name, value FROM translations WHERE lang_code = ?", [$lang]);
$translations = [];
foreach ($result as $row) {
$translations[$row['key_name']] = $row['value'];
}
return $translations;
}
}
