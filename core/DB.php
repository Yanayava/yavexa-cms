<?php
namespace Core;

class DB
{
    private static $pdo;

    public static function connect(): \PDO
    {
        if (!self::$pdo) {
            $config = require __DIR__ . '/../env.php';

            $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charset={$config['charset']}";
            self::$pdo = new \PDO($dsn, $config['user'], $config['pass'], [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$pdo;
    }

    public static function query(string $sql, array $params = [])
    {
        $stmt = self::connect()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public static function fetch(string $sql, array $params = [])
    {
        return self::query($sql, $params)->fetch(\PDO::FETCH_ASSOC);
    }

    public static function fetchAll(string $sql, array $params = [])
    {
        return self::query($sql, $params)->fetchAll(\PDO::FETCH_ASSOC);
    }
}
