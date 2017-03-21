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

if (!isset($_POST['email']) || !preg_match("/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/i", $_POST['email'])
    || !isset($_POST['nickname']) || !preg_match("/^[a-zA-Z0-9]{5,15}$/i", $_POST['nickname'])
    || !isset($_POST['password']) || !preg_match("/^[!-~]{6,}$/i", $_POST['password'])
) {
    http_response_code(400);
    die();
}
require_once('config.php');
$salt = createSalt($_POST['password']);
$arr = array($_POST['email'], $_POST['nickname'], crypt($_POST['password'], $salt), $salt);
try {
    $sql = 'INSERT INTO user VALUES (?,?,?,?)';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->execute($arr);
} catch (PDOException $e) {
    http_response_code(500);
    die();
}