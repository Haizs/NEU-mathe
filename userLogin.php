<?php
if (!isset($_GET['email']) || !preg_match("/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/i", $_GET['email'])
    || !isset($_GET['password']) || !preg_match("/^[!-~]{6,}$/i", $_GET['password'])
) {
    http_response_code(400);
    die();
}
require_once('config.php');
try {
    $sql = 'SELECT nickname,password,salt FROM user WHERE email=?';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute(array($_GET['email']));
    $row = $sth->fetch();
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
if ($row['password'] == crypt($_GET['password'], $row['salt'])) {
    $arr = array('error' => false, 'nickname' => $row['nickname']);
    setcookie('username', $_GET['email'], time() + 2592000);
    setcookie('user_token', md5(crypt($row['password'], $row['salt'])), time() + 2592000);
} elseif (is_array($row)) {
    $arr = array('error' => true, 'message' => '密码错误');
} else {
    $arr = array('error' => true, 'message' => '账号不存在');
}
echo(json_encode($arr));