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

$input = json_decode(file_get_contents('php://input'), true);
if (!isset($input['email']) || !preg_match("/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/i", $input['email'])
    || !isset($input['nickname']) || !preg_match("/^[a-zA-Z0-9]{5,15}$/i", $input['nickname'])
    || !isset($input['password']) || !preg_match("/^[!-~]{6,}$/i", $input['password'])
) {
    http_response_code(400);
    die();
}
require_once('config.php');
$salt = createSalt($input['password']);
$arr = array($input['email'], $input['nickname'], crypt($input['password'], $salt), $salt);
try {
    $sql = 'INSERT INTO user VALUES (?,?,?,?)';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->execute($arr);
} catch (PDOException $e) {
    http_response_code(500);
    die();
}