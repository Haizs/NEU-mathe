<?php

$dbms = 'mysql';
$host = 'localhost';
$dbName = 'mathe';
$user = 'mathe';
$pass = 'mathe';
$dsn = "$dbms:host=$host;dbname=$dbName";

$conn = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
$conn->query('set names utf8;');