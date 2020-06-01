<?php

require 'db_connection.php';

$params = [
    'id' => null,
    'your_name' => 'なまえ',
    'email' => 'test@test.com',
    'url' => 'http://test.com',
    'gender' => '1',
    'contact' => 'ええでー',
    'created_at' => null
];

$cont = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key){
    if($count++>0){
        $columns .= ',';
        $values .= ',';
    }
    $columns .= $key;
    $values .= ':'.$key;
}

$sql = "insert into contacts (". $columns .") values (". $values .")";

var_dump($sql);
 