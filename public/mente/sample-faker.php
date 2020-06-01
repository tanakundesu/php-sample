<?php

// インストールしたfakerのautoload.phpをrequireする
require_once 'vendor/fzaninotto/faker/src/autoload.php';

// フェイクデータを生成するジェネレータを作成
$faker = Faker\Factory::create('ja_JP');

// 日本人の氏名を10人分出力
for ($i = 0; $i < 10; $i++) {
  echo $faker->name . "\n";
}