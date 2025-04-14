<?php
function t(string $key, array $translations): string {
    return $translations[$key] ?? $key;
}
