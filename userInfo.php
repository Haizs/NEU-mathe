<?php
if (!isset($_COOKIE['username']) || !isset($_COOKIE['user_token'])) {
    die();
}
require_once('config.php');
try {
    $sql = 'SELECT nickname,password,salt FROM user WHERE email=?';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute(array($_COOKIE['username']));
    $row = $sth->fetch();
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
if ($_COOKIE['user_token'] == md5(crypt($row['password'], $row['salt']))) {
    echo(json_encode(array('isLogin' => true, 'hash' => md5(strtolower(trim($_COOKIE['username']))), 'nickname' => $row['nickname'])));
} else {
    echo(json_encode(array('isLogin' => false)));
    setcookie('username', '', time() - 3600);
    setcookie('user_token', '', time() - 3600);
}