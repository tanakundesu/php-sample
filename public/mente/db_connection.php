<?php

const DB_HOST = 'mysql:dbname=laradock;host=mysql';
const DB_USER = 'laradock';
const DB_PASS = 'secret';

try {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false, // SQL injection
    ]);
    echo '接続成功';    
} catch(PDOException $e) {
    echo '接続失敗' . $e->getMessage() . "\n";
    exit();
}