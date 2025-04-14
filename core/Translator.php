<?php
namespace Core;

class Translator
{
    public static function autoTranslate(string $text, string $targetLang): string
    {
        // Здесь должен быть запрос к внешнему API для перевода текста
        // Например, использование OpenAI API или Google Translate API
        // Возвращаем заглушку для примера
        return "[{$targetLang}] " . $text;
    }
}
