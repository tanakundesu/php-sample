<?php

require 'db_connection.php';

$sql = 'select * from contacts where id = 1';
$stmt = $pdo->query($sql);

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 2, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

$pdo->beginTransaction();

try{
    $sql = "insert into contacts (your_name, gender, age, email, url) values (:your_name, :gender, :age, :email, :url)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('your_name', 'ううう', PDO::PARAM_STR);
    $stmt->bindValue('gender', 1, PDO::PARAM_INT);
    $stmt->bindValue('age', 20, PDO::PARAM_INT);
    $stmt->bindValue('url', 'https://www.test.com/', PDO::PARAM_STR);
    $stmt->bindValue('email', 'test2@test.com', PDO::PARAM_STR);
             
    $stmt->execute();
    
    $pdo->commit();
    echo 'Commit';
} catch (PDOException $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
    $pdo->rollback();
    echo 'Rollback';
}