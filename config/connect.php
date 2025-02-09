<?php
/*$connect = mysqli_connect('localhost', 'cr11847_mal', '5H6t2eUH', 'malcorpse');

if (!$connect) {
  die('Нет подключения к базе данных');
}
require_once 'setting.php';
$connection = new PDO("mysql:host=localhost;dbname=malcorpse", "cr11847_mal", "5H6t2eUH");*/
$driver = 'mysql';
$host = 'localhost';
$db_name = 'cr11847_corpse';
$db_user = 'cr11847_corpse';
$db_pass = 'Rotetogokazino';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
/*PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC*/];

try{
  $pdo = new PDO(
    "$driver:host=$host;dbname=$db_name;charset=$charset", 
    $db_user, $db_pass, $options
  );
} catch (PDOException $i){
  die("Ошибка подключения к базе данных");
}
?>