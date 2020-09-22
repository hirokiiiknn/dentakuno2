


<?php


ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("Europe/Prague");

try{
    $db=new PDO('mysql:dbname=heroku_14a10962e3573dd;host=us-cdbr-east-02.cleardb.com;charset=utf8','b61016b7fbd6c3','73dd0225');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(PDOException $e){
    print('DB接続エラー:'.$e->getMessage());
}