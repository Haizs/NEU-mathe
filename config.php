<?php

$dbms = 'mysql';
$host = 'localhost';
$dbName = 'mathe';
$user = 'mathe';
$pass = 'mathe';

$dsn = "$dbms:host=$host;dbname=$dbName;charset=utf8";

$re_email = "/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/i";
$re_nickname = "/^[a-zA-Z0-9]{5,15}$/i";
$re_password = "/^[!-~]{6,}$/i";

$cookie_secure = true;