<?php
function createSalt($pass)
{
    $salt = '';
    $len = strlen($pass);
    for ($i = 0; $i < $len; $i++) {
        $r = mt_rand(0, $len - 1);
        $x = ord($pass[$r]) + mt_rand(11, 27);
        $x -= ($x > 126) ? 100 : 0;
        $salt .= chr($x);
    }
    return $salt;
}

if (!isset($_GET['email']) || !preg_match("/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/i", $_GET['email'])
    || !isset($_GET['nickname']) || !preg_match("/^[a-zA-Z0-9]{5,15}$/i", $_GET['nickname'])
    || !isset($_GET['password']) || !preg_match("/^[!-~]{6,}$/i", $_GET['password'])
) {
    http_response_code(400);
    die();
}
require_once('config.php');
$salt = createSalt($_GET['password']);
$arr = array($_GET['email'], $_GET['nickname'], crypt($_GET['password'], $salt), $salt);
try {
    $sql = 'INSERT INTO user VALUES (?,?,?,?)';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->execute($arr);
} catch (PDOException $e) {
    http_response_code(500);
    die();
}