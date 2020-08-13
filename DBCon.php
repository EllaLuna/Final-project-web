<?php

$server = '127.0.0.1';
$user ='root';
$password ='';
$dbName = 'test';

$db =mysqli_connect($server, $user, $password, $dbName);
if(!$db){
    die('Could not connect to mySql');
}
