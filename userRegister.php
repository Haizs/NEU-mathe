<?php
require_once('config.php');
$input = json_decode(file_get_contents('php://input'), true);
if (!isset($input['email']) || !preg_match($re_email, $input['email'])
    || !isset($input['nickname']) || !preg_match($re_nickname, $input['nickname'])
    || !isset($input['password']) || !preg_match($re_password, $input['password'])
) {
    http_response_code(400);
    die();
}
$arr = array(strtolower($input['email']), $input['nickname'], password_hash($input['password'], PASSWORD_DEFAULT));
try {
    $sql = 'INSERT INTO user VALUES (?,?,?)';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->execute($arr);
} catch (PDOException $e) {
    http_response_code(500);
    die();
}