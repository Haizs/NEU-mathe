<?php
require_once('config.php');
$input = json_decode(file_get_contents('php://input'), true);
if (!isset($input['email']) || !preg_match($re_email, $input['email'])) {
    http_response_code(400);
    die();
}
$arr = array(strtolower($input['email']));
try {
    $sql = 'SELECT COUNT(*) FROM user WHERE email=?';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->execute($arr);
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
$row = $sth->fetchColumn();
if ($row) {
    echo(json_encode(array('isRegister' => true)));
} else {
    echo(json_encode(array('isRegister' => false)));
}